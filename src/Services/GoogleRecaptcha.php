<?php

namespace PlusTimeIT\EasyForms\Services;

use Illuminate\Support\Facades\Http;

class GoogleRecaptcha
{
    public static function verify(\Illuminate\Http\Request $request): bool|array
    {
        $token = $request->input('recaptcha_token');
        $secret = config('easyforms.form.google_recaptcha.secret_key');

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $secret,
            'response' => $token,
            'remoteip' => $request->ip(),
        ]);

        $response = $response->json();
        if (! $response['success']) {
            return $response['error-codes'];
        }

        // check score is greater than
        if ($response['action'] != 'process_form_'.str_replace('\\', '_', $request->input('form_name'))) {
            return ['form' => 'Action does not meet requirements'];
        }

        // check score is greater than minimum supplied
        if ($response['score'] < config('easyforms.form.google_recaptcha.minimum_score')) {
            return ['score' => 'Score too low'];
        }

        return true;
    }
}
