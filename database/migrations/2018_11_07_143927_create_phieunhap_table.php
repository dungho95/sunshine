<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhieunhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieunhap', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ho tro Relationship
            $table->unsignedTinyInteger('pn_ma')
                ->autoIncrement()
                ->comment('Mã phiếu nhập');
            $table
                ->string('pn_nguoiGiao',100)
                ->comment('Người giao');
            $table
                ->string('pn_soHoaDon',15)
                ->comment('Số hóa đơn');
            $table  
                ->datetime('pn_ngayXuatHoaDon')
                ->commetn('Ngày xuất hóa đơn');
            $table  
                ->datetime('pn_ghiChu')
                ->commetn('Ghi chú');
            $table
                ->unsignedTinyInteger('nv_nguoiLapPhieu')
                ->comment('Người lập phiếu');
            $table
                ->datetime('pn_ngayLapPhieu')
                ->comment('Ngày lập phiếu');
            $table
                ->unsignedTinyInteger('nv_keToan')
                ->comment('Kế toán');
            $table
                ->datetime('pn_ngayXacNhan')
                ->comment('Ngày xác nhận');
            $table
                ->unsignedTinyInteger('nv_thukho')
                ->comment('Thủ kho');
            $table
                ->datetime('pn_ngayNhapKho')
                ->comment('Ngày nhập kho');
            $table
                ->timestamp('pn_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Tạo mới');
            $table
                ->timestamp('pn_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Cập nhật ');
            $table
                ->unsignedTinyInteger('pn_trangthai')
                ->comment('1:đóng 2:khả dụng');  
            $table 
                ->unsignedTinyInteger('ncc_ma')
                ->comment('Mã nhà cung cấp');
            
            $table 
                ->foreign('nv_nguoiLapPhieu')
                ->references('nv_ma')
                ->on('nhanvien');
            $table 
                ->foreign('nv_keToan')
                ->references('nv_ma')
                ->on('nhanvien');
            $table 
                ->foreign('nv_thuKho')
                ->references('nv_ma')
                ->on('nhanvien');
            $table
                ->unique(['pn_soHoaDon']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phieunhap');
    }
}
