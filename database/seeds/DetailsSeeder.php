<?php

use Illuminate\Database\Seeder;
use App\Detail;
use App\Flat;


class DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {

          //   # Lets create 150 random phones
          //   $details = factory(Detail::class, 100)->create([
          //       'flat_id' => $this->getRandomFlatId()
          //     ]);
          // }
          //
          //
          //   private function getRandomFlatId() {
          //   $flat = Flat::inOrder() -> first();
          //   return $flat->id;
          //   }


            factory(Flat::class, 10)->create()->each(function ($flat) {
            // Seed the relation with one address
            $detail = factory(Detail::class)->make();
            $flat->detail()->save($detail);

            });


        }

}
