<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function home() { return view('web.home'); }
    public function contact() { return view('web.contact'); }
    public function about() { return view('web.about'); }
    public function smoothie() { return view('web.smoothie'); }
    public function products() { return view('web.products'); }
    public function news() { return view('web.news'); }
    public function gallery() { return view('web.gallery'); }
    public function cooperation() { return view('web.cooperation'); }
    public function gojiRed() { return view('web.goji-red'); }
    public function gojiBlack() { return view('web.goji-black'); }
    public function planting() { return view('web.planting'); }
    public function cultivation() { return view('web.cultivation'); }
    public function recipes() { return view('web.recipes'); }
    public function video() { return view('web.video'); }
    public function productsSeedling1() { return view('web.products.seedling1'); }
    public function productsSeedling2() { return view('web.products.seedling2'); }
    public function productsSeedling3() { return view('web.products.seedling3'); }
    public function productsBerry1() { return view('web.products.berry1'); }
    public function productsBerry2() { return view('web.products.berry2'); }
    public function productsJam() { return view('web.products.jam'); }
    public function productsSweet() { return view('web.products.sweet'); }
}
