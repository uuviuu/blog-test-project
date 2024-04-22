<?php

return [
    /**
     * Доступные провайдеры:
     * * \Nutnet\LaravelSms\Providers\Log (alias: log)
     * * \Nutnet\LaravelSms\Providers\Smpp (alias: smpp)
     * * \Nutnet\LaravelSms\Providers\SmscRu (alias: smscru)
     * * \Nutnet\LaravelSms\Providers\SmsRu (alias: smsru)
     * * \Nutnet\LaravelSms\Providers\IqSmsRu (alias: iqsms)
     *
     * @see Nutnet\LaravelSms\Providers
     */
    'provider' => env('NUTNET_SMS_PROVIDER', 'log'),

    'providers' => [
        'log' => [
            'channels' => [],
        ],
        'smpp' => [],
        'smscru' => [
            'login' => env('SMSCRU_LOGIN'),
            'password' => env('SMSCRU_PASSWORD'),
            'message_defaults' => [],
        ],
        'smsru' => [
            'login' => env('SMSRU_LOGIN'),
            'password' => env('SMSRU_PASSWORD'),
            'message_defaults' => [],
        ],
        'iqsms' => [
            'login' => env('IQSMS_LOGIN'),
            'password' => env('IQSMS_PASSWORD'),
            'message_defaults' => [],
        ],
    ],
];
