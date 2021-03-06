<?php

namespace App\Listeners;

use App\Http\Traits\WhatsAppTrait;
use App\Models\UserWebhookLog;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Spatie\WebhookServer\Events\WebhookCallFailedEvent;

class WebhookCallFailed
{
    use WhatsAppTrait;
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
     * @param  Spatie\WebhookServer\Events\WebhookCallFailedEvent $event
     * @return void
     */
    public function handle(WebhookCallFailedEvent $event)
    {
        Log::debug("WebhookCallFailed");
        Log::debug(json_encode($event));
        $log = [
            "uuid" => $event->uuid,
            "user_id" => $event->meta["user_id"],
            "webhook_id" => $event->meta["webhook_id"],
            "payload" => json_encode($event->payload),
            "response" => $event->response->getBody()->getContents(),
            "status" => $event->response->getStatusCode(),
        ];
        UserWebhookLog::create($log);
        $this->send_message($event->payload['mobile'], "Facing some connecticity problem, Contacting to your service provider. \n Try again after some time", "LOGIN");
    }
}
