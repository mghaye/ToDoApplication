<?php
use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder {
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('tasks')->delete();

        $tasks = array(
            ['user_id'=>1,'name' => 'Basic Todo', 'completed' => true, 'description' => 'Een basic todo maken met laravel',
                'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['user_id'=>1,'name' => 'Login', 'completed' => false, 'description' => 'Een login maken voor de todo',
                'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['user_id'=>1,'name' => 'Gebruikersbeheer', 'completed' => false, 'description' => 'Gebruikersbeheer toevoegen aan todo',
                'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['user_id'=>1,'name' => 'Rollen', 'completed' => false, 'description' => 'Verschillende rollen toekennen aan gebruikers',
                'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['user_id'=>1,'name' => 'sharing', 'completed' => false, 'description' => 'verschillende users kunnen een todo delen',
                'created_at' => new DateTime, 'updated_at' => new DateTime],

        );

        //// Uncomment the below to run the seeder
        DB::table('tasks')->insert($tasks);
    }



} 