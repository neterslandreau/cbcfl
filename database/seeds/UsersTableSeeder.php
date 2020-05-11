<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff = [
            [
                'first_name' => 'Amber',
                'last_name' => 'Fatout',
                'email' => 'afatout@cbcfl.org',
                'nickname' => '',
                'role' => 'staff',
                'password' => '$2y$10$8a/MKZgk/uD/08AJzGiu/eqOZ3/SgM/M2oHBpfAWE9DbLg4vKWXqm' // Secr3t!
            ],
            [
                'first_name' => 'Cher',
                'last_name' => 'Roselott',
                'email' => 'Cher-cr@cbcfl.org',
                'nickname' => '',
                'role' => 'staff',
                'password' => '$2y$10$8a/MKZgk/uD/08AJzGiu/eqOZ3/SgM/M2oHBpfAWE9DbLg4vKWXqm' // Secr3t!
            ],
            [
                'first_name' => 'Jamie',
                'last_name' => 'Polanko',
                'nickname' => '',
                'email' => 'jpolanko@cbcfl.org',
                'role' => 'staff',
                'password' => '$2y$10$8a/MKZgk/uD/08AJzGiu/eqOZ3/SgM/M2oHBpfAWE9DbLg4vKWXqm' // Secr3t!
            ],
            [
                'first_name' => 'Samala',
                'last_name' => 'Coke',
                'nickname' => '',
                'email' => 'scoke@cbcfl.org',
                'role' => 'staff',
                'password' => '$2y$10$8a/MKZgk/uD/08AJzGiu/eqOZ3/SgM/M2oHBpfAWE9DbLg4vKWXqm' // Secr3t!
            ],
            [
                'first_name' => 'Shelly',
                'last_name' => 'Hunter',
                'email' => 'shunter@cbcfl.org',
                'nickname' => '',
                'role' => 'staff',
                'password' => '$2y$10$8a/MKZgk/uD/08AJzGiu/eqOZ3/SgM/M2oHBpfAWE9DbLg4vKWXqm' // Secr3t!
            ],
            [
                'first_name' => 'Tammy',
                'last_name' => 'Smith',
                'email' => 'tsmith@cbcfl.org',
                'nickname' => '',
                'role' => 'staff',
                'password' => '$2y$10$8a/MKZgk/uD/08AJzGiu/eqOZ3/SgM/M2oHBpfAWE9DbLg4vKWXqm' // Secr3t!
            ],
            [
                'first_name' => 'Bob',
                'last_name' => 'Sand',
                'email' => 'bsand@cbcfl.org',
                'nickname' => 'Pastor',
                'role' => 'staff',
                'password' => '$2y$10$8a/MKZgk/uD/08AJzGiu/eqOZ3/SgM/M2oHBpfAWE9DbLg4vKWXqm' // Secr3t!
            ],
            [
                'first_name' => 'Super',
                'last_name' => 'User',
                'email' => 'admin@think-knot.com',
                'nickname' => 'Admin',
                'role' => 'staff',
                'password' => '$2y$10$8a/MKZgk/uD/08AJzGiu/eqOZ3/SgM/M2oHBpfAWE9DbLg4vKWXqm' // Secr3t!
            ],
        ];

        foreach ($staff as $u) {
            $u = new User($u);
            $u->save();
        }
    }
}
