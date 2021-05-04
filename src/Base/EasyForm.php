<?php
namespace PlusTimeIT\EasyForms\Base;

use PlusTimeIT\EasyForms\Interfaces\FormInterface;
use PlusTimeIT\EasyForms\Traits\FormTrait;

use PlusTimeIT\EasyForms\Elements\Axios;

abstract class EasyForm implements FormInterface
{
    public function __construct()
    {
        $this
            ->setAlerts($this->alerts())
            ->setAxios( $this->axios() );
    }

    protected $alerts = [];

    protected $axios;

    protected $name = '';

    protected $title = '';

    use FormTrait;
}
