<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewDeletedPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW view_deleted_packages AS
            (
                SELECT
                    packages.id,
                    packages.name,
                    packages.slug,
                    packages.description,
                    packages.price,
                    packages.created_at

                FROM `packages`

                WHERE packages.deleted_at IS NOT NULL
            )
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS view_deleted_packages');
    }
}
