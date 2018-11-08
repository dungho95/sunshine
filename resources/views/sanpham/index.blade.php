@extends('backend.layout.index')

@section('title')
Danh sach san pham
@endsection

@section('main-content')
<h1>Hello first action from <span style="color:red;">SanPhamController</span></h1>

<table>
    <thead>
        <tr>
            <th> Mã </th>
            <th> Tên </th>
        </tr>
    </thead>
    <tbody>
        @foreach($ds_sp as $sp)
            <tr>
                <td>{{ $sp->sp_ma}}</td>
                <td>{{$sp->sp_ten}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection