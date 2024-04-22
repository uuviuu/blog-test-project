<?php

namespace App\Notifications;

use App\Enums\NotifyType;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendPasswordResetCodeNotification extends Notification
{
    use Queueable;

    public function __construct(
        public string $code,
        public NotifyType $authFieldValue = NotifyType::EMAIL,
    ) {
    }

    /** @return string[] */
    public function via(): array
    {
        return ['mail'];
    }

    public function toMail(): MailMessage
    {
        return (new MailMessage)

            ->line('Вы запросили код для смены пароля.')
            ->line("Код: $this->code")
            ->action('Перейти на страницу для смены пароля', route('change-password-show'));
    }

    //    public function toAero(User $notifiable): AeroMessage
    //    {
    //        return new AeroMessage(
    //            config('services.smsaero.sign'),
    //            'Ваш код: '.$this->code,
    //            $notifiable->phone->value()
    //        );
    //    }
}
