<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietnhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietnhap', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ho tro Relationship
            $table 
                ->unsignedTinyInteger('pn_ma')
                ->comment('Mã phiếu nhập');
            $table 
                ->unsignedTinyInteger('sp_ma')
                ->comment('Mã sản phẩm');
            $table 
                ->unsignedTinyInteger('m_ma')
                ->comment('Mã mẫu');
            $table
                ->smallInteger('ctn_soLuong')
                ->comment('Số lượng'); 
            $table
                ->string('ctn_donGia')
                ->comment('Đơn giá');
             
            $table 
                ->foreign('pn_ma')
                ->references('pn_ma')
                ->on('phieunhap');
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
        Schema::dropIfExists('chitietnhap');
    }
}
