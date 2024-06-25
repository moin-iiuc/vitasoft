<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\attachments>
 */
class AttachmentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uploaded_user_id' => 'null',
            'attachmentable_id' => $this->faker->randomLetter(),
            'url' => $this->faker->imageUrl(),
            'state' => 'Product',
            'label' => 'Moin',
            'deleted_at' =>$this->faker->date(),
            'file' =>$this->faker->image(dir:storage_path('app'),
        width:250, height:250),
            'content_type' =>'image',
            'user'=>'undefined',

        ];
    }
}
