<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasShowRequirementsDialog
{
    protected bool $show_requirements_dialog = false;

    public function getShowRequirementsDialog(): bool
    {
        return $this->show_requirements_dialog;
    }

    public function setShowRequirementsDialog(bool $show_requirements_dialog): static
    {
        $this->show_requirements_dialog = $show_requirements_dialog;

        return $this;
    }
}
