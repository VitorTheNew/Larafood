<?php

use App\Models\{
    Tenant,
    User
};
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenant = Tenant::first();

        $tenant->users()->create([
            'name' => 'João Victor',
            'email' => 'victor@sistema.com',
            'phone' => '11912385297',
            'password' => bcrypt('123'),
        ]);
    }
}
