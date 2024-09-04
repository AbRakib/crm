<?php

namespace App\Helpers;

use Illuminate\Database\Schema\Blueprint;

class MigrationHelper {
    /**
     * Add new column to a migration blueprint.
     *
     * @return void
     */
    public static function getCommonColumns(Blueprint $table) {
        $table->unsignedTinyInteger('status')->default(1)->comment('0=inactive,1=active');
        $table->timestamp('created_at')->nullable();
        $table->unsignedBigInteger('created_by')->nullable();
        $table->timestamp('updated_at')->nullable();
        $table->unsignedBigInteger('updated_by')->nullable();
        $table->boolean('deleted')->default(false);
        $table->timestamp('deleted_at')->nullable();
        $table->unsignedBigInteger('deleted_by')->nullable();
    }
}