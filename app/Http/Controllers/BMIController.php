<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\BMIHistory;
use App\Models\User;


class BMIController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        return view('user.penghitung', compact('user'));
    }

    public function history()
    {
        $user = Auth::user();
        $histories = BMIHistory::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
        return view('user.history', compact('histories'));
    }

    public function hitung(Request $request)
    {
        $request->validate([
            'berat' => 'required|numeric|min:1',
            'tinggi' => 'required|numeric|min:1',
            'jenis_kelamin' => 'required|in:laki-laki,perempuan',
            'usia' => 'required|numeric|min:1',
        ]);

        $jenis_kelamin = $request->jenis_kelamin;
        $usia = $request->usia;
        $berat = $request->berat;
        $tinggi_cm = floatval($request->tinggi);
        $tinggi = $tinggi_cm / 100;


        $bmi = $berat / ($tinggi * $tinggi);
        $kategori = "";

        if ($bmi < 18.5) {
            $kategori = 'Kurus';
        }elseif ($bmi < 24.9) {
            $kategori = 'Normal';
        }elseif ($bmi < 29.9) {
            $kategori = 'Kelebihan Berat Badan';
        }else{
            $kategori = 'Obesitas';
        }

        if (Auth::check()) {
            BMIHistory::create([
                'user_id' => Auth::id(),
                'berat' => $berat,
                'tinggi_cm' => $tinggi_cm,
                'bmi' => $bmi,
                'kategori' => $kategori,
                'jenis_kelamin' => $jenis_kelamin,
                'usia' => $usia
            ]);
        }
        
        return view('user.penghitung', compact('bmi', 'kategori', 'berat', 'tinggi_cm', 'jenis_kelamin', 'usia'));
    }

    public function destroy($id)
    {
        $history = BMIHistory::findOrFail($id);
        if (Auth::id() !== $history->user_id) {
        return redirect()->back()->with('error', 'Unauthorized action.');
    }
        $history->delete();
        return redirect()->route('bmi.history')->with('success', 'Riwayat berhasil dihapus.');
    }
}
