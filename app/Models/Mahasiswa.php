<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamp = false;
    protected $primaryKey = 'Nim'; // Memanggil isi DB dengan Primary Key
    public $incrementing = false;

    protected $fillable = [
        'Nim',
        'Nama',
        'kelas_id',
        'Jurusan',
        'No_Handphone',
    ];
}
