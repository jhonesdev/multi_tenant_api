<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants_contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained('contacts_types');
            $table->foreignId('tenant_id')->constrained('tenants');
            $table->string('name', 80);
            $table->string('phone', 20)->nullable();
            $table->string('email', 80)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants_contacts');
    }
};
