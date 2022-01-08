<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreateLivresTable extends Migration
{
    public function up()
    {
        Schema::create('livres', function (Blueprint $table) {
            $table->increments("idLive");
			 $table->integer('auteur_id')->unsigned();
			 $table->foreign("auteur_id")->references('id')->on('auteurs')->onDelete('restrict')->onUpdate('restrict');
            $table->string('titre');
			$table->double('prix');
			$table->string('image');
        });
    }
 public function down()
    {
		Schema::table('livres', function(Blueprint $table) {
			$table->dropForeign('livres_auteur_id_foreign');
		});
 Schema::dropIfExists('livres');
    }
}
