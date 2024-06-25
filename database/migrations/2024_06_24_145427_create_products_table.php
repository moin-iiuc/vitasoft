<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sku');
            $table->string('symbology');
            $table->foreignIdFor(\App\Models\Brands::class);
            $table->foreignIdFor(\App\Models\Categories::class);
$table->foreignIdFor(\App\Models\taxes::class);
$table->foreignIdFor(\App\Models\warehouse::class);
$table->foreignIdFor(\App\Models\attachments::class);
$table->foreignIdFor(\App\Models\units::class);
$table->boolean('has_stock');
$table->boolean('has_expired_date');
$table->date('expired_date');
$table->boolean('is_active');
$table->date('deleted_at');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
