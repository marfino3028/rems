<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('kategoris')->insert([
        [
          'kategori_name' => 'Apartment',
          'kategori_deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi tenetur recusandae quisquam enim nesciunt necessitatibus obcaecati, aut assumenda consequatur officia? Vitae maxime iure nesciunt! Consequatur minus iusto illo quidem earum.',
          'kategori_img' => 'https://via.placeholder.com/500',
        ],
        [
          'kategori_name' => 'Commercial Property',
          'kategori_deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi tenetur recusandae quisquam enim nesciunt necessitatibus obcaecati, aut assumenda consequatur officia? Vitae maxime iure nesciunt! Consequatur minus iusto illo quidem earum.',
          'kategori_img' => 'https://via.placeholder.com/500',
        ],
        [
          'kategori_name' => 'Condo',
          'kategori_deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi tenetur recusandae quisquam enim nesciunt necessitatibus obcaecati, aut assumenda consequatur officia? Vitae maxime iure nesciunt! Consequatur minus iusto illo quidem earum.',
          'kategori_img' => 'https://via.placeholder.com/500',
        ],
        [
          'kategori_name' => 'House',
          'kategori_deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi tenetur recusandae quisquam enim nesciunt necessitatibus obcaecati, aut assumenda consequatur officia? Vitae maxime iure nesciunt! Consequatur minus iusto illo quidem earum.',
          'kategori_img' => 'https://via.placeholder.com/500',
        ],
        [
          'kategori_name' => 'Land',
          'kategori_deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi tenetur recusandae quisquam enim nesciunt necessitatibus obcaecati, aut assumenda consequatur officia? Vitae maxime iure nesciunt! Consequatur minus iusto illo quidem earum.',
          'kategori_img' => 'https://via.placeholder.com/500',
        ],
        [
          'kategori_name' => 'Villa',
          'kategori_deskripsi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi tenetur recusandae quisquam enim nesciunt necessitatibus obcaecati, aut assumenda consequatur officia? Vitae maxime iure nesciunt! Consequatur minus iusto illo quidem earum.',
          'kategori_img' => 'https://via.placeholder.com/500',
        ],
      ]);
    }
}
