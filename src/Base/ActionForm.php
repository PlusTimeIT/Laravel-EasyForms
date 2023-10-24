<?php

namespace PlusTimeIT\EasyForms\Base;

use PlusTimeIT\EasyForms\Interfaces\ActionFormInterface;
use PlusTimeIT\EasyForms\Traits\ActionFormTrait;

/**
 * Creates an action form where a form only requires buttons or a set of icons.
 */

abstract class ActionForm extends EasyForm implements ActionFormInterface
{
    use ActionFormTrait;

    /**
     * @var string $type The type of form
     */
    protected $type = 'action-form';

    public function __construct()
    {
        parent::__construct();
        return $this
            ->setActions($this->actions());
    }
}
