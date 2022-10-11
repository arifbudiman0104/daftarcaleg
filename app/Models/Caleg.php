<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Caleg extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'nama',
        'daerahpemilihan',
        'nik',
        'notelepon',
        'tempatlahir',
        'tanggallahir',
        'jeniskelamin',
        'agama',
        'alamatktp',
        'alamatdomisili',
        'statusperkawinan',
        'pendidikanterakhir',
        'pekerjaan',
        'sd',
        'smp',
        'sma',
        's1',
        's2',
        's3',
        'riwayatdiklat',
        'riwayatorganisasi',
        'riwayatpekerjaan',
        'riwayatpenghargaan'
    ];
}
