<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChuDe;
class ChuDeController extends Controller
{
    public function index()
    {
        $ds_chude= ChuDe::all(); // SELECT * FROM cusc_loai

        return view('chude.index')
            ->with('danhsachchude',$ds_chude);
    }
}
