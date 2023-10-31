<?php

namespace PlusTimeIT\EasyForms\Base;

use PlusTimeIT\EasyForms\Interfaces\ActionFormInterface;
use PlusTimeIT\EasyForms\Traits\ActionFormTrait;

/**
 * Creates an ActionForm - buttons and icon
 */
abstract class ActionForm extends EasyForm implements ActionFormInterface
{
    use ActionFormTrait;

    /**
     * The type of form.
     *
     * @var string
     */
    protected $type = 'action-form';

    /**
     * Constructor for the ActionForm class.
     */
    public function __construct()
    {
        parent::__construct();

        return $this
            ->setActions($this->actions());
    }
}
