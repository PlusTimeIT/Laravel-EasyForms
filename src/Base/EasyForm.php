<?php

namespace PlusTimeIT\EasyForms\Base;

use PlusTimeIT\EasyForms\Elements\FormLoader;
use PlusTimeIT\EasyForms\Elements\ProgressCircular;
use PlusTimeIT\EasyForms\Enums\FormLoaderTypes;
use PlusTimeIT\EasyForms\Interfaces\FormInterface;
use PlusTimeIT\EasyForms\Traits\FormTrait;

/**
 * Base form class.
 */
abstract class EasyForm implements FormInterface
{
    use FormTrait;

    public function __construct()
    {
        return $this
            ->setLoader(
                FormLoader::make()
                    ->setType(
                        FormLoaderTypes::Circular
                    )
                    ->setProgress(
                        ProgressCircular::make()->setColor('primary')
                    )
            )
            ->setAlerts($this->alerts())
            ->setAxios($this->axios());
    }
}
