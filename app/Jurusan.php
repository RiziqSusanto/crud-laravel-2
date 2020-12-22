<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = "jurusan";
    protected $primaryKey = "id_jurusan";
    protected $keyType = "string";
    protected $fillable = ["id_jurusan", "nama_jurusan"];
    public $timestamps = false;

    public function kelas()
    {
        return $this->hasMany('App\Kelas');
    }
    public function murid()
    {
        return $this->hasMany('App\Murid');
    }
}
