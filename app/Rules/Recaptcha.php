<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use GuzzleHttp\Client;

class Recaptcha implements Rule
{
    public function passes($attribute, $value)
    {
        $client = new Client();
        $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret' => config('services.recaptcha.secret'),
                'response' => $value
            ]
        ]);

        $body = json_decode((string)$response->getBody());
        return $body->success;
    }

    public function message()
    {
        return 'The :attribute field is not correct.';
    }
}
