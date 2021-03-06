<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagicCardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('magic_cards', function(Blueprint $table)
		{
                  $table->increments('id');
                  $table->string('layout')->nullable();
                  $table->string('name');
                  $table->string('names')->nullable();
                  $table->string('mana_cost')->nullable();
                  $table->string('cmc')->nullable();
                  $table->string('colors')->nullable();
                  $table->string('type')->nullable();
                  $table->string('supertypes')->nullable();
                  $table->string('types')->nullable();
                  $table->string('subtypes')->nullable();
                  $table->string('rarity')->nullable();
                  $table->string('text')->nullable();
                  $table->string('flavor')->nullable();
                  $table->string('artist')->nullable();
                  $table->string('number')->nullable();
                  $table->string('power')->nullable();
                  $table->string('toughness')->nullable();
                  $table->string('loyalty')->nullable();
                  $table->string('multiverseid');
                  $table->string('variations')->nullable();
                  $table->string('image_name')->nullable();
                  $table->string('watermark')->nullable();
                  $table->string('border')->nullable();
                  $table->string('hand')->nullable();
                  $table->string('life')->nullable();
                  $table->integer('set_id')->unsigned();
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
		Schema::drop('magic_cards');
	}

}
