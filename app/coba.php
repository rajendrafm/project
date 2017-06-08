<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coba extends Model
{
    //
    protected $table ='coba';
    protected $fillable =['Nama','Kelas','Jurusan','Jenis_kelamin'];
    protected $visible =['Nama','Kelas','Jurusan','Jenis_kelamin'];
    public $timetamps = true;
}
