<?php

namespace PlusTimeIT\EasyForms\Base;

/**
 * Handles Action Forms with buttons and icon
 */
abstract class ActionForm extends EasyForm implements \PlusTimeIT\EasyForms\Interfaces\ActionFormInterface
{
    use \PlusTimeIT\EasyForms\Traits\ActionFormTrait;

    /**
     * The type of form.
     */
    protected string $type = 'action-form';

    /**
     * Constructor for the ActionForm class.
     */
    public function __construct()
    {
        parent::__construct();

        $this->show_title = false;

        return $this
            ->setActions($this->actions());
    }
}
