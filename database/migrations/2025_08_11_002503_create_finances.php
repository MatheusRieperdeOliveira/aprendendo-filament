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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
        });
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->float('value', 8, 2);
            $table->string('photo')->nullable();
            $table->timestamps();
        });
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->float('value', 8, 2);
            $table->string('description')->nullable();
            $table->foreignId('bank_account_id')
                  ->constrained('bank_accounts');

            $table->foreignId('category_id')
                  ->constrained('categories');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accounts', function (Blueprint $table) {
            $table->dropConstrainedForeignId('bank_account_id');
            $table->dropConstrainedForeignId('category_id');
        });
        Schema::drop('categories');
        Schema::drop('bank_accounts');
        Schema::drop('accounts');
    }
};
