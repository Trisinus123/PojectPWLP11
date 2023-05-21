<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Kelas;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswas
    public $timestamps = false;
    protected $primaryKey = 'Nim'; // Memanggil isi DB dengan Primary Key
    public $incrementing = false;

    protected $fillable = [
        'Nim',
        'Nama',
        'Jurusan',
        'No_Handphone',
        'Email',
        'Tanggal_Lahir',
        'kelas_id',
    ];
}



