<?php
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
        // Register the user seeder
        // $this->call(UsersTableSeeder::class);
        // factory(App\User::class, 100)->create();
        // factory(App\Models\Post::class, 300 );
        // Model::reguard();
        factory(App\Event::class, 16)->create();
    }
}
