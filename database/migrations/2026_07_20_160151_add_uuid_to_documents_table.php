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
        Schema::table('documents', function (Blueprint $table) {
            $table->uuid('uuid')->nullable()->after('id');
        });

        // Generate UUIDs for existing records
        $documents = \Illuminate\Support\Facades\DB::table('documents')->get();
        foreach ($documents as $document) {
            \Illuminate\Support\Facades\DB::table('documents')
                ->where('id', $document->id)
                ->update(['uuid' => (string) \Illuminate\Support\Str::uuid()]);
        }

        Schema::table('documents', function (Blueprint $table) {
            $table->unique('uuid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->dropColumn('uuid');
        });
    }
};
