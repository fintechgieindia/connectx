<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('institution_registrations', function (Blueprint $table) {
            $table->id();

            // ── Contact Person ────────────────────────────
            $table->string('contact_name');
            $table->string('designation');
            $table->string('phone');
            $table->string('email');

            // ── Institution Details ───────────────────────
            $table->string('institution_name');
            $table->string('institution_type');          // School | College | Both
            $table->string('board_or_university');
            $table->string('year_of_establishment')->nullable();
            $table->string('student_strength');          // range e.g. "500–1000"
            $table->string('city');
            $table->string('state');
            $table->string('website')->nullable();

            // ── Collaboration Interest ────────────────────
            $table->text('areas_of_interest');           // JSON-encoded array
            $table->string('heard_about_ycx')->nullable();
            $table->text('message')->nullable();

            // ── Admin ─────────────────────────────────────
            $table->string('status')->default('pending'); // pending, reviewed, approved, declined
            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('institution_registrations');
    }
};
