<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\{ToArrayTrait, ToJsonTrait};

class Button
{
    public function __construct(string $text, string $colour, Icon $icon)
    {
        $this->text = $text;
        $this->colour = $colour;
        $this->icon = $icon;
    }

    public function setColour(string $colour): self
    {
        $this->colour = $colour;
        return $this;
    }

    public function setIcon(Icon $icon): self
    {
        $this->icon = $icon;
        return $this;
    }

    public function setText(string $text): self
    {
        $this->text = $text;
        return $this;
    }

    protected $colour;

    protected $icon;

    protected $text;

    use ToArrayTrait;
    use ToJsonTrait;
}
