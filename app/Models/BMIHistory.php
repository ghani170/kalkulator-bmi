<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BMIHistory extends Model
{
    use HasFactory;

    protected $table = 'histories';

    protected $fillable = ['user_id', 'berat', 'tinggi_cm', 'bmi', 'kategori', 'jenis_kelamin', 'usia'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
