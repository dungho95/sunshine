<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhuyenmaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ho tro Relationship
            $table->unsignedTinyInteger('km_ma')
                ->autoIncrement()
                ->comment('Mã khuyến mãi');
            $table
                ->string('km_ten',200)
                ->comment('Tên khuyến mãi');
            $table->Text('km_noiDung')
                ->comment('Nội dung');
            $table
                ->timestamp('km_batDau')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Bắt đầu');
            $table
                ->timestamp('km_ketThuc')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Kết thúc');
            $table
                ->string('km_giaTri',50)
                ->comment('Giá trị');
            $table
                ->unsignedTinyInteger('nv_nguoiLap')
                ->comment('Người lập');
            $table
                ->timestamp('km_ngayLap')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Ngày lập');
            $table
                ->unsignedTinyInteger('nv_kyNhay')
                ->comment('Ky nhay');
            $table
                ->timestamp('km_ngayKyNhay')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Ngày ky nhay');
            $table
                ->unsignedTinyInteger('nv_kyDuyet')
                ->comment('Người ký duyệt');
            $table
                ->timestamp('km_ngayDuyet')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Ngày duyệt');
            $table
                ->timestamp('km_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Tạo mới');
            $table
                ->timestamp('km_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Cập nhật ');
            $table
                ->unsignedTinyInteger('km_trangthai')
                ->comment('1:đóng 2:khả dụng');  
            $table 
                ->foreign('nv_nguoiLap')
                ->references('nv_ma')
                ->on('nhanvien');
            $table 
                ->foreign('nv_kyNhay')
                ->references('nv_ma')
                ->on('nhanvien');
            $table 
                ->foreign('nv_kyDuyet')
                ->references('nv_ma')
                ->on('nhanvien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyenmai');
    }
}
