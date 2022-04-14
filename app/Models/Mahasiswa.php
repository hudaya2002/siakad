<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa'; // Eloquent akan membuat model mahasiswa menyimpan record di tabel mahasiswa
    protected $primaryKey = 'nim'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'Nim',
        'Nama',
        'Email',
        'Alamat',
        'Tanggal_Lahir',
        'Jenis_Kelamin',
        'Kelas_id',
        'Jurusan',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
