<?php

use Illuminate\Support\Facades\Mail;
use App\Mail\MailInit;
use App\Mail\MailRegister;
use Illuminate\Support\Facades\Session;

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

if (!function_exists('checkCartSession')) {
    /**
     * Check session cart
     *
     * @return bool
     */
    function checkCartSession()
    {
        return Session::has('Cart');
    }
}

if (!function_exists('getCartSession')) {
    /**
     * Check session cart
     *
     * @return mixed
     */
    function getCartSession()
    {
        return Session::get('Cart');
    }
}

if (!function_exists('clearCartSession')) {
    /**
     * Check session cart
     *
     * @return void
     */
    function clearCartSession()
    {
        Session::forget('Cart');
    }
}
