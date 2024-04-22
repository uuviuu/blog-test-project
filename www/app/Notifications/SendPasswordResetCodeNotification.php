<?php

namespace App\Notifications;

use App\Enums\NotifyType;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Nutnet\LaravelSms\Notifications\NutnetSmsChannel;

class SendPasswordResetCodeNotification extends Notification
{
    use Queueable;

    public function __construct(
        public string $code,
        public NotifyType $notifyType = NotifyType::EMAIL,
    ) {
    }

    /** @return string[] */
    public function via(): array
    {
        return match ($this->notifyType) {
            NotifyType::EMAIL => ['mail'],
            NotifyType::PHONE => [NutnetSmsChannel::class]
        };
    }

    public function toMail(): MailMessage
    {
        return (new MailMessage)
            ->line(__('notification.change_password.first_line'))
            ->line(__('notification.change_password.second_line').$this->code)
            ->action(__('notification.change_password.action'), route('changePasswordShow'));
    }

    public function toNutnetSms(): string
    {
        return __('notification.change_password.first_line').' '
            .__('notification.change_password.second_line').$this->code.'. '
            .__('notification.change_password.action').route('changePasswordShow');
    }
}
