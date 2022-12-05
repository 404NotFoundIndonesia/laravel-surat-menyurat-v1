<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('letters', function (Blueprint $table) {
            $table->id();
            $table->string('reference_number')->unique()->comment('Nomor Surat');
            $table->string('agenda_number');
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->date('letter_date')->nullable();
            $table->date('received_date')->nullable();
            $table->text('description')->nullable();
            $table->text('note')->nullable();
            $table->string('type')->default('incoming')->comment('Surat Masuk (incoming)/Surat Keluar (outgoing)');
            $table->string('classification_code');
            $table->foreign('classification_code')->references('code')->on('classifications');
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('letters');
    }
};
