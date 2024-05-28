<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table="pasien";
    protected $fillable = [
        'kode',
        'nama',
        'alamat',
        'tmp_lahir',
        'tgl_lahir',
        'email',
        'kelurahan_id',
    ];
    public $timestamps = false;

    public function kelurahan(){
        return $this->belongsTo(Kelurahan::class);
    }

}
