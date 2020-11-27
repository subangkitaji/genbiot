<?php
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = User::create([
            'username' => 'rais',
            'name' => 'Rais, S.Pd, M.Kom',
            'email' => 'rais@gmail.com',
            'password' => bcrypt('12345')
        ]);

        $superAdmin->assignRole('super-admin');

        $superAdmin1 = User::create([
            'username' => 'eko',
            'name' => 'Eko Budihartono, ST, M.Kom',
            'email' => 'eko@gmail.com',
            'password' => bcrypt('12345')
        ]);

        $superAdmin1->assignRole('super-admin');

        $superAdmin2 = User::create([
            'username' => 'arfan',
            'name' => 'Arfan Haqiqi Sulasmoro, M.Kom',
            'email' => 'arfan@gmail.com',
            'password' => bcrypt('12345')
        ]);

        $superAdmin2->assignRole('super-admin');



        $admin = User::create([
            'username' => 'admin',
            'name' => 'admin genbiot',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345')
        ]);
        $admin->assignRole('admin');
    }
}
