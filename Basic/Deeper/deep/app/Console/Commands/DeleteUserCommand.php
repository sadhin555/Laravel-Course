<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class DeleteUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete user';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        info("hit");
        $users = User::whereNull("email_verified_at")->get();
        foreach($users as $user){
            $user->delete();
        }
        $this->info("User deleted Successfully!");
        // $name = $this->ask('What is your name?');
        // $name = $this->choice(
        //     'What is your name?',
        //     ['Taylor', 'Dayle'],
        //     0
        // );
        // $this->info("Your name is $name");
        return 0;
    }
}
