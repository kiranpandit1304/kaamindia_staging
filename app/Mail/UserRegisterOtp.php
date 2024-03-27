<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserRegisterOtp extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $smsOtp;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($smsOtp)
    {
        $this->smsOtp = $smsOtp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'), env('MAIL_APP_NAME'))
            ->subject('Mobile Number Verification OTP !')
            ->view('emails.mobile_number_verification')->with(['smsOtp', $this->smsOtp]);
    }
}
