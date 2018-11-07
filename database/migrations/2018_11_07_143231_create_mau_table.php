<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mau', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Ho tro Relationship
            $table->unsignedTinyInteger('m_ma')
                ->autoIncrement()
                ->comment('Mã mẫu');
            $table->string('m_ten',50)->comment('Tên mẫu');
            $table->timestamp('m_taoMoi')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Tạo mới');
            $table->timestamp('m_capNhat')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Cập nhật ');
            $table->unsignedTinyInteger('m_trangthai')->comment('1:đóng 2:khả dụng');  
            
            $table->unique(['m_ten']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mau');
    }
}
