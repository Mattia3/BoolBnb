<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Veronica',
                'last_name' => 'Koetje',
                'img_profile' => 'images/host/host-1.jpg',
                'date_birth' => Carbon::parse('12-10-1975'),
                'email' => 'veronicakoetje@dayrep.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Ilaria',
                'last_name' => 'Berjiè',
                'img_profile' => 'images/host/host-2.jpg',
                'date_birth' => Carbon::parse('01-11-1980'),
                'email' => 'ilaberjie@armyspy.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Todd',
                'last_name' => 'Dickson',
                'img_profile' => 'images/host/host-3.jpg',
                'date_birth' => Carbon::parse('30-06-1963'),
                'email' => 'todddickson@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Astor',
                'last_name' => 'Loya',
                'img_profile' => 'images/host/host-4.jpg',
                'date_birth' => Carbon::parse('23-08-1979'),
                'email' => 'astorloya@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Teresa',
                'last_name' => 'Trentino',
                'img_profile' => 'images/host/host-5.jpg',
                'date_birth' => Carbon::parse('14-04-1975'),
                'email' => 'teresatreta@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Amanda',
                'last_name' => 'Watterson',
                'img_profile' => 'images/host/host-6.jpg',
                'date_birth' => Carbon::parse('04-05-1987'),
                'email' => 'amawatterson@armyspy.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Susanna',
                'last_name' => 'Rehn',
                'img_profile' => 'images/host/host-7.jpg',
                'date_birth' => Carbon::parse('20-01-1974'),
                'email' => 'rehnsusan@rhyta.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Sakhr',
                'last_name' => 'Boulos',
                'img_profile' => 'images/host/host-8.jpg',
                'date_birth' => Carbon::parse('22-02-1988'),
                'email' => 'sakhrboulos@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Noah',
                'last_name' => 'Maas',
                'img_profile' => 'images/host/host-9.jpg',
                'date_birth' => Carbon::parse('28-07-1973'),
                'email' => 'noahmaas@rhyta.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Mollie',
                'last_name' => 'Hicks',
                'img_profile' => 'images/host/host-10.jpg',
                'date_birth' => Carbon::parse('25-05-1948'),
                'email' => 'molliehicks@jourrapide.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Erwin',
                'last_name' => 'Harper',
                'img_profile' => 'images/host/host-11.jpg',
                'date_birth' => Carbon::parse('04-09-1991'),
                'email' => 'erwinaharper@dayrep.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Stella',
                'last_name' => 'Sainthill',
                'img_profile' => 'images/host/host-12.jpg',
                'date_birth' => Carbon::parse('07-01-1994'),
                'email' => 'stellasainthill@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Márton',
                'last_name' => 'Ompoly',
                'img_profile' => 'images/host/host-13.jpg',
                'date_birth' => Carbon::parse('01-03-1976'),
                'email' => 'martonompoly@dayrep.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Wen',
                'last_name' => 'Liao',
                'img_profile' => 'images/host/host-14.jpg',
                'date_birth' => Carbon::parse('16-11-1984'),
                'email' => 'wenliao@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Natsuki',
                'last_name' => 'Nakagawa',
                'img_profile' => 'images/host/host-15.jpg',
                'date_birth' => Carbon::parse('12-07-1996'),
                'email' => 'natsunakagawa@gmail.com',
                'password' => '12345678',
            ],
            [
                'name' => 'Irma',
                'last_name' => 'Danilov',
                'img_profile' => 'images/host/host-16.jpg',
                'date_birth' => Carbon::parse('30-08-1939'),
                'email' => 'irmadanilov@gmail.com',
                'password' => '12345678',
            ],
        ];
        foreach ($users as $user) {
            $newUser = new User();
            $newUser->name = $user['name'];
            $newUser->last_name = $user['last_name'];
            $newUser->img_profile = $user['img_profile'];
            $newUser->date_birth = $user['date_birth'];
            $newUser->email = $user['email'];
            $newUser->password = $user['password'];
            $newUser->save();
        }
    }
}
