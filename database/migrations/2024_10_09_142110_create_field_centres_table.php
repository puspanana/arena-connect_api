<?php

use App\Models\FieldCentre;
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
        Schema::create('field_centres', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->cascadeOnUpdate();
            $table->string("name");
            $table->longText("descriptions");
            $table->longText("rules");
            $table->string("address");
            $table->string("maps");
            $table->string("phone_number");
            $table->longText("facilities");
            $table->integer("rating");
            $table->json('images')->nullable();
            $table->timestamps();
        });

        // $faker = \Faker\Factory::create();;

        // for ($i = 0; $i < 10; $i++) {
        //     FieldCentre::create([
        //         // 'user_id' => $faker->numberBetween(3, 4),
        //         'address' => $faker->address,
        //         'name' => $faker->company,
        //         'maps' => "https://maps.google.com/?q={$faker->latitude},{$faker->longitude}",
        //         'phone_number' => $faker->phoneNumber,
        //         'rating' => $faker->numberBetween(1, 5),
        //     ]);
        // }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('field_centres');
    }
};
