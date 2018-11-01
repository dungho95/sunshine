<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateXuatxuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xuatxu', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ho tro Relationship
            $table->unsignedTinyInteger('xx_ma')
                ->autoIncrement()
                ->comment('Mã xuất xứ');
            $table->string('xx_ten',50)->comment('Tên xuất xứ');
            $table->timestamp('xx_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Tạo mới');
            $table->timestamp('xx_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Cập nhật ');
            $table->unsignedTinyInteger('xx_trangthai')->comment('1:đóng 2:khả dụng');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('xuatxu');
    }
}
