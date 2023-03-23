<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    public $fillable = ['nama','alamat','tanggal_lahir','riwayat_sakit','status'];
}
