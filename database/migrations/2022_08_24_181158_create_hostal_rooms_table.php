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
        Schema::create("hostel_rooms", function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId("hostel_id")
                ->constrained()
                ->onDelete("cascade");
            $table->integer("room_no");
            $table->integer("bed_no");
            $table->string("student_email")->default("unassigned");
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
        Schema::dropIfExists("hostel_rooms");
    }
};
