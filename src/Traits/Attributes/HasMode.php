<?php
namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasMode
{
    protected $mode = 'rgba';

    public function availableModes(): array
    {
        return [
            'rgba' ,
            'hsla' ,
            'hexa',
        ];
    }

    public function availableModesToString()
    {
        return implode(', ', $this->availableModes());
    }

    public function getMode(): string
    {
        return $this->mode;
    }

    public function modeCheck(string $mode): bool
    {
        return in_array($mode, $this->availableModes());
    }

    public function setMode(string $mode): self
    {
        if ( ! $this->modeCheck($mode)) {
            throw new \Exception('Supplied:' . $mode . ' Current mode must be one of the following: ' . $this->availableModesToString());
        }
        $this->mode = $mode;
        return $this;
    }
}
