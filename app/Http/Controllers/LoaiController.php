<?php

namespace App\Http\Controllers;
use App\Loai;

use Illuminate\Http\Request;

class LoaiController extends Controller
{
    public function index()
    {
        $ds_loai= Loai::all(); // SELECT * FROM cusc_loai

        return view('loai.index')
            ->with('danhsachloai',$ds_loai);
    }
}
