<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BankBranchSeeder::class);
        $this->call(RegionalOfficeSeeder::class);
        $this->call(VisaCategorySeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(OfficerSeeder::class);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'staff']);
        Role::create(['name' => 'user']);

        DB::table('users')->insert(['name' => 'admin', 'email' => 'admin@dgip.gov.pk', 'password' => Hash::make('admin')]);

        $admin = App\User::find(1);
        $admin->assignRole('admin');
    }
}
