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
        Schema::create('tenants_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tenant_id')->constrained('tenants');
            $table->foreignId('type_id')->constrained('address_types');
            $table->string('street_name');
            $table->integer('street_number')->nullable();
            $table->string('neighborhood', 100);
            $table->string('city', 80);
            $table->string('state', 80);
            $table->string('zip_code', 10);
            $table->string('country', 80);
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('tenants_addresses');
    }
};
