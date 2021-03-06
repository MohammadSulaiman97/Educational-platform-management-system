<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Classrooms', function(Blueprint $table) {
			$table->foreign('Grade_id')->references('id')->on('Grades')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('Sections', function(Blueprint $table) {
			$table->foreign('Grade_id')->references('id')->on('Grades')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		/*Schema::table('Sections', function(Blueprint $table) {
			$table->foreign('Class_id')->references('id')->on('Classrooms')
						->onDelete('cascade')
						->onUpdate('cascade');
		});*/

        Schema::table('my_parents', function(Blueprint $table) {
            $table->foreign('Nationality_Father_id')->references('id')->on('Nationalities');
            $table->foreign('Blood_Type_Father_id')->references('id')->on('Type_Bloods');
            $table->foreign('Religion_Father_id')->references('id')->on('Religions');
            $table->foreign('Nationality_Mother_id')->references('id')->on('Nationalities');
            $table->foreign('Blood_Type_Mother_id')->references('id')->on('Type_Bloods');
            $table->foreign('Religion_Mother_id')->references('id')->on('Religions');
        });

        Schema::table('parent_attachments', function(Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('my_parents');
        });

	}

	public function down()
	{
		Schema::table('Classrooms', function(Blueprint $table) {
			$table->dropForeign('Classrooms_Grade_id_foreign');
		});
		Schema::table('Sections', function(Blueprint $table) {
			$table->dropForeign('Sections_Grade_id_foreign');
		});
		Schema::table('Sections', function(Blueprint $table) {
			$table->dropForeign('Sections_Class_id_foreign');
		});
	}
}