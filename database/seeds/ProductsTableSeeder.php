<?php

use Illuminate\Database\Seeder;

//? Use Model
use App\Models\Product; 

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			//? Data statis yang akan di input ke database ketika di jalankan perintah migrate:fresh --seed
            $products = array(
                array('id' => '1','product' => 'Jam Tangan G-Shock','price' => '120000.00','stock' => '10','description' => '<p>Jam tangan G-Shock Terkenal dengan jam tangan yang tangguh di segala medan, kini G-Shock menghadirkan jam tangan dengan pilihan warna yang sesuai untuk anda yang berjiwa petualang.&nbsp;</p>','created_at' => \Carbon\Carbon::now(),),

                array('id' => '2','product' => 'Poster Kayu','price' => '13000.00','stock' => '100','description' => '<p>Ini adalah poster atau wallpaper yang bermotif kayu. dapat di gunakan untuk mempercantik setup anda</p>','created_at' => \Carbon\Carbon::now(),),

                array('id' => '3','product' => 'Poster Pemandangan','price' => '200000.00','stock' => '80','description' => '<p>
              
              </p><div><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero facere voluptates accusamus hic quae incidunt consectetur esse deserunt tempore velit porro necessitatibus qui dolor blanditiis reprehenderit perspiciatis quidem, sed accusantium.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eos in architecto et delectus, ipsum corrupti, earum dolorum nesciunt corporis nihil dignissimos? Eveniet voluptate similique nihil, dicta quas sequi, explicabo omnis tempora sunt rem deleniti quod assumenda, iusto labore?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Harum dolore in tempore repudiandae ducimus commodi tenetur tempora adipisci, ex magni iure dolorem dolorum sunt. At porro aliquid voluptas modi! Provident et cupiditate placeat, consequuntur voluptates sequi id quasi.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Maxime ratione recusandae qui laudantium, quidem illo velit repudiandae eius, quod odit, magnam laborum nihil ipsa suscipit cumque quibusdam ullam. Numquam, atque. Dignissimos esse quibusdam aperiam quidem aspernatur nemo autem.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eveniet, eligendi? Quibusdam voluptatem ipsum laboriosam cupiditate voluptate consectetur. Eaque accusamus modi aspernatur magnam delectus harum placeat distinctio sapiente deleniti tempora, corporis ad a atque ipsum corrupti! Consequuntur, asperiores suscipit?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Aliquid inventore consequatur obcaecati distinctio quae illo at. Repellendus voluptates assumenda vero tenetur libero quis sunt. Quos, accusamus! Accusantium cumque modi animi vel doloremque quae esse ducimus repellendus, sed beatae!</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eos ea quidem debitis nobis optio quis, maxime tempore ipsam obcaecati corporis dicta facilis beatae molestiae ab, necessitatibus totam, aut nulla? Suscipit enim corrupti quas perferendis doloribus, ipsa modi sequi?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Soluta saepe magni iusto minima ipsam, laborum voluptates cumque omnis eligendi aliquam provident quod odit unde fuga exercitationem perspiciatis itaque repellendus doloribus temporibus porro assumenda hic fugiat tenetur. Rerum, assumenda?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Dolor omnis incidunt exercitationem modi! Beatae rerum, doloremque non excepturi officiis sed autem unde eos expedita rem dolores id, asperiores ea minima iusto consequatur reiciendis veritatis. Obcaecati harum maiores magni?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Ducimus laboriosam qui dolor dolorum iste adipisci ratione quia, veniam possimus eum dicta sint fugiat labore dignissimos sapiente eaque pariatur tempora perspiciatis excepturi quibusdam ipsam quos ad! Fugiat, deserunt alias!</div></div>
              
              <br><p></p>','created_at' => \Carbon\Carbon::now(),),

                array('id' => '4','product' => 'Poster Gereja','price' => '300000.00','stock' => '10','description' => '<p>
              
              </p><div><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero facere voluptates accusamus hic quae incidunt consectetur esse deserunt tempore velit porro necessitatibus qui dolor blanditiis reprehenderit perspiciatis quidem, sed accusantium.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eos in architecto et delectus, ipsum corrupti, earum dolorum nesciunt corporis nihil dignissimos? Eveniet voluptate similique nihil, dicta quas sequi, explicabo omnis tempora sunt rem deleniti quod assumenda, iusto labore?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Harum dolore in tempore repudiandae ducimus commodi tenetur tempora adipisci, ex magni iure dolorem dolorum sunt. At porro aliquid voluptas modi! Provident et cupiditate placeat, consequuntur voluptates sequi id quasi.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Maxime ratione recusandae qui laudantium, quidem illo velit repudiandae eius, quod odit, magnam laborum nihil ipsa suscipit cumque quibusdam ullam. Numquam, atque. Dignissimos esse quibusdam aperiam quidem aspernatur nemo autem.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eveniet, eligendi? Quibusdam voluptatem ipsum laboriosam cupiditate voluptate consectetur. Eaque accusamus modi aspernatur magnam delectus harum placeat distinctio sapiente deleniti tempora, corporis ad a atque ipsum corrupti! Consequuntur, asperiores suscipit?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Aliquid inventore consequatur obcaecati distinctio quae illo at. Repellendus voluptates assumenda vero tenetur libero quis sunt. Quos, accusamus! Accusantium cumque modi animi vel doloremque quae esse ducimus repellendus, sed beatae!</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eos ea quidem debitis nobis optio quis, maxime tempore ipsam obcaecati corporis dicta facilis beatae molestiae ab, necessitatibus totam, aut nulla? Suscipit enim corrupti quas perferendis doloribus, ipsa modi sequi?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Soluta saepe magni iusto minima ipsam, laborum voluptates cumque omnis eligendi aliquam provident quod odit unde fuga exercitationem perspiciatis itaque repellendus doloribus temporibus porro assumenda hic fugiat tenetur. Rerum, assumenda?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Dolor omnis incidunt exercitationem modi! Beatae rerum, doloremque non excepturi officiis sed autem unde eos expedita rem dolores id, asperiores ea minima iusto consequatur reiciendis veritatis. Obcaecati harum maiores magni?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Ducimus laboriosam qui dolor dolorum iste adipisci ratione quia, veniam possimus eum dicta sint fugiat labore dignissimos sapiente eaque pariatur tempora perspiciatis excepturi quibusdam ipsam quos ad! Fugiat, deserunt alias!</div></div>
              
              <br><p></p>','created_at' => \Carbon\Carbon::now(),),

                array('id' => '5','product' => 'Poster Gambar Bulan','price' => '32500000.00','stock' => '109','description' => '<p>
              
              </p><div><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero facere voluptates accusamus hic quae incidunt consectetur esse deserunt tempore velit porro necessitatibus qui dolor blanditiis reprehenderit perspiciatis quidem, sed accusantium.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eos in architecto et delectus, ipsum corrupti, earum dolorum nesciunt corporis nihil dignissimos? Eveniet voluptate similique nihil, dicta quas sequi, explicabo omnis tempora sunt rem deleniti quod assumenda, iusto labore?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Harum dolore in tempore repudiandae ducimus commodi tenetur tempora adipisci, ex magni iure dolorem dolorum sunt. At porro aliquid voluptas modi! Provident et cupiditate placeat, consequuntur voluptates sequi id quasi.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Maxime ratione recusandae qui laudantium, quidem illo velit repudiandae eius, quod odit, magnam laborum nihil ipsa suscipit cumque quibusdam ullam. Numquam, atque. Dignissimos esse quibusdam aperiam quidem aspernatur nemo autem.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eveniet, eligendi? Quibusdam voluptatem ipsum laboriosam cupiditate voluptate consectetur. Eaque accusamus modi aspernatur magnam delectus harum placeat distinctio sapiente deleniti tempora, corporis ad a atque ipsum corrupti! Consequuntur, asperiores suscipit?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Aliquid inventore consequatur obcaecati distinctio quae illo at. Repellendus voluptates assumenda vero tenetur libero quis sunt. Quos, accusamus! Accusantium cumque modi animi vel doloremque quae esse ducimus repellendus, sed beatae!</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eos ea quidem debitis nobis optio quis, maxime tempore ipsam obcaecati corporis dicta facilis beatae molestiae ab, necessitatibus totam, aut nulla? Suscipit enim corrupti quas perferendis doloribus, ipsa modi sequi?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Soluta saepe magni iusto minima ipsam, laborum voluptates cumque omnis eligendi aliquam provident quod odit unde fuga exercitationem perspiciatis itaque repellendus doloribus temporibus porro assumenda hic fugiat tenetur. Rerum, assumenda?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Dolor omnis incidunt exercitationem modi! Beatae rerum, doloremque non excepturi officiis sed autem unde eos expedita rem dolores id, asperiores ea minima iusto consequatur reiciendis veritatis. Obcaecati harum maiores magni?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Ducimus laboriosam qui dolor dolorum iste adipisci ratione quia, veniam possimus eum dicta sint fugiat labore dignissimos sapiente eaque pariatur tempora perspiciatis excepturi quibusdam ipsam quos ad! Fugiat, deserunt alias!</div></div>
              
              <br><p></p>','created_at' => \Carbon\Carbon::now(),),

                array('id' => '6','product' => 'Contoh Design Setup Komputer','price' => '50000.00','stock' => '40','description' => '<p>
              
              </p><div><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero facere voluptates accusamus hic quae incidunt consectetur esse deserunt tempore velit porro necessitatibus qui dolor blanditiis reprehenderit perspiciatis quidem, sed accusantium.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eos in architecto et delectus, ipsum corrupti, earum dolorum nesciunt corporis nihil dignissimos? Eveniet voluptate similique nihil, dicta quas sequi, explicabo omnis tempora sunt rem deleniti quod assumenda, iusto labore?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Harum dolore in tempore repudiandae ducimus commodi tenetur tempora adipisci, ex magni iure dolorem dolorum sunt. At porro aliquid voluptas modi! Provident et cupiditate placeat, consequuntur voluptates sequi id quasi.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Maxime ratione recusandae qui laudantium, quidem illo velit repudiandae eius, quod odit, magnam laborum nihil ipsa suscipit cumque quibusdam ullam. Numquam, atque. Dignissimos esse quibusdam aperiam quidem aspernatur nemo autem.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eveniet, eligendi? Quibusdam voluptatem ipsum laboriosam cupiditate voluptate consectetur. Eaque accusamus modi aspernatur magnam delectus harum placeat distinctio sapiente deleniti tempora, corporis ad a atque ipsum corrupti! Consequuntur, asperiores suscipit?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Aliquid inventore consequatur obcaecati distinctio quae illo at. Repellendus voluptates assumenda vero tenetur libero quis sunt. Quos, accusamus! Accusantium cumque modi animi vel doloremque quae esse ducimus repellendus, sed beatae!</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eos ea quidem debitis nobis optio quis, maxime tempore ipsam obcaecati corporis dicta facilis beatae molestiae ab, necessitatibus totam, aut nulla? Suscipit enim corrupti quas perferendis doloribus, ipsa modi sequi?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Soluta saepe magni iusto minima ipsam, laborum voluptates cumque omnis eligendi aliquam provident quod odit unde fuga exercitationem perspiciatis itaque repellendus doloribus temporibus porro assumenda hic fugiat tenetur. Rerum, assumenda?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Dolor omnis incidunt exercitationem modi! Beatae rerum, doloremque non excepturi officiis sed autem unde eos expedita rem dolores id, asperiores ea minima iusto consequatur reiciendis veritatis. Obcaecati harum maiores magni?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Ducimus laboriosam qui dolor dolorum iste adipisci ratione quia, veniam possimus eum dicta sint fugiat labore dignissimos sapiente eaque pariatur tempora perspiciatis excepturi quibusdam ipsam quos ad! Fugiat, deserunt alias!</div></div>
              
              <br><p></p>','created_at' => \Carbon\Carbon::now(),),

                array('id' => '7','product' => 'Poster Pemandangan Landscape','price' => '300000.00','stock' => '60','description' => '<p>
              
              </p><div><div><b>Lorem ipsum dolor sit </b>amet consectetur adipisicing elit. Libero facere voluptates accusamus hic quae incidunt consectetur esse deserunt tempore velit porro necessitatibus qui dolor blanditiis reprehenderit perspiciatis quidem, sed accusantium.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eos in architecto et delectus, ipsum corrupti, earum dolorum nesciunt corporis nihil dignissimos? Eveniet voluptate similique nihil, dicta quas sequi, explicabo omnis tempora sunt rem deleniti quod assumenda, iusto labore?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Harum dolore in tempore repudiandae ducimus commodi tenetur tempora adipisci, ex magni iure dolorem dolorum sunt. At porro aliquid voluptas modi! Provident et cupiditate placeat, consequuntur voluptates sequi id quasi.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Maxime ratione recusandae qui laudantium, quidem illo velit repudiandae eius, quod odit, magnam laborum nihil ipsa suscipit cumque quibusdam ullam. Numquam, atque. Dignissimos esse quibusdam aperiam quidem aspernatur nemo autem.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eveniet, eligendi? Quibusdam voluptatem ipsum laboriosam cupiditate voluptate consectetur. Eaque accusamus modi aspernatur magnam delectus harum placeat distinctio sapiente deleniti tempora, corporis ad a atque ipsum corrupti! Consequuntur, asperiores suscipit?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Aliquid inventore consequatur obcaecati distinctio quae illo at. Repellendus voluptates assumenda vero tenetur libero quis sunt. Quos, accusamus! Accusantium cumque modi animi vel doloremque quae esse ducimus repellendus, sed beatae!</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eos ea quidem debitis nobis optio quis, maxime tempore ipsam obcaecati corporis dicta facilis beatae molestiae ab, necessitatibus totam, aut nulla? Suscipit enim corrupti quas perferendis doloribus, ipsa modi sequi?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Soluta saepe magni iusto minima ipsam, laborum voluptates cumque omnis eligendi aliquam provident quod odit unde fuga exercitationem perspiciatis itaque repellendus doloribus temporibus porro assumenda hic fugiat tenetur. Rerum, assumenda?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Dolor omnis incidunt exercitationem modi! Beatae rerum, doloremque non excepturi officiis sed autem unde eos expedita rem dolores id, asperiores ea minima iusto consequatur reiciendis veritatis. Obcaecati harum maiores magni?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Ducimus laboriosam qui dolor dolorum iste adipisci ratione quia, veniam possimus eum dicta sint fugiat labore dignissimos sapiente eaque pariatur tempora perspiciatis excepturi quibusdam ipsam quos ad! Fugiat, deserunt alias!</div></div>
              
              <br><p></p>','created_at' => \Carbon\Carbon::now(),),

                array('id' => '8','product' => 'Poster Gurun Pasir Sahara','price' => '95000.00','stock' => '30','description' => '<p>
              
              </p><div><div><i>Lorem ipsum dolor sit amet</i> consectetur adipisicing elit. Libero facere voluptates accusamus hic quae incidunt consectetur esse deserunt tempore velit porro necessitatibus qui dolor blanditiis reprehenderit perspiciatis quidem, sed accusantium.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eos in architecto et delectus, ipsum corrupti, earum dolorum nesciunt corporis nihil dignissimos? Eveniet voluptate similique nihil, dicta quas sequi, explicabo omnis tempora sunt rem deleniti quod assumenda, iusto labore?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Harum dolore in tempore repudiandae ducimus commodi tenetur tempora adipisci, ex magni iure dolorem dolorum sunt. At porro aliquid voluptas modi! Provident et cupiditate placeat, consequuntur voluptates sequi id quasi.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Maxime ratione recusandae qui laudantium, quidem illo velit repudiandae eius, quod odit, magnam laborum nihil ipsa suscipit cumque quibusdam ullam. Numquam, atque. Dignissimos esse quibusdam aperiam quidem aspernatur nemo autem.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eveniet, eligendi? Quibusdam voluptatem ipsum laboriosam cupiditate voluptate consectetur. Eaque accusamus modi aspernatur magnam delectus harum placeat distinctio sapiente deleniti tempora, corporis ad a atque ipsum corrupti! Consequuntur, asperiores suscipit?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Aliquid inventore consequatur obcaecati distinctio quae illo at. Repellendus voluptates assumenda vero tenetur libero quis sunt. Quos, accusamus! Accusantium cumque modi animi vel doloremque quae esse ducimus repellendus, sed beatae!</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eos ea quidem debitis nobis optio quis, maxime tempore ipsam obcaecati corporis dicta facilis beatae molestiae ab, necessitatibus totam, aut nulla? Suscipit enim corrupti quas perferendis doloribus, ipsa modi sequi?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Soluta saepe magni iusto minima ipsam, laborum voluptates cumque omnis eligendi aliquam provident quod odit unde fuga exercitationem perspiciatis itaque repellendus doloribus temporibus porro assumenda hic fugiat tenetur. Rerum, assumenda?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Dolor omnis incidunt exercitationem modi! Beatae rerum, doloremque non excepturi officiis sed autem unde eos expedita rem dolores id, asperiores ea minima iusto consequatur reiciendis veritatis. Obcaecati harum maiores magni?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Ducimus laboriosam qui dolor dolorum iste adipisci ratione quia, veniam possimus eum dicta sint fugiat labore dignissimos sapiente eaque pariatur tempora perspiciatis excepturi quibusdam ipsam quos ad! Fugiat, deserunt alias!</div></div>
              
              <br><p></p>','created_at' => \Carbon\Carbon::now(),),

                array('id' => '9','product' => 'Poster Bumi Landscape','price' => '1000000.00','stock' => '10','description' => '<p>
              
              </p><div><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero facere voluptates accusamus hic quae incidunt consectetur esse deserunt tempore velit porro necessitatibus qui dolor blanditiis reprehenderit perspiciatis quidem, sed accusantium.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eos in architecto et delectus, ipsum corrupti, earum dolorum nesciunt corporis nihil dignissimos? Eveniet voluptate similique nihil, dicta quas sequi, explicabo omnis tempora sunt rem deleniti quod assumenda, iusto labore?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Harum dolore in tempore repudiandae ducimus commodi tenetur tempora adipisci, ex magni iure dolorem dolorum sunt. At porro aliquid voluptas modi! Provident et cupiditate placeat, consequuntur voluptates sequi id quasi.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Maxime ratione recusandae qui laudantium, quidem illo velit repudiandae eius, quod odit, magnam laborum nihil ipsa suscipit cumque quibusdam ullam. Numquam, atque. Dignissimos esse quibusdam aperiam quidem aspernatur nemo autem.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eveniet, eligendi? Quibusdam voluptatem ipsum laboriosam cupiditate voluptate consectetur. Eaque accusamus modi aspernatur magnam delectus harum placeat distinctio sapiente deleniti tempora, corporis ad a atque ipsum corrupti! Consequuntur, asperiores suscipit?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Aliquid inventore consequatur obcaecati distinctio quae illo at. Repellendus voluptates assumenda vero tenetur libero quis sunt. Quos, accusamus! Accusantium cumque modi animi vel doloremque quae esse ducimus repellendus, sed beatae!</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eos ea quidem debitis nobis optio quis, maxime tempore ipsam obcaecati corporis dicta facilis beatae molestiae ab, necessitatibus totam, aut nulla? Suscipit enim corrupti quas perferendis doloribus, ipsa modi sequi?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Soluta saepe magni iusto minima ipsam, laborum voluptates cumque omnis eligendi aliquam provident quod odit unde fuga exercitationem perspiciatis itaque repellendus doloribus temporibus porro assumenda hic fugiat tenetur. Rerum, assumenda?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Dolor omnis incidunt exercitationem modi! Beatae rerum, doloremque non excepturi officiis sed autem unde eos expedita rem dolores id, asperiores ea minima iusto consequatur reiciendis veritatis. Obcaecati harum maiores magni?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Ducimus laboriosam qui dolor dolorum iste adipisci ratione quia, veniam possimus eum dicta sint fugiat labore dignissimos sapiente eaque pariatur tempora perspiciatis excepturi quibusdam ipsam quos ad! Fugiat, deserunt alias!</div></div>
              
              <br><p></p>','created_at' => \Carbon\Carbon::now(),),

                array('id' => '10','product' => 'Poster Estetik Lampu Jalanan','price' => '20000.00','stock' => '5','description' => '<p>
              
              </p><div><div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero facere voluptates accusamus hic quae incidunt consectetur esse deserunt tempore velit porro necessitatibus qui dolor blanditiis reprehenderit perspiciatis quidem, sed accusantium.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eos in architecto et delectus, ipsum corrupti, earum dolorum nesciunt corporis nihil dignissimos? Eveniet voluptate similique nihil, dicta quas sequi, explicabo omnis tempora sunt rem deleniti quod assumenda, iusto labore?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Harum dolore in tempore repudiandae ducimus commodi tenetur tempora adipisci, ex magni iure dolorem dolorum sunt. At porro aliquid voluptas modi! Provident et cupiditate placeat, consequuntur voluptates sequi id quasi.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Maxime ratione recusandae qui laudantium, quidem illo velit repudiandae eius, quod odit, magnam laborum nihil ipsa suscipit cumque quibusdam ullam. Numquam, atque. Dignissimos esse quibusdam aperiam quidem aspernatur nemo autem.</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eveniet, eligendi? Quibusdam voluptatem ipsum laboriosam cupiditate voluptate consectetur. Eaque accusamus modi aspernatur magnam delectus harum placeat distinctio sapiente deleniti tempora, corporis ad a atque ipsum corrupti! Consequuntur, asperiores suscipit?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Aliquid inventore consequatur obcaecati distinctio quae illo at. Repellendus voluptates assumenda vero tenetur libero quis sunt. Quos, accusamus! Accusantium cumque modi animi vel doloremque quae esse ducimus repellendus, sed beatae!</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Eos ea quidem debitis nobis optio quis, maxime tempore ipsam obcaecati corporis dicta facilis beatae molestiae ab, necessitatibus totam, aut nulla? Suscipit enim corrupti quas perferendis doloribus, ipsa modi sequi?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Soluta saepe magni iusto minima ipsam, laborum voluptates cumque omnis eligendi aliquam provident quod odit unde fuga exercitationem perspiciatis itaque repellendus doloribus temporibus porro assumenda hic fugiat tenetur. Rerum, assumenda?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Dolor omnis incidunt exercitationem modi! Beatae rerum, doloremque non excepturi officiis sed autem unde eos expedita rem dolores id, asperiores ea minima iusto consequatur reiciendis veritatis. Obcaecati harum maiores magni?</div><div>&nbsp; &nbsp; &nbsp; &nbsp; Ducimus laboriosam qui dolor dolorum iste adipisci ratione quia, veniam possimus eum dicta sint fugiat labore dignissimos sapiente eaque pariatur tempora perspiciatis excepturi quibusdam ipsam quos ad! Fugiat, deserunt alias!</div></div>
              
              <br><p></p>','created_at' => \Carbon\Carbon::now(),)


              );
				
				//? Insert data ke database
				Product::insert($products); 
    }
}
