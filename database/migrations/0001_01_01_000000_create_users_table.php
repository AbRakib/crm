<?php

use App\Helpers\MigrationHelper;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('type')->default(0)->comment('admin=0, employee=1');
            $table->smallInteger('role')->default(0)->comment('super=0, admin=1, employee=2, user=3');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->date('joining_date')->nullable();
            $table->string('nid_number')->nullable();
            $table->string('nid_image')->nullable();
            $table->string('passport_number')->nullable();
            $table->string('passport_image')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->tinyInteger('gender')->nullable()->comment('male=0, female=1, other=2');
            $table->tinyInteger('marital_status')->default(0)->comment('single=0, married=1, divorced=2, widowed=3');
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->tinyInteger('resigned')->default(0)->comment('no=0, yes=1');
            $table->date('resigned_date')->nullable();
            $table->tinyInteger('terminated')->default(0)->comment('no=0, yes=1');
            $table->date('terminated_date')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            MigrationHelper::getCommonColumns($table);
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
