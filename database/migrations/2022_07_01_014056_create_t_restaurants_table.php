
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\QueryException;
use Illuminate\Database\Schema\Blueprint;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_restaurants', function (Blueprint $table) {
            $table->increments('id');
             $table->unsignedInteger('categories_id');
            $table->string('pro_name');
            $table->string('image');
            $table->string('description');
            $table->bigInteger('price');
            $table->timestamps();
            $table->foreign('categories_id')
            ->references('id')
            ->on('categories')
            ->onUpdate('cascade')
            ->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_restaurants');
    }
};
