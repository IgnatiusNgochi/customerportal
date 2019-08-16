<?php

namespace App\Providers;
use App\Events\NewCustomerHasRegisteredEvent;
use App\Listeners\WelcomeNewCustomerListener;
use App\Listeners\RegisterNewCustomerToNewsLetter;
use App\Listeners\NotifyAdminViaSlack;


use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        NewCustomerHasRegisteredEvent::class => [
          WelcomeNewCustomerListener::class,
           RegisterNewCustomerToNewsLetter::class,
           NotifyAdminViaSlack::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
