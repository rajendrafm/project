<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coba;

class CobaController extends Controller
{
    //
    public function tesdt()
    {
    	$a = coba::all();
    	return view ('index',compact('a'));    
    }
     public function test2($a)
    {
    	$a = coba::where('Nama','like',$nama)-> get ()
    	return $a;
    }
     public function test3($id)
    {
    	$tampilan = coba::find($id);
        return view ('index',compact('tampilan'));
    }
    public function percobaan()
    {
    	$buah = ['Mangga','Jeruk','Apel','Anggur','Manggis'];
    	return view('buah',compact('buah'));
    }
      public function dunia($data)
    {
        $dato = ['binatang' => ['kucing', 'macan'],
                'kendaraan' => ['mobil','motor'],
                'laptop' => ['asus','acer']];
        $yoyo = $dato[$data];
        return view ('aa', compact('yoyo'));

    }

   	
   
}
