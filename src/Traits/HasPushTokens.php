<?php

namespace Relative\LaravelExpoPushNotifications\src\Traits;

use Relative\LaravelExpoPushNotifications\Models\PushToken;

trait HasPushTokens
{
    public function pushTokens()
    {
        return $this->morphMany(PushToken::class, 'notifiable');
    }

    public function getActivePushTokens(): array
    {
        return $this->pushTokens()->active()->get()->pluck('token')->toArray();
    }
}
