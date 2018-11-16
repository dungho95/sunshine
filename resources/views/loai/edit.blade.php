@extends('backend.layout.index')

@section('title')
Hieu
@endsection

@section('main-content')
<form role="form" id="frmSuaLoaiSanPham" method="POST" action="{{route('danhsachloai.update',['id'=>$loai->l_ma]) }}">
                   <input type="hidden" name="_method" value="PUT" />
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="l_ten">Tên loại sản phẩm</label>
                            <input type="text" class="form-control" id="l_ten" name="l_ten" placeholder="Tên loại sản phẩm" value="{{$loai->l_ten}}">
                        </div>
                        <div class="form-group">
                            <label for="l_taoMoi">Ngày tạo mới</label>
            
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input id="l_taoMoi" name="l_taoMoi" type="text" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="" value="{{$loai->l_taoMoi}}">
                            </div>
                            <!-- /.input group -->
                          </div>
                          <div class="form-group">
                            <label for="l_capNhat">Ngày cập nhật</label>
            
                            <div class="input-group">
                              <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                              </div>
                              <input id="l_capNhat" name="l_capNhat" type="text" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask="" value="{{$loai->l_capNhat}}">
                            </div>
                            <!-- /.input group -->
                          </div>
                        <div class="form-group">
                            <label for="l_trangthai">Trạng thái</label>
                            <select name="l_trangthai" class="form-control select2" data-placeholder="Chọn..."
                                    style="width: 100%;">
                              <option value="1" {{ $loai->l_trangthai == 1 ? "selected" : "" }}>Khóa</option>
                              <option value="2" {{ $loai->l_trangthai == 2 ? "selected" : "" }}>Khả dụng</option>
                            </select>
                          </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Cập Nhật</button>
                    </div>
                </form>
@endsection