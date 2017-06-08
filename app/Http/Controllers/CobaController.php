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
    	return $a;
    }
     public function test2($id)
    {
    	$a = coba::find($id);
    	return $a;
    }
     public function test3()
    {
    	$tampilan = coba::all();
    	return view ('index',compact('tampilan'));
    }
    public function percobaan()
    {
    	$buah = ['Mangga','Jeruk','Apel','Anggur','Manggis'];
    	return view('buah',compact('buah'));
    }
      public function test(data)
    {
        $koplak = ['binatang' => ['kucing', 'macan'],
                    'kendaraan' => ['mobil','motor'],
                    'laptop' => ['asus','acer']];
        $ahah = $koplak[$data];
        return view ('semua',compect('ahah'));

    }

   	
   
}
