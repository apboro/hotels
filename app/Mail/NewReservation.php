<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class NewReservation extends Mailable
{
    use Queueable, SerializesModels;
   /*
    *@var User
    *
    */

    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */

    public function __construct(User $user)
    {
        $this->user=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('bf3310@ya.ru', 'Example')
            ->view('email_new_reservation');
    }
}
