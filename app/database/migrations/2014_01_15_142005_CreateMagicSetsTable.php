<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagicSetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('magic_sets', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name');
            $table->string('code')->unique();
            $table->date('release_date')->nullable();
            $table->string('border')->nullable();
            $table->string('type')->nullable();
            $table->string('block')->nullable();
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
		Schema::drop('magic_sets');
	}

}
