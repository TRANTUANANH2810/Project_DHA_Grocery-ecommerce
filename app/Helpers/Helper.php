<?php

use Illuminate\Support\Facades\Mail;
use App\Mail\MailInit;
use App\Mail\MailRegister;

if (!function_exists('sendMail')) {
    /**
     * Send mail
     * @param string $title
     * @param string $body
     * @param string $emailTo
     *
     * @return response()
     */
    function sendMail($title, $body, $emailTo)
    {
        $mailData = [
            'title' => $title,
            'body' => $body
        ];

        Mail::to($emailTo)->send(new MailInit($mailData));
    }
}

if (!function_exists('sendMailRegister')) {
    /**
     * Send mail after register
     * @param string $title
     * @param string $body
     * @param string $confirmUrl
     * @param string $emailTo
     *
     * @return response()
     */
    function sendMailRegister($title, $body, $confirmUrl, $emailTo)
    {
        $mailData = [
            'title' => $title,
            'body' => $body,
            'confirmUrl' => $confirmUrl
        ];
        
        Mail::to($emailTo)->send(new MailRegister($mailData));
    }
}
