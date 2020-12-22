<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id_kelas';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['id_kelas', 'nama_kelas', 'jurusan_id'];

    public function jurusan()
    {
        return $this->belongsTo('App\Jurusan', 'jurusan_id', 'id_jurusan');
    }
    public function murid()
    {
        return $this->hasMany('App\Murid');
    }
}
