<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAliasColumnToHeroes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('heroes', function(Blueprint $table)
		{
			$table->string('alias');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('heroes', function(Blueprint $table)
		{
			$table->dropColumn('alias');
		});
	}

}
