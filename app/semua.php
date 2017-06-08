<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class semua extends Model
{
    //
     protected $table ='coba';
    protected $fillable =['Binatang','Kendaraan','Laptop'];
    protected $visible =['Binatang','Kendaraan','Laptop'];
    public $timetamps = true;
}
