<?php

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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->enum('type', ['freelance', 'seller']);
            $table->text('description')->nullable();
            $table->float('price');
            $table->integer('time');
            $table->boolean('active')->default(true);
            $table->foreignId('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }

    protected $fillable = [
        'title', 'description', 'price', 'time'
    ];

    protected $casts = [
        'price' => 'float',
        'active' => 'boolean',
        'time' => 'integer'
    ];
};