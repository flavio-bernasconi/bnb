<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('flats', function (Blueprint $table) {

        $table -> bigInteger('user_id') -> unsigned() -> index();//tabella riferimento
        $table -> foreign('user_id', 'relationFlatUser')
               -> references('id')//colonna
               -> on('users');//tabella
      });

      // Schema::table('details', function (Blueprint $table) {
      //
      //   $table -> bigInteger('flat_id') -> unsigned() -> nullable() -> unique();//tabella riferimento
      //   $table -> foreign('flat_id', 'relationDetailFlat')
      //          -> references('id')//colonna
      //          -> on('flats');//tabella
      // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('flats', function (Blueprint $table) {

        $table -> dropForeign('relationFlatUser');
        $table -> dropColumn('user_id');

      });

      // Schema::table('details', function (Blueprint $table) {
      //
      //   $table -> dropForeign('relationDetailFlat');
      //   $table -> dropColumn('flat_id');
      //
      // });
    }
}
