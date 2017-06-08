<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrakerinController extends Controller
{
    //
    public function nama()
    {
    	$a = "Cucu Cahyati";
    	$b = "Jajang Nurjaman";
    	$c = "Jaja";
    	$d = "Nurjaman";
    	$e = "Jajang";

    	return view('nama', compact('a','b','c','d','e'));
    }
    public function makanan()
    {
    	$f = "Burger";
    	$g = "Hotdog";
    	$h = "Nasgor";
    	$i = "Capcay";
    	$j = "Mie";

    	return view('makanan', compact('f','g','h','i','j'));
    }
        public function minuman()
    {
    	$k = "Teh";
    	$l = "Kopi";
    	$m = "Susu";
    	$n = "Jahe";
    	$o = "Air Putih";
    	$p = "putih";

    	return view('minuman', compact('k','l','m','n','o','p'));
    }
            public function bulan()
    {
    	$q = "januari";
    	$r = "febuari";
    	$s = "maret";
    	$t = "april";
    	$u = "mei";

    	return view('bulan', compact('q','r','s','t','u'));

    }
            public function tahun()
    {
    	$v = "2000";
    	$w = "2001";
    	$x= "2002";
    	$y = "2003";
    	$z = "2004";

    	return view('tahun', compact('v','w','x','y','z'));

    }
    public function param ($a)
    {
    	return view('welcome2', compact('a'));
    }
}
