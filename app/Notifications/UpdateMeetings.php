<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use App\Meeting;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UpdateMeetings extends Notification
{
    use Queueable;

    protected $meeting;
    protected $tempat;
    protected $id_meeting;
    protected $waktu;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct( $id_meeting, $meeting, $tempat, $waktu)
    {
        $this->id_meeting = $id_meeting;
        $this->meeting = $meeting;
        $this->tempat = $tempat;
        $this->waktu = $waktu;
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
                    ->subject('Perubahan Jadwal Rapat')
                    ->success()
                    ->line('Judul Rapat : '.$this->meeting)
                    ->line('Tempat Rapat : '.$this->tempat)
                    ->line('Waktu Rapat : '.$this->waktu )
                    ->action('Lihat Jadwal Rapat', url('/admin/meeting/'.$this->id_meeting))
                    ->line('Terima Kasih atas perhatiannya dan maaf jika terdapat kesalahan');
                    
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
