@extends('backend.layout.index')

@section('title')
Thêm mới loại sản phâm
@endsection

@section('main-content')
<h1>Thêm mới loại sản phẩm</h1>
<form role="form" id="frmThemLoaiSanPham" method="POST" action="{{route('danhsachloai.create')}}" enctype="multipart/form-data  ">
                   <input type="hidden" name="_method" value="POST" />
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="l_ten">Tên loại sản phẩm</label>
                            <input type="text" class="form-control" id="l_ten" name="l_ten" placeholder="Tên loại sản phẩm">
                        </div>
                        <div class="form-group">
                            <label for="l_taoMoi">Ngày tạo mới</label>
            
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input id="l_taoMoi" name="l_taoMoi" type="text" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="" >
                            </div>
                            <!-- /.input group -->
                          </div>
                          <div class="form-group">
                            <label for="l_capNhat">Ngày cập nhật</label>
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input id="l_capNhat" name="l_capNhat" type="text" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="" >
                            </div>
                            <!-- /.input group -->
                          </div>
                        <div class="form-group">
                            <label for="l_trangthai">Trạng thái</label>
                            <select name="l_trangthai" class="form-control select2" data-placeholder="Chọn..."
                                    style="width: 100%;">
                              <option value="1">Khóa</option>
                              <option value="2">Khả dụng</option>
                            </select>
                          </div>
                          <div class="input-group">
                            <label for="sp_hinh">Hình đại diện</label>
                              <input name="sp_hinh" type="file">
                          </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </form>
@endsection