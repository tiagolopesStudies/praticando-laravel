<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('car_features', function (Blueprint $table) {
            $table->renameColumn('car_id', 'feature_id');
            $table->foreignId('car_id')->constrained('cars');
        });
    }

    public function down(): void
    {
        Schema::table('car_features', function (Blueprint $table) {
            $table->dropForeign(['car_id']);
            $table->dropColumn('car_id');
            $table->renameColumn('feature_id', 'car_id');
        });
    }
};
