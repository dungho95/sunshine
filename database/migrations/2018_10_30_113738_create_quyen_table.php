<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuyenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quyen', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ho tro Relationship
            $table->unsignedTinyInteger('q_ma')
                ->autoIncrement()
                ->comment('Mã quyền');
            $table->string('q_ten',30)->comment('Tên quyền');
            $table->string('q_dienGiai',30)->comment('Diễn giải');
            $table->timestamp('q_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Tạo mới');
            $table->timestamp('q_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Cập nhật ');
            $table->unsignedTinyInteger('q_trangthai')->comment('1:đóng 2:khả dụng');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quyen');
    }
}
