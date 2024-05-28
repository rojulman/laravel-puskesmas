<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data_layout = [
            'title' => 'Halaman Admin',
            'card_title' => 'Selamat Datang di Halaman Admin',
        ];
        View::share($data_layout);

        return view('admin.index',['username' => 'Ahmad Fauzi']);
    }
}
