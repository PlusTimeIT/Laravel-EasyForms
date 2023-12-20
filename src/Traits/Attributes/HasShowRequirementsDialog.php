<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasShowRequirementsDialog
{
    protected bool $show_requirements_dialog = false;

    public function getShowRequirementsDialog(): bool
    {
        return $this->show_requirements_dialog;
    }

    public function setShowRequirementsDialog(bool $show_requirements_dialog): self
    {
        $this->show_requirements_dialog = $show_requirements_dialog;

        return $this;
    }
}
