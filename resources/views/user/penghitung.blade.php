@extends('layoutuser.index')
@section('title')

@section('content')

<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 bg-white p-10 rounded-xl shadow-lg">
        <div class="text-center">
            <h1 class="text-3xl font-extrabold text-gray-900">Kalkulator BMI</h1>
            <p class="mt-2 text-sm text-gray-600">Hitung Indeks Massa Tubuh Anda</p>
        </div>

        @if ($errors->any())
            <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-red-800">Terdapat {{ count($errors) }} kesalahan input</h3>
                        <div class="mt-2 text-sm text-red-700">
                            <ul class="list-disc pl-5 space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <form method="POST" action="{{ route('bmi.hitung') }}" class="mt-8 space-y-6">
            @csrf

            <div class="space-y-4">
                <div>
                    <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md border">
                        <option value="laki-laki" {{ old('jenis_kelamin') == 'laki-laki' ? 'selected' : '' }}>Laki-Laki</option>
                        <option value="perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>

                <div>
                    <label for="usia" class="block text-sm font-medium text-gray-700">Usia</label>
                    <input type="number" name="usia" id="usia" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md border p-2" value="{{ old('usia', $usia ?? '') }}" placeholder="Masukkan usia (tahun)" required>
                </div>

                <div>
                    <label for="berat" class="block text-sm font-medium text-gray-700">Berat Badan (kg)</label>
                    <input type="number" name="berat" id="berat" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md border p-2" value="{{ old('berat', $berat ?? '') }}" placeholder="Masukkan berat badan" required>
                </div>

                <div>
                    <label for="tinggi" class="block text-sm font-medium text-gray-700">Tinggi Badan (cm)</label>
                    <input type="number" name="tinggi" id="tinggi" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md border p-2" value="{{ old('tinggi', $tinggi_cm ?? '') }}" placeholder="Masukkan tinggi badan" required>
                </div>
            </div>

            <div>
                <button type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition duration-150 ease-in-out">
                    Hitung BMI
                    <span class="absolute right-0 inset-y-0 flex items-center pr-3">
                        <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
            </div>
        </form>

        @isset($bmi)
            <div class="mt-8 p-6 rounded-lg @if($kategori == 'Kurus') bg-yellow-50 border-l-4 border-yellow-400
                @elseif($kategori == 'Normal') bg-green-50 border-l-4 border-green-400
                @elseif($kategori == 'Gemuk') bg-orange-50 border-l-4 border-orange-400
                @else bg-red-50 border-l-4 border-red-400 @endif">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-5 w-5 @if($kategori == 'Kurus') text-yellow-400
                            @elseif($kategori == 'Normal') text-green-400
                            @elseif($kategori == 'Gemuk') text-orange-400
                            @else text-red-400 @endif" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-lg font-medium @if($kategori == 'Kurus') text-yellow-800
                            @elseif($kategori == 'Normal') text-green-800
                            @elseif($kategori == 'Gemuk') text-orange-800
                            @else text-red-800 @endif">Hasil BMI Anda</h3>
                        <div class="mt-2 text-sm @if($kategori == 'Kurus') text-yellow-700
                            @elseif($kategori == 'Normal') text-green-700
                            @elseif($kategori == 'Gemuk') text-orange-700
                            @else text-red-700 @endif">
                            <div class="grid grid-cols-2 gap-2 mt-2">
                                <div>
                                    <p class="font-medium">Jenis Kelamin:</p>
                                    <p>{{ ucfirst($jenis_kelamin) }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Usia:</p>
                                    <p>{{ $usia }} tahun</p>
                                </div>
                                <div>
                                    <p class="font-medium">BMI:</p>
                                    <p>{{ number_format($bmi,2) }}</p>
                                </div>
                                <div>
                                    <p class="font-medium">Kategori:</p>
                                    <p>{{ $kategori }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endisset
    </div>
</div>

@endsection