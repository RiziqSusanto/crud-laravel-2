<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    protected $table = 'murid';
    protected $primaryKey = 'id_murid';
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = ['id_murid','nim', 'nama','kelas_id', 'jurusan_id'];

    public function jurusan()
    {
        return $this->belongsTo('App\Jurusan', 'jurusan_id', 'id_jurusan');
    }
    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'kelas_id', 'id_kelas');
    }
}
