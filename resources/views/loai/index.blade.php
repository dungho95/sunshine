@extends('backend.layout.index')

@section('title')
Danh sach loai san pham
@endsection

@section('main-content')
<a href="{{route('danhsachloai.create')}}">Thêm mới loại</a>
<!-- Tạo nút xem biểu mẫu khi in trên web
- Theo quy ước, các route đã được đăng ký trong file `web.php` đều phải được đặt tên để dễ dàng bảo trì code sau này.
- Đường dẫn URL là đường dẫn được tạo ra bằng route có tên `danhsachsanpham.print`
- Sẽ có dạng http://tenmiencuaban.com/admin/danhsachsanpham/print
-->
<a href="{{ route('danhsachloai.print') }}" class="btn btn-primary">In ấn</a>
<h1><span style="color:red;">DANH SÁCH LOẠI SẢN PHẨM</span></h1>
<div class="flash-message">
    @foreach(['danger','warning', 'success','info'] as $msg)
        @if(Session::has('alert-'.$msg))
        <p class="alert alert-{{$msg}}">{{Session::get('alert-'. $msg)}}<a href="#" class="lose" data-dismiss="alert" aria-lable="lose">&times;</a></p>
        @endif
    @endforeach

</div>

<table  class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
<thead>
    <tr>
        <th>Ma</th>
        <th>Ten</th>
        <td>Action</td>
        <td>Xóa</td>
    </tr>
    </thead>
     <tbody>
    @foreach($danhsachloai as $loai)
        <tr>
            <td>{{$loai ->l_ma}}</td>
            <td>{{$loai ->l_ten}}</td>
            <td><a href="{{ route('danhsachloai.edit',['id'=> $loai->l_ma]) }}">Sua</a></td>
            <td>
                <form method="post" action="{{ route('danhsachloai.destroy',['id'=> $loai->l_ma]) }}">
                <input type="hidden" name="_method" value="DELETE"/>
                {{ csrf_field()}}
                <button type="submit" class="btn btn-danger">Xóa</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection