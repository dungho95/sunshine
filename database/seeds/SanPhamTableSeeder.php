<?php

use Illuminate\Database\Seeder;

class SanPhamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker\Factory::create('vi_VN');
        $now=new Carbon('2018-11-03','Asia/Ho_Chi_Minh');

        $ds_loai = DB::table('loai')->get();
/*
0 => id: 1, ten
*/

        $list=[];
        for($i=1;$i<=100;$i++)
        {
            $created=$now->copy()->addSeconds($faker->numberBetween(1,259200));
            $update=$created->copy()->addSeconds($faker->numberBetween(300,172800));

            array_push($list,[
                'sp_taoMoi'         => $created,
                'sp_capNhat'        =>$update,
                'sp_ten'            =>$faker->text(50),
                'sp_giaGoc'         =>$faker->randomNumber(5,6),
                'sp_giaBan'         =>$faker->randomNumber(5,6),
                'sp_hinh'           =>$faker->file($sourceDir, $targetDir, false),
                'sp_thongTin'       =>$faker->text(70),
                'sp_danhGia'        =>$faker->sentence($nbWords = 6, $variableNbWords = true),
                'sp_trangThai'      =>2,
                'l_ma'              =>$ds_loai[$faker->numberBetween(0, count($ds_loai)-1)].l_ma
            ]);
            $now=$update->copy();
        }
        DB::table('sanpham')->insert($list);
    }
}
