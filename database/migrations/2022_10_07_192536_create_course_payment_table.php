<?php

use App\Models\Course;
use App\Models\Payment;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_payment', function (Blueprint $table) {
            $table->foreignIdFor(Course::class)->constrained();
            $table->foreignIdFor(Payment::class)->constrained();
            $table->timestamps();

            $table->unique(['payment_id', 'course_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_payment');
    }
};
