<?php

namespace Database\Seeders;

use App\Models\User;
//use APP\Models\Pagina;
use App\Models\Pagina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

       /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        //Laravel Seeder es una herramienta que se utiliza para poblar la base de datos con datos de prueba o datos iniciales. Permite crear registros de manera rápida y sencilla, lo que es especialmente útil durante el desarrollo y las pruebas de la aplicación. Los seeders se definen en la carpeta database/seeders y se pueden ejecutar utilizando el comando php artisan db:seed.
        $user= new User();
        $user->name="Camilo";
        $user->email="Camilo@example.com";
        $user->password=bcrypt("12345678");
        $user->save();



        Pagina::factory(100)->create();

       // this->call([
        //    PaginaSeeder::class,
       // ]);
    }
}
