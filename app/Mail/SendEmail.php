<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Mailjet\Resources;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function sendEmail($user)
    {

        $mj = new \Mailjet\Client('0a72698ad7264ab26c88745c8c7c3069','e0dd9a9fce687e4d1237dd45a4298c65',true,['version' => 'v3.1']);
        $body = [
            'Messages' => [
              [
                'From' => [
                  'Email' => "jean-cabral@hotmail.com",
                  'Name' => "jean-cabral@hotmail.com"
                ],
                'To' => [
                  [
                    'Email' => $user->email,
                    'Name' => $user->name,
                  ]
                ],
                'Subject' => "Teste LQDI",
                'TextPart' => "Teste",
                'HTMLPart' => "Hello, $user->name",
                'CustomID' => "AppGettingStartedTest"
              ]
            ]
          ];
        return $mj->post(Resources::$Email, ['body' => $body]);

        }
}
