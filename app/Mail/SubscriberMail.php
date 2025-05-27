<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SubscriberMail extends Mailable
{
    use Queueable, SerializesModels;

    public $blog;
    public $commenter;
    public $comment;
    /**
     * Create a new message instance.
     */
    public function __construct($blog,$commenter,$comment)
    {
        $this->blog= $blog;
        $this->commenter=$commenter;
        $this->comment=$comment;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Subscriber Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.subscriber-mail',
            with: [
                'blog'=> $this->blog,
                'commenter'=>$this->commenter,
                'comment'=>$this->comment
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
