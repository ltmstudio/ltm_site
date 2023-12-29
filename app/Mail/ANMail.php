<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ANMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

     public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     */
    // public function envelope(): Envelope
    // {
    //     return new Envelope(
    //         from: new Address('a.ahmedova@arassanusga.com', 'Arassa Nusga'),
    //         subject: 'Form Submitted',
    //     );
    // }

    /**
     * Get the message content definition.
     */
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'mailTemplate',
    //         with:[
    //             'content'=>$this->data
    //         ]
    //     );
    // }

    // public function build()
    // {
    //     return $this->view('mailTemplate')
    //                 ->with([
    //                     'testVarOne' => $this->data,
                       
    //                 ]);
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array<int, \Illuminate\Mail\Mailables\Attachment>
    //  */
    // public function attachments(): array
    // {
    //     return [];
    // }
    // public $details;

 

    // /**

    //  * Create a new message instance.

    //  *

    //  * @return void

    //  */

    // public function __construct($details)

    // {

    //     $this->details = $details;

    // }

 

    /**

     * Build the message.

     *

     * @return $this

     */

    public function build()

    {

        return $this->
        from('a.ahmedova@arassanusga.com', 'Arassa Nusga')
        ->subject('Заявка')->view('mailTemplate'
        // , ['email' => $this->data['email'], 'name' => $this->data['name']]
    );

    }

}

 

