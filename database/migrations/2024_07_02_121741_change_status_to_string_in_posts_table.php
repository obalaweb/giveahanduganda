<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('status')->nullable()->after('slug');
        });

        DB::table('posts')->where('isPublished', 0)->update(['status' => 'draft']);
        DB::table('posts')->where('isPublished', 1)->update(['status' => 'published']);

        Schema::table('posts', function (Blueprint $table) {
            // Drop the old status column
            $table->dropColumn('isPublished');

            // Make the status column not nullable
            $table->string('status')->nullable(false)->change();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
};
