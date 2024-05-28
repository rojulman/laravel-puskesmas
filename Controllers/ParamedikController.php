<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paramedik;
class ParamedikController extends Controller
{
    public function show(){
        $list_paramedik = Paramedik::all();// select * from paramedik
        return view('paramedik.show', ['list_paramedik' => $list_paramedik]);
    }
}
