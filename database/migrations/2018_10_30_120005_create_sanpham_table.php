<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ho tro Relationship
            $table->unsignedTinyInteger('sp_ma')
                ->autoIncrement()
                ->comment('Mã sản phẩm');
            $table
                ->string('sp_ten',100)
                ->comment('Tên sản phẩm');
            $table
                ->integer('sp_giaGoc')
                ->comment('Giá Gốc');
            $table
                ->integer('sp_giaBan')
                ->comment('Giá Bán');
            $table
                ->string('sp_hinh',200)
                ->comment('Hình');
            $table
                ->text('sp_thongTin')
                ->comment('Thông tin');
            $table
                ->string('sp_danhGia')
                ->comment('Đánh giá');
            $table
                ->timestamp('sp_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Tạo mới');
            $table
                ->timestamp('sp_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Cập nhật ');
            $table
                ->unsignedTinyInteger('sp_trangthai')
                ->comment('1:đóng 2:khả dụng');  
            $table 
                ->unsignedTinyInteger('l_sp_ma')
                ->comment('Mã loại');
            
            $table 
                ->foreign('l_sp_ma')
                ->references('l_ma')
                ->on('loai');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
