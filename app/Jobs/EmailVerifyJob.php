<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class EmailVerifyJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    public $request;
    public function __construct($asd)
    {

        $this->request = $asd;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $email = $this->request['email'];
        $token = $this->request['token'];

        Mail::send('emails.verify', ['token' => $token], function ($message) use ($email) {
            $message->to($email);
            $message->subject('Email Verification Mail');
        });

    }
}
