<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateManagersTable.
 */
class CreateManagersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('managers', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('store_id')->unsigned()->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('first_name', 45);
            $table->string('last_name', 45);
            $table->tinyInteger('gender')->default(1)->nullable();
            $table->date('birthday')->nullable();
            $table->tinyInteger('rule')->default(1)->nullable();
            $table->longText('note')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('managers');
	}
}
