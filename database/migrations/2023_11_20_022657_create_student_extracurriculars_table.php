<?php

use App\Models\Extracurricular;
use App\Models\Student;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_extracurriculars', function (Blueprint $table) {
            $table->id();
            // $table->foreignIdFor(Student::class);
            // $table->foreignIdFor(Extracurricular::class);

            $table->unsignedBigInteger('student_id')->nullable()->default(null);
            $table->foreign('student_id')-> references('id')->on('students')->onDelete('cascade');
            $table->unsignedBigInteger('extracurricular_id')->nullable()->default(null);
            $table->foreign('extracurricular_id')-> references('id')->on('extracurriculars')->onDelete('cascade');
            $table->unsignedBigInteger('satpam_id')->nullable()->default(null);
            $table->foreign('satpam_id')-> references('id')->on('satpams')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_extracurriculars');
    }
};
