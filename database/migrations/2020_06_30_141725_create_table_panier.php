<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePanier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_panier', function (Blueprint $table) {
         
                $table->id();
                $table->integer('produit_id')->unsigned()->index();
                $table->integer('user_id')->unsigned()->index();
                $table->string('produit_name');
                $table->longtext('color')->nullable();
                $table->longtext('prix');
                $table->longtext('quantite');
                $table->longtext('montante')->nullable();
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
        Schema::dropIfExists('table_panier');
    }
}
