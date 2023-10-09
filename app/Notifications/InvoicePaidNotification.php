<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramContact;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;
class InvoicePaidNotification extends Notification
{
    public function via()
    {
        return [TelegramChannel::class];
    }

    public function toTelegram()
    {
        $url = url('/invoice/' . 2);

        return TelegramMessage::create()
            ->to(auth()->user->telegram_user_id) // Optional.
            ->content("*HELLO!* \n One of your invoices has been paid!") // Markdown supported.
            ->button('View Invoice', $url); // Inline Button
    }
}
