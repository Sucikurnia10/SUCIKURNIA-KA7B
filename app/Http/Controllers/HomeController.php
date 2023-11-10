<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function About(){
        return'About Us';
    }
    public function contact(){
        return('Nama : Suci Kurniawati <br> Nim : D212011032 <br> Kelas : KA7B <br> Email : sucikurnia.watie@gmail.com');
    }
    public function Index(){
        return view('home.index');
    }
}
