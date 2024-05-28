<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paramedik extends Model
{
    use HasFactory;
    protected $table = 'paramedik';
    protected $fillable = ['nama', 
         'alamat',
          'telpon', 'gender', 'tmp_lahir', 'tgl_lahir',
           'kategori','unit_kerja_id'];
}
        
