<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ho tro Relationship
            $table->unsignedTinyInteger('kh_ma')
                ->autoIncrement()
                ->comment('Mã khách hàng');
            $table
                ->string('kh_taiKhoan',50)
                ->comment('Tài khoản');
            $table
                ->string('kh_matKhau',32)
                ->comment('Mật khẩu');
            $table
                ->string('kh_hoTen',100)
                ->comment('Họ tên');
            $table->unsignedTinyInteger('kh_gioiTinh')
                ->comment('Giới tính');
            $table
                ->string('kh_email',100)
                ->comment('Email');
            $table
                ->timestamp('kh_ngaySinh')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Ngày sinh');
            $table
                ->string('kh_diaChi',250)
                ->comment('Địa chỉ');
            $table
                ->string('kh_dienThoai',11)
                ->comment('Điện thoại');
           
            $table
                ->timestamp('kh_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Tạo mới');
            $table
                ->timestamp('kh_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Cập nhật ');
            $table
                ->unsignedTinyInteger('kh_trangThai')
                ->comment('1:đóng 2:khả dụng');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khachhang');
    }
}
