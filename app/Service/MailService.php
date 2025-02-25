<?php 
namespace App\Service;

use App\Districts;

class MailService
{
    public static function contact($param)
    {
        \Mail::send('emails.general', ['param' => $param], function ($m) use ($param) {
            $m->from(env("MAIL_USERNAME"), 'Systemever');
            $m->to($param["email"], $param["name"])->subject('Hi! '.$param["name"].', thanks for contact us');
        });
    }
}