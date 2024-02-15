<?php

namespace PlusTimeIT\EasyForms\Services;

use Illuminate\Support\Facades\Http;
use PlusTimeIT\EasyForms\Base\ActionForm;
use PlusTimeIT\EasyForms\Base\InputForm;

class GoogleRecaptcha
{
    public static function verify(\Illuminate\Http\Request $request, InputForm|ActionForm $form): bool|array
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

        // check action is set correctly for action forms
        if ($form instanceof ActionForm) {
            $formToGoogleAction = strtolower(str_replace('\\', '_', $request->input('form_name')));
            $actionGoogleAction = strtolower(str_replace('\\', '_', $request->input('form_action')));
            if ($response['action'] != 'process_form_'.$formToGoogleAction.'_'.$actionGoogleAction) {
                return ['form' => 'Action does not meet requirements'];
            }
        }

        // check action is set correctly for input forms
        if ($form instanceof InputForm) {
            if ($response['action'] != 'process_form_'.strtolower(str_replace('\\', '_', $request->input('form_name')))) {
                return ['form' => 'Action does not meet requirements'];
            }
        }

        // check score is greater than minimum supplied
        if ($response['score'] < config('easyforms.form.google_recaptcha.minimum_score')) {
            return ['score' => 'Score too low'];
        }

        return true;
    }
}
