<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("hostals", function (Blueprint $table) {
            $table->id();
            $table->string("name")->unique();
            $table->integer("room_capacity")->nullable();
            $table->integer("room_count");
            $table->string("address");
            $table->string("type");
            $table->string("level");
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
        Schema::dropIfExists("hostals");
    }
};
