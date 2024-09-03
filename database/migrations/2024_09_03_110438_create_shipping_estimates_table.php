<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('shipping_estimates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('pickup_location');
            $table->text('pickup_address');
            $table->string('mobile');
            $table->float('item_weight');
            $table->string('delivery_location');
            $table->text('delivery_address');
            $table->text('item_description');
            $table->decimal('delivery_cost', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_estimates');
    }
};
