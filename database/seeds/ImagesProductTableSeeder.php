<?php

use Illuminate\Database\Seeder;

//? Use Model
use App\Models\ImagesProduct;

class ImagesProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

				///? Data statis yang akan di input ke database ketika di jalankan perintah migrate:fresh --seed
        $images_products = array(
          array('id' => '1','product_id' => '1','image' => 'product/AutEz18GATtA8C2GX0gQcqE9rQKZvv402QGIXI0k.png','created_at' => \Carbon\Carbon::now(),),

          array('id' => '2','product_id' => '2','image' => 'product/hxE004vrz0ygzFwTnHL14f6yejmNHijhr9BKAymR.jpeg','created_at' => \Carbon\Carbon::now(),),

          array('id' => '3','product_id' => '3','image' => 'product/4WOQyF5GhaGpvtJarcRz3nIx83mptto62ZnTD0lT.jpeg','created_at' => \Carbon\Carbon::now(),),

          array('id' => '4','product_id' => '4','image' => 'product/FoeZePJzASVchnKZdMKdApxxy2T4EnG8pOuawnTH.jpeg','created_at' => \Carbon\Carbon::now(),),

          array('id' => '5','product_id' => '5','image' => 'product/z3dYj2kubmscmav8GUAeDJQiygIdcUn4xJFCn82p.jpeg','created_at' => \Carbon\Carbon::now(),),

          array('id' => '6','product_id' => '6','image' => 'product/O50CEmuIdpb7tSdRaGVQscoZCwolOM8nAO3rf2IP.jpeg','created_at' => \Carbon\Carbon::now(),),

          array('id' => '7','product_id' => '7','image' => 'product/IfPIcL3mRQt0dNFuUojhf59v5RiFJYoEVFHTZ7wE.jpeg','created_at' => \Carbon\Carbon::now(),),

          array('id' => '8','product_id' => '8','image' => 'product/ihnaNH8SsmmjMiGaTtHVbX5LpXbrU85kUrpCzAj0.jpeg','created_at' => \Carbon\Carbon::now(),),

          array('id' => '9','product_id' => '9','image' => 'product/LdWKDWrGkayBR7BOPBBcjSv6w1s89OA2gcUsY1u0.jpeg','created_at' => \Carbon\Carbon::now(),),

          array('id' => '10','product_id' => '10','image' => 'product/t3qYUHCIb4i83fSDqNpVN2TZSUEXNXPRK0rOwOsO.jpeg','created_at' => \Carbon\Carbon::now(),)
        );

				//? Insert data ke database
				 ImagesProduct::insert($images_products);
    }
}
