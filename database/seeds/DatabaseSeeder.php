<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        DB::table('phanquyen')->insert([
            ['name' => 'admin'],
            ['name' => 'giangvien'],
            ['name' => 'sinhvien']
        ]);

        factory(App\User::class, 5)->create();

        DB::table('nganh')->insert([
            ['name' => 'Công nghệ thông tin'],
            ['name' => 'Thiết kế đồ họa'],
            ['name' => 'Ứng dụng phần mềm'],
            ['name' => 'Cơ điện tử'],
            ['name' => 'Công nghệ Ô tô'],
            ['name' => 'Điện dân dụng'],
            ['name' => 'Điện tử công nghiệp'],
            ['name' => 'Kế toán doanh nghiệp'],
            ['name' => 'Quản trị doanh nghiệp'],
        ]);

        DB::table('mon')->insert([
            ['nganh_id' => 1, 'ten_mon' => 'Cơ sở dữ liệu'],
            ['nganh_id' => 1, 'ten_mon' => 'Thiết kế và giải thuật'],
        ]);

        factory(App\BaiViet::class, 5)->create();

        DB::table('baitest')->insert([
            ['mon_id' => 2, 'user_id' => 3, 'tieu_de' => 'Nói câu gì cho nó ngầu', 'luot_xem' => 45],
            ['mon_id' => 2, 'user_id' => 3, 'tieu_de' => 'Trắc nghiệm tính cách', 'luot_xem' => 5],
        ]);

        DB::table('subtest')->insert([
            ['bai_test_id' => 1, 'cau_hoi' => 'Làm sao để cho con voi vào tủ lạnh?'],
        ]);

        DB::table('phuongan')->insert([
            ['subtest_id' => 1, 'cac_phuong_an' => 'Cắt nhỏ', 'ket_qua' => 0],
            ['subtest_id' => 1, 'cac_phuong_an' => 'Mở cửa cho con voi vào', 'ket_qua' => 1],
            ['subtest_id' => 1, 'cac_phuong_an' => 'Không cho được', 'ket_qua' => 0],
            ['subtest_id' => 1, 'cac_phuong_an' => 'Chịu', 'ket_qua' => 0],
        ]);

        DB::table('binhluan')->insert([
            ['user_id' => '1', 'bai_viet_id' => 1, 'noi_dung' => 'binh luan user 1'],
            ['user_id' => '2', 'bai_viet_id' => 1, 'noi_dung' => 'binh luan user 2'],
        ]);

        DB::table('ketquatest')->insert([
            ['bai_test_id' => '1', 'user_id' => '1', 'ket_qua' => '9.95'],
        ]);
    }
}
