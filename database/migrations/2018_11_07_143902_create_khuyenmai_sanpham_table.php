<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhuyenmaiSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai_sanpham', function (Blueprint $table) {
        $table->engine = 'InnoDB'; // Ho tro Relationship
        $table 
            ->unsignedTinyInteger('km_ma')
            ->comment('Mã khuyến mãi');
        $table 
            ->unsignedTinyInteger('sp_ma')
            ->comment('Mã sản phẩm');
        $table 
            ->unsignedTinyInteger('m_ma')
            ->comment('Mã mẫu');
        $table
            ->string('kmsp_giaTri',50)
            ->comment('Giá trị');
        $table
            ->unsignedTinyInteger('kmsp_trangThai')
            ->comment('1:đóng 2:khả dụng');  
        $table 
            ->foreign('km_ma')
            ->references('km_ma')
            ->on('khuyenmai');
        $table 
            ->foreign('sp_ma')
            ->references('sp_ma')
            ->on('sanpham');
        $table 
            ->foreign('m_ma')
            ->references('m_ma')
            ->on('mau');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khuyenmai_sanpham');
    }
}
