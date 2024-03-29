<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateContactUsTable extends Migration {

	public function up()
	{
		Schema::create('contact_us', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
            $table->string('mail');
			$table->string('phone');
			$table->string('subject');
			$table->boolean('is_read')->default('0');
            $table->boolean('is_sender')->nullable()->default('0');
			$table->text('message');
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('contact_us');
	}
}
