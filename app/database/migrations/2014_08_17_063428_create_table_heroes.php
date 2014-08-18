<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHeroes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('heroes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->string('image');
			$table->string('type');
			$table->string('attack_type');
			$table->integer('strength');
			$table->integer('agility');
			$table->integer('intelligence');
			$table->integer('health');
			$table->integer('mana');
			$table->integer('damage_max');
			$table->integer('damage_min');
			$table->integer('range');
			$table->float('armor');
			$table->integer('movement');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('heroes');
	}

}
