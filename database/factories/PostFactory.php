<?php
namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;

class PostFactory extends Factory
{
    // Tentukan model yang akan digunakan factory ini
    protected $model = Post::class;

    // Method untuk mendefinisikan data default saat factory digunakan
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence, // Menghasilkan kalimat acak
            'body' => $this->faker->paragraph,  // Menghasilkan paragraf acak
            'author_id' => User::factory(),
            'category_id' => Category::factory(),     // Menghasilkan nama acak
            'slug' => $this->faker->slug,       // Menghasilkan slug acak
        ];
    }
}
