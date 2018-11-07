<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGopyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gopy', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ho tro Relationship
            $table->unsignedTinyInteger('gy_ma')
                ->autoIncrement()
                ->comment('Mã góp ý');
            $table 
                ->datetime('gy_thoiGian')
                ->comment('Thời gian');
            $table 
                ->datetime('gy_noiDung')
                ->comment('Nội dung');                   
            $table 
                ->unsignedTinyInteger('km_ma')
                ->comment('Mã khuyến mãi');
            $table 
                ->unsignedTinyInteger('sp_ma')
                ->comment('Mã sản phẩm');
            $table 
                ->foreign('km_ma')
                ->references('km_ma')
                ->on('khuyenmai');
            $table 
                ->foreign('sp_ma')
                ->references('sp_ma')
                ->on('sanpham');
            $table
                ->unsignedTinyInteger('kh_trangThai')
                ->comment('1:đóng 2:khả dụng 3: là gì');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gopy');
    }
}
