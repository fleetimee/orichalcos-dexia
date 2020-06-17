<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dataProduk() {
        return "Data Produk";
    }

    public function dataKategori() {
        return "Data Kategori";
    }

    public function login() {
        return view('form-login');
    }

    public function prosesLogin(Request $request) {
        $userAdmin = ['admin', 'fajri'];

        if(in_array($request->username, $userAdmin)) {
            session(['username' => $request->username]);
            return redirect('/data-produk');
        } else {
            return back()->withInput()->with('message', 'Username tidak terdaftar');
        }
    }

    public function logout() {
        session()->forget('username');
        return redirect('/')->with('message', "telah logout");
    }
}
