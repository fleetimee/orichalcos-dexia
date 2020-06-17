<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index() {
        echo '<a href=/create-session>Create Session</a>';
        echo '<hr>';
        echo '<a href=/get-session>Get Session</a>';
        echo '<hr>';
        echo '<a href=/delete-session>Delete Session</a>';
        echo '<hr>';
    }

    public function createSession() {
        session(['level' => 'admin']);
        return "Session berhasil dibuat";
    }

    public function getSession(Request $request) {
        echo session('level');
        echo "<hr>";
        echo $request->session()->get('level');
    }

    public function deleteSession() {
        session()->forget('level');
    }
}
