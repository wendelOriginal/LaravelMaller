<?php

namespace App\Http\Controllers;

use App\Jobs\AuthSendMail;

class MailController extends Controller
{
    public function sendmail()
    {

        AuthSendMail::dispatch();
    }
}
