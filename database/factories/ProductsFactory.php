<?php

namespace Database\Factories;

use App\Models\attachments;
use App\Models\warehouse;
use App\Models\brands;
use App\Models\categories;
use App\Models\taxes;
use App\Models\units;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'sku' => $this->faker->randomLetter(),
            'symbology' => $this->faker->randomLetter(),
            'brands_id' => brands::factory(),
            'categories_id' => categories::factory(),
            'taxes_id' =>taxes::factory(),
            'attachments_id' =>attachments::factory(),
            'units_id' =>units::factory(),
            'warehouse_id' =>warehouse::factory(),
            'has_stock'=>'1',
            'has_expired_date'=>'0',
            'expired_date' => '01-01-1970',
            'is_active' => '1',
'deleted_at' => '01-01-1975',

        ];
    }
}
