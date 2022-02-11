<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('title');
            $table->string('address');
            $table->decimal('price', 7, 2);
            $table->decimal('lat', 10, 8)->nullable();
            $table->decimal('lng', 11, 8)->nullable();
            $table->unsignedSmallInteger('square_mt');
            $table->unsignedTinyInteger('n_rooms');
            $table->unsignedTinyInteger('n_beds');
            $table->unsignedTinyInteger('n_baths');
            $table->string('cover_img');
            $table->text('description');
            $table->boolean('visible')->default(1);
            $table->text('place_description');
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
        Schema::dropIfExists('apartments');
    }
}
