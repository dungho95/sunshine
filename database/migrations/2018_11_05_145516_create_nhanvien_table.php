<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ho tro Relationship
            $table->unsignedTinyInteger('nv_ma')
                ->autoIncrement()
                ->comment('Mã nhân viên');
            $table
                ->string('nv_taiKhoan',50)
                ->comment('Tài khoản');
            $table
                ->string('nv_matKhau',32)
                ->comment('Mật khẩu');
            $table
                ->string('nv_hoTen',100)
                ->comment('Họ tên');
            $table->unsignedTinyInteger('nv_gioiTinh')
                ->comment('Giới tính');
            $table
                ->string('nv_email',100)
                ->comment('Email');
            $table
                ->timestamp('nv_ngaySinh')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Ngày sinh');
            $table
                ->string('nv_diaChi',250)
                ->comment('Địa chỉ');
            $table
                ->string('nv_dienThoai',11)
                ->comment('Điện thoại');
           
            $table
                ->timestamp('nv_taoMoi')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Tạo mới');
            $table
                ->timestamp('nv_capNhat')
                ->default(DB::raw('CURRENT_TIMESTAMP'))
                ->comment('Cập nhật ');
            $table
                ->unsignedTinyInteger('nv_trangthai')
                ->comment('1:đóng 2:khả dụng');  
            $table 
                ->unsignedTinyInteger('q_ma')
                ->comment('Mã Quyền');
            
            $table 
                ->foreign('q_ma')
                ->references('q_ma')
                ->on('quyen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nhanvien');
    }
}
