<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement('ALTER TABLE     school_images MODIFY data LONGBLOB');
        DB::statement('ALTER TABLE held_event_images MODIFY data LONGBLOB');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement('ALTER TABLE     school_images MODIFY data BLOB');
        DB::statement('ALTER TABLE held_event_images MODIFY data BLOB');
    }
};
