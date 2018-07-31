<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BakeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bakeries')->truncate();
        DB::table('bakeries')->insert([

            //1
            [
                'name' => 'bánh gạo lắc',
                'description' => 'Bánh ngon',
                'price' => 40000,
                'categoryId' => 2,
                'images' => 'https://images.foody.vn/res/g26/258426/prof/s576x330/foody-mobile-foody-banh-gao-lac-p-530-636046068139457527.jpg',
                'content' => 'Bánh ngon',
                'note' => 'Bánh ngon',
            ],
            //2
            [
                'name' => 'Bánh mặn',
                'description' => 'Bánh ngon',
                'price' => 45000,
                'categoryId' => 2,
                'images' => 'https://i.ytimg.com/vi/Vg5JkfQ64eQ/maxresdefault.jpg',
                'content' => 'Bánh ngon',
                'note' => 'Bánh ngon',
            ],
            //3
            [
                'name' => 'Bánh gai',
                'description' => 'Bánh ngon',
                'price' => 40000,
                'categoryId' => 2,
                'images' => 'https://baomoi-photo-1-td.zadn.vn/w1000_r1/17/12/05/60/24192675/1_155692.jpg',
                'content' => 'Bánh ngon',
                'note' => 'Bánh ngon',
            ],
            //4
            [
                'name' => 'Bánh chay',
                'description' => 'Bánh ngon',
                'price' => 20000,
                'categoryId' => 3,
                'images' => 'https://baomoi-photo-1-td.zadn.vn/w700_r1/16/11/13/61/20818277/1_58205.jpg',
                'content' => 'Bánh ngon',
                'note' => 'Bánh ngon',
            ],
            //5
            [
                'name' => 'Bánh sinh nhật',
                'description' => 'Bánh ngon',
                'price' => 50000,
                'categoryId' => 1,
                'images' => 'https://static.hotdeal.vn/images/448/447722/500x500/41691-banh-sinh-nhat-rau-cau-nhan-flan-dai-vinh-phong-cn-2-pink-star-.jpg',
                'content' => 'Bánh ngon',
                'note' => 'Bánh ngon',
            ],
            //6
            [
                'name' => 'gạo nếp',
                'description' => 'Bánh ngon',
                'price' => 50000,
                'categoryId' => 1,
                'images' => 'https://gaosachcaocap.r.worldssl.net/wp-content/uploads/2017/08/cac-loai-gao-o-viet-nam-rat-phong-phu-628x275.jpg',
                'content' => 'Bánh ngon',
                'note' => 'Bánh ngon',
            ],
            //7
            [
                'name' => 'bánh gạo xốp',
                'description' => 'Bánh ngon',
                'price' => 50000,
                'categoryId' => 1,
                'images' => 'https://cdn.tgdd.vn/Files/2014/06/09/549010/Cach-lam-banh-gao-xop-gion-theo-kieu-An-Do-600x400.jpg',
                'content' => 'Bánh ngon',
                'note' => 'Bánh ngon',
            ],
            //8
            [
                'name' => 'Bánh sinh nhật',
                'description' => 'Bánh ngon',
                'price' => 50000,
                'categoryId' => 1,
                'images' => 'https://static.hotdeal.vn/images/448/447722/500x500/41691-banh-sinh-nhat-rau-cau-nhan-flan-dai-vinh-phong-cn-2-pink-star-.jpg',
                'content' => 'Bánh ngon',
                'note' => 'Bánh ngon',
                ],
                [
                    'name' => 'Bánh ngọt',
                    'description' => 'Bánh ngon',
                    'price' => 40000,
                    'categoryId' => 2,
                    'images' => 'https://keyassets-p2.timeincuk.net/wp/prod/wp-content/uploads/sites/53/2017/10/Pick-and-mix-cake.jpg',
                    'content' => 'Bánh ngon',
                    'note' => 'Bánh ngon',
                ],
                [
                    'name' => 'Bánh mặn',
                    'description' => 'Bánh ngon',
                    'price' => 45000,
                    'categoryId' => 2,
                    'images' => 'https://i.ytimg.com/vi/Vg5JkfQ64eQ/maxresdefault.jpg',
                    'content' => 'Bánh ngon',
                    'note' => 'Bánh ngon',
                ],
                [
                    'name' => 'Bánh gai',
                    'description' => 'Bánh ngon',
                    'price' => 40000,
                    'categoryId' => 2,
                    'images' => 'https://baomoi-photo-1-td.zadn.vn/w1000_r1/17/12/05/60/24192675/1_155692.jpg',
                    'content' => 'Bánh ngon',
                    'note' => 'Bánh ngon',
                ],
                [
                    'name' => 'Bánh chay',
                    'description' => 'Bánh ngon',
                    'price' => 20000,
                    'categoryId' => 3,
                    'images' => 'https://baomoi-photo-1-td.zadn.vn/w700_r1/16/11/13/61/20818277/1_58205.jpg',
                    'content' => 'Bánh ngon',
                    'note' => 'Bánh ngon',
                ],
                [
                    'name' => 'Bánh sinh nhật',
                    'description' => 'Bánh ngon',
                    'price' => 50000,
                    'categoryId' => 1,
                    'images' => 'https://static.hotdeal.vn/images/448/447722/500x500/41691-banh-sinh-nhat-rau-cau-nhan-flan-dai-vinh-phong-cn-2-pink-star-.jpg',
                    'content' => 'Bánh ngon',
                    'note' => 'Bánh ngon',
                ],
                //6
                [
                    'name' => 'Bánh sinh nhật',
                    'description' => 'Bánh ngon',
                    'price' => 50000,
                    'categoryId' => 1,
                    'images' => 'https://static.hotdeal.vn/images/448/447722/500x500/41691-banh-sinh-nhat-rau-cau-nhan-flan-dai-vinh-phong-cn-2-pink-star-.jpg',
                    'content' => 'Bánh ngon',
                    'note' => 'Bánh ngon',
                ],
                //7
                [
                    'name' => 'bánh kếp',
                    'description' => 'Bánh ngon',
                    'price' => 50000,
                    'categoryId' => 1,
                    'images' => 'http://kenhphunu.com/images1/102015/1454259600/cach-lam-banh-kep-gion-thom-kho-cuong-1.jpg',
                    'content' => 'Bánh ngon',
                    'note' => 'Bánh ngon',
                ],
                //8
                [
                    'name' => 'bánh bột mì vừng',
                    'description' => 'Bánh ngon',
                    'price' => 50000,
                    'categoryId' => 1,
                    'images' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBuQv4xBwHVF4TvGwIlK76A8LL2qyvZQn9Pi98wETLPzV9ECZl',
                    'content' => 'Bánh ngon',
                    'note' => 'Bánh ngon',

                ]
    ]);
    }
}
