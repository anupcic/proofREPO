<?php

//use Illuminate\Database\Seeder;
use App\User;
	
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
        $user=new User;
        $user->firstname='Anup';
        $user->lastname='Sah';
        $user->email='anupk1790@gmail.com';
        $user->password=Hash::make('mypass');
        $user->telephone='9968220169';
        $user->admin=1;
        $user->save();
    }
}
 