<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddColumnsToSnippetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('snippets', function(Blueprint $table)
		{
			$table->string('syntax');
			$table->string('theme');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('snippets', function(Blueprint $table)
		{
			$table->dropColumn('syntax');
			$table->dropColumn('theme');
		});
	}

}
