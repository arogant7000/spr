<?php

namespace App\Notifications;
use App\Meeting;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewMeetings extends Notification
{
    use Queueable;

    protected $meeting;
    protected $tempat;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct( $meeting, $tempat)
    {
        $this->meeting = $meeting;
        $this->tempat = $tempat;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Rapat Baru telah terjadwal')
                    ->success()
                    ->line('Judul Rapat : '.$this->meeting)
                    ->line('Tempat Rapat : '.$this->tempat)
                    ->action('Lihat Jadwal Rapat', url('/admin/meeting/'))
                    ->line('Thank you for using our application!');
                    
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
