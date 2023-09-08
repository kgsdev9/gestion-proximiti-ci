<?php

namespace App\Console\Commands;

use App\Mail\NotificationConnexionUser;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class NotificationTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quote:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Execution de la commande pour faire un test de programme de connexion';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $users = User::all();

        foreach ($users as  $user) {
            Mail::to('beugredatchasimonpierre@gmail.com')->send(new NotificationConnexionUser($user));
        }

    }



    }

