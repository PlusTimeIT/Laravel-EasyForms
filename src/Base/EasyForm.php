<?php

namespace PlusTimeIT\EasyForms\Base;

/**
 * Base form class.
 */
abstract class EasyForm implements \PlusTimeIT\EasyForms\Interfaces\FormInterface
{
    use \PlusTimeIT\EasyForms\Traits\FormTrait;

    public function __construct()
    {
        return $this
            ->setGoogleRecaptchaSiteKey(
                config('easyforms.form.google_recaptcha.mode') === 'global'
                    ? config('easyforms.form.google_recaptcha.site_key')
                    : null
            )
            ->setLoader(
                \PlusTimeIT\EasyForms\Elements\FormLoader::make()
                    ->setType(
                        \PlusTimeIT\EasyForms\Enums\FormLoaderTypes::Circular
                    )
                    ->setProgress(
                        \PlusTimeIT\EasyForms\Elements\ProgressCircular::make()->setColor('primary')
                    )
            )
            ->setAlerts($this->alerts())
            ->setAxios($this->axios());
    }
}
