<?php

namespace App\Listeners;

use Aws\Sqs\SqsClient;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;

class Broadcast
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param Login|Logout $event
     * @return void
     */
    public function handle(Login|Logout $event)
    {
        $message = [
            'service' => 'accounts',
            'event' => match(get_class($event)) {
                Login::class => 'login',
                Logout::class => 'logout',
            },
            'payload' => [
                'user_id' => $event->user->getAuthIdentifier()
            ]
        ];


        // TODO - Convert it to service provider
        $client = new SqsClient([
            'region' => 'us-east-1',
            'version' => 'latest',
            'endpoint' => 'http://localstack:4566',
            'credentials' => [
                'key'    => 'my-access-key-id',
                'secret' => 'my-secret-access-key',
            ],
        ]);

        $client->sendMessage([
            'MessageBody' => json_encode($message),
            'QueueUrl' => 'http://localstack:4566/000000000000/wealthbot-high'
        ]);
    }
}
