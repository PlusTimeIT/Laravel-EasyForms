<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

/**
 * Require Confirmations
 *
 * Forces process button to be disabled until all fields
 * that have this set to true have returned a validation
 * event.
 */
trait HasRequireConfirmation
{
    protected bool $require_confirmation;

    public function getRequireConfirmation(): bool
    {
        return $this->require_confirmation;
    }

    public function setRequireConfirmation(bool $require_confirmation): static
    {
        $this->require_confirmation = $require_confirmation;

        return $this;
    }
}
