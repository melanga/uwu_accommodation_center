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
        Schema::create("appeals", function (Blueprint $table) {
            $table->id();
            $table->longText("message");
            $table->boolean("approved")->default(false);
            $table
                ->foreignId("student_id")
                ->constrained("users")
                ->onDelete("set null");
            $table
                ->foreignId("hostal_id")
                ->constrained("hostals")
                ->onDelete("cascade");
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
        Schema::dropIfExists("appeals");
    }
};
