<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhacungcapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhacungcap', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ho tro Relationship
            $table
                ->unsignedTinyInteger('ncc_ma')
                ->autoIncrement()
                ->comment('Mã nhà cung cấp');
            $table
                ->string('ncc_ten',200)
                ->comment('Tên nhà cung cấp');
            $table
                ->string('ncc_daiDien',100)
                ->comment('Đại diện');
            $table
                ->string('ncc_diaChi',250)
                ->comment('Địa chỉ');
            $table
                ->string('ncc_dienThoai',11)
                ->comment('Điện thoại');
            $table
                ->string('ncc_email',100)
                ->comment('Email');
            $table
                ->timestamp('ncc_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Tạo mới');
            $table
                ->timestamp('ncc_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Cập nhật ');
            $table
                ->unsignedTinyInteger('ncc_trangthai')
                ->comment('1:đóng 2:khả dụng');  
            $table
                ->unsignedTinyInteger('xx_ma')
                ->comment('Mã xuất xứ');
            $table 
                ->foreign('xx_ma')
                ->references('xx_ma')
                ->on('xuatxu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhacungcap');
    }
}
