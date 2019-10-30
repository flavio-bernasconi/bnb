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

          factory(App\ContactCompany::class, 10)->create()->each(function ($company) {
              $company->contacts()->save(factory(App\Contact::class)->make());
          });
        }


}
