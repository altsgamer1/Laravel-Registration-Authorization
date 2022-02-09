<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')
            ->insert([
                ['name' => 'Contact 1', 'email' => 'contact1@gmail.com', 'phone' => '+7 (707) 111-22-33'],
                ['name' => 'Contact 2', 'email' => 'contact2@gmail.com', 'phone' => '+7 (707) 444-22-77'],
                ['name' => 'Contact 3', 'email' => 'contact3@gmail.com', 'phone' => '+7 (707) 111-66-33'],
                ['name' => 'Contact 4', 'email' => 'contact4@gmail.com', 'phone' => '+7 (707) 444-22-11'],
                ['name' => 'Contact 5', 'email' => 'contact5@gmail.com', 'phone' => '+7 (707) 777-88-33'],
                ['name' => 'Contact 6', 'email' => 'contact6@gmail.com', 'phone' => '+7 (707) 333-22-77'],
                ['name' => 'Contact 7', 'email' => 'contact7@gmail.com', 'phone' => '+7 (707) 555-22-88'],
                ['name' => 'Contact 8', 'email' => 'contact8@gmail.com', 'phone' => '+7 (707) 999-22-111'],
                ['name' => 'Contact 9', 'email' => 'contact9@gmail.com', 'phone' => '+7 (707) 222-11-33'],
                ['name' => 'Contact 10', 'email' => 'contact10@gmail.com', 'phone' => '+7 (707) 333-44-33'],
                ['name' => 'Contact 11', 'email' => 'contact11@gmail.com', 'phone' => '+7 (707) 666-22-55'],
                ['name' => 'Contact 12', 'email' => 'contact12@gmail.com', 'phone' => '+7 (707) 222-44-77'],
            ]);
    }
}
