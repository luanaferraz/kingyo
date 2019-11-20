<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 29/08/2018
 * Time: 11:02
 */

namespace App\Services;


use Illuminate\Support\Facades\Mail;

class MailService
{

    public function emailContato($template, $tutor){

        $dados = array('tutor' => $tutor);


//        $view =  \View::make('mail.'.$template)->render();
//        echo $view;
//        die();

        Mail::send('mail.'.$template, $dados, function($message) use($tutor)
        {
            $message->subject('[SITE] Contato ')
                ->to('rodrigorivelino656@gmail.com');
        });


        if(count(Mail::failures()) > 0) {
            return false;
        } else {
            return true;
        }
    }




}