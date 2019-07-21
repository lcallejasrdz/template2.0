<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
            CREATE VIEW view_products AS
            (
                SELECT
                    products.id,
                    products.name,
                    products.slug,
                    products.description,
                    products.price,
                    products.inventory,
                    products.created_at

                FROM `products`

                WHERE products.deleted_at IS NULL
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
        DB::statement('DROP VIEW IF EXISTS view_products');
    }
}
