<?php

namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class RepliedToThread extends Notification
{
    use Queueable;
    protected $thread;
    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public function __construct($thread)
    {
        $this->thread = $thread;


    }

    public function via($notifiable)
    {

        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return $this->thread;
    }



}