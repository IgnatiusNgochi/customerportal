<?php

namespace App\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\WelcomeNewUserEmail;
use Illuminate\Support\Facades\Mail;


class WelcomeNewCustomerListener implements ShouldQueue
{
       public function handle($event)
        {
            sleep(10);
             Mail::to($event->customer->email)->send(new WelcomeNewUserEmail());
                  
    }
}
