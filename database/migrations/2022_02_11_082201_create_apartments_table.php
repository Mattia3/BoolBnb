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
            $table->foreignId('category_id')->constrained();
            $table->string('title')->nullable(false);
            $table->string('address')->nullable(false);
            $table->decimal('lat', 10, 8);
            $table->decimal('lng', 11, 8);
            $table->unsignedSmallInteger('square_mt')->nullable(false);
            $table->unsignedTinyInteger('n_rooms')->nullable(false);
            $table->unsignedTinyInteger('n_beds')->nullable(false);
            $table->unsignedTinyInteger('n_baths')->nullable(false);
            $table->string('cover_img')->nullable(false);
            $table->text('description')->nullable(false);
            $table->boolean('visible')->default(1);
            $table->text('place_description')->nullable(false);
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
