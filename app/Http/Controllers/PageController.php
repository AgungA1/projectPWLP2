<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }
    public function about() {
        return 'NIM: 2141720114 <br> Nama: Agung Malik Al Qindy';
    }
    public function articles($id) {
        return "Halaman artikel dengan id {$id}";
    }
}
