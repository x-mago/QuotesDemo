<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\UniqueConstraintViolationException;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = sprintf('%s@%s.%s', 'name', 'email', 'de');
        $user = User::where('email', $email)->first();
        if(is_null($user)) {
            $user = new User();
            $user->name = 'Herr Mustermann';
            $user->email = $email;
            $user->password = Hash::make('password');
			$user->email_verified_at = Carbon::now();
			$user->save();
			
            $team = new Team();
            $team->user_id = $user->id;
            $team->name = "Mustermann's Team";
            $team->personal_team = 1;
            $team->save();
        } else {
           print "User existiert schon\n";
        }
    }
}
