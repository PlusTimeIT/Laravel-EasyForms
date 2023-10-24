<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\Icon;

trait HasClosable
{
    protected $closable = FALSE;

    protected $close_icon = '$close';

    protected $close_label = '$vuetify.close';

    public function getClosable(): bool
    {
        return $this->closable;
    }

    public function getCloseIcon(): Icon | string
    {
        return $this->close_icon;
    }

    public function getCloseLabel(): string
    {
        return $this->close_label;
    }

    public function setClosable(bool $closable): self
    {
        $this->closable = $closable;

        return $this;
    }

    public function setCloseIcon(Icon | string $close_icon): self
    {
        $this->close_icon = $close_icon;

        return $this;
    }

    public function setCloseLabel(string $close_label): self
    {
        $this->close_label = $close_label;

        return $this;
    }
}
