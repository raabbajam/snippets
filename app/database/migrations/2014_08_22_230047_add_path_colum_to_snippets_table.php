<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddPathColumToSnippetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('snippets', function(Blueprint $table)
		{
			$table->string('path');
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
			$table->dropColumn('path');
		});
	}

}
