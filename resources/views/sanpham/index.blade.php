@extends('backend.layout.index')

@section('title')
Danh sach san pham
@endsection

@section('main-content')
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))
      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
</div>

<a href="{{ route('danhsachsanpham.create') }}" class="btn btn-primary">Thêm mới sản phẩm</a>
<!-- Tạo nút Xuất Excel danh sách sản phẩm
- Theo quy ước, các route đã được đăng ký trong file `web.php` đều phải được đặt tên để dễ dàng bảo trì code sau này.
- Đường dẫn URL là đường dẫn được tạo ra bằng route có tên `danhsachsanpham.excel`
- Sẽ có dạng http://tenmiencuaban.com/admin/danhsachsanpham/excel -->
<!-- Tạo nút Xuất PDF danh sách sản phẩm
- Theo quy ước, các route đã được đăng ký trong file `web.php` đều phải được đặt tên để dễ dàng bảo trì code sau này.
- Đường dẫn URL là đường dẫn được tạo ra bằng route có tên `danhsachsanpham.pdf`
- Sẽ có dạng http://tenmiencuaban.com/admin/danhsachsanpham/pdf
-->
<a href="{{ route('danhsachsanpham.pdf') }}" class="btn btn-primary">Xuất PDF</a>
<a href="{{ route('danhsachsanpham.excel') }}" class="btn btn-primary">Xuất Excel</a>
<!-- Tạo nút xem biểu mẫu khi in trên web
- Theo quy ước, các route đã được đăng ký trong file `web.php` đều phải được đặt tên để dễ dàng bảo trì code sau này.
- Đường dẫn URL là đường dẫn được tạo ra bằng route có tên `danhsachsanpham.print`
- Sẽ có dạng http://tenmiencuaban.com/admin/danhsachsanpham/print
-->
<a href="{{ route('danhsachsanpham.print') }}" class="btn btn-primary">In ấn</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>Hình ảnh</th>
            <th>Thuộc loại</th>
            <th>Sửa-Xóa</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ds_sp as $sp)
            <tr>
                <td>{{ $sp->sp_ma }}</td>
                <td>{{ $sp->sp_ten }}</td>
                <td><img src="{{ asset('storage/photos/' . $sp->sp_hinh) }}" class="img-list" /></td>
                <td>{{ $sp->loaiSp->l_ten }}</td>
                <td>
                    <a href="{{ route('danhsachsanpham.edit', ['id' => $sp->sp_ma]) }}" class="btn btn-primary pull-left">Sửa</a>
                    <form method="post" action="{{ route('danhsachsanpham.destroy', ['id' => $sp->sp_ma]) }}" class="pull-left">
                        <input type="hidden" name="_method" value="DELETE" />
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger">Xoa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection