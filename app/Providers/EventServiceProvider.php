<?php namespace Northstar\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{

    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'Northstar\Events\UserSignedUp' => [
            'Northstar\Handlers\Events\SendSignupPushNotification',
        ],
        'Northstar\Events\UserGotKudo' => [
            'Northstar\Handlers\Events\SendKudoPushNotification',
        ],
        'Northstar\Events\UserReportedBack' => [
            'Northstar\Handlers\Events\SendReportbackPushNotification',
        ],
    ];
    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }

}
