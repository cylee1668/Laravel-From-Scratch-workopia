<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        // 先把舊資料更新，避免違反新 constraint
        DB::table('job_listings')
            ->where('job_type', 'Intership')
            ->update(['job_type' => 'Internship']);

        // 刪掉舊的 constraint
        DB::statement('ALTER TABLE job_listings DROP CONSTRAINT job_listings_job_type_check');

        // 建立新的 constraint，拼字修正
        DB::statement("ALTER TABLE job_listings
            ADD CONSTRAINT job_listings_job_type_check
            CHECK (job_type IN (
                'Full-Time',
                'Part-Time',
                'Contract',
                'Temporary',
                'Internship',
                'Volunteer',
                'On-Call'
            ))");
    }

    public function down(): void
    {
        // 還原成舊 constraint
        DB::statement('ALTER TABLE job_listings DROP CONSTRAINT job_listings_job_type_check');

        DB::statement("ALTER TABLE job_listings
            ADD CONSTRAINT job_listings_job_type_check
            CHECK (job_type IN (
                'Full-Time',
                'Part-Time',
                'Contract',
                'Temporary',
                'Intership',
                'Volunteer',
                'On-Call'
            ))");
    }
};
