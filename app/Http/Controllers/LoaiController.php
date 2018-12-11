<?php

namespace App\Http\Controllers;
use App\Loai;
use Session;
use App\Http\Requests\LoaiRequest;

use Illuminate\Http\Request;

class LoaiController extends Controller
{
    public function index()
    {
        $ds_loai= Loai::all(); // SELECT * FROM cusc_loai

        return view('loai.index')
            ->with('danhsachloai',$ds_loai);
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("loai.create");
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loai               = new Loai();
        $loai->l_ten        =$request->l_ten;
        $loai->l_taoMoi     =$request->l_taoMoi;
        $loai->l_capNhat    =$request->l_capNhat;
        $loai->l_trangthai  =$request->l_trangthai;
        $loai->save();
        Session::flash('alert-info','Cap nhat thang cong roi do ahihi!');
        return redirect() ->route('danhsachloai.index');

    }
    
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loai=Loai::where("l_ma",$id)->first();
        return view('loai.edit')->with('loai',$loai);
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function update(LoaiRequest $request,$id)
    {
        // $validation = Validator::make($request->all(),[
        //     'l_ten'=> 'required|unique:loai|max:60',
        //     'l_taoMoi' => 'required',
        //     'l_capNhat'=> 'required',
        //     'l_trangThai'=>'required',
        // ]);

        // if($validation->fails()){
        //     return redirect(route('danhsachloai.edit',['id'=>$id]))
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        $loai = Loai::where("l_ma",$id)->first();
        $loai->l_ten=$request->l_ten;
        $loai->l_taoMoi=$request->l_taoMoi;
        $loai->l_capNhat=$request->l_capNhat;
        $loai->l_trangthai=$request->l_trangthai;
        $loai->save();

        Session::flash('alert-info','Cap nhat thang cong roi do ahihi!');
        return redirect() ->route('danhsachloai.index');


    }

    public function destroy($id)
    {
        $loai = Loai::where("l_ma",$id)->first();
        $loai->delete();

        Session::flash('alert-danger','Xoa du lieu thang cong roi do ahihi!');
        return redirect() ->route('danhsachloai.index');


    }
    public function print()
    {
        $ds_loai    = Loai::all();
        $data = [
            'danhsachloai'    => $ds_loai,
        ];
        return view('loai.print')
            ->with('danhsachloai', $ds_loai);
    }

}
