<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatChudeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chude', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ho tro Relationship
            $table->unsignedTinyInteger('cd_ma')
                ->autoIncrement()
                ->comment('Mã chủ đề');
            $table->string('cd_ten',50)->comment('Tên chủ đề');
            $table->timestamp('cd_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Tạo mới');
            $table->timestamp('cd_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Cập nhật ');
            $table->unsignedTinyInteger('cd_trangthai')->comment('1:đóng 2:khả dụng');  
               
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chude');
    }
}
