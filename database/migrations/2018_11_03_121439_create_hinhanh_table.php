<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHinhanhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hinhanh', function (Blueprint $table) {
       /* $table 
            ->unsignedTinyInteger('sp_ma')
            ->comment('Mã sản phẩm');
        $table 
            ->unsignedTinyInteger('ha_stt')
            ->comment('Số thứ tự');
        
        $table 
            ->foreign('sp_ma')
            ->references('sp_ma')
            ->on('sanpham');
        
            $table 
            ->foreign('l_ma')
            ->references('l_ma')
            ->on('loai');
*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hinhanh');
    }
}
