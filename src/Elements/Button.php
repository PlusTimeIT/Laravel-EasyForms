<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\ConvertTrait;

class Button
{
    public function __construct(string $type, string $text, string $colour, Icon $icon, int $order)
    {
        $this->type = $type;
        $this->text = $text;
        $this->colour = $colour;
        $this->icon = $icon;
        $this->order = $order;
        return $this;
    }

    public function getColour(): string
    {
        return $this->colour;
    }

    public function getIcon(): Icon
    {
        return $this->icon;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getType(): string
    {
        return $this->type;
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

    public function setOrder(int $order): self
    {
        $this->order = $order;
        return $this;
    }

    public function setText(string $text): self
    {
        $this->text = $text;
        return $this;
    }

    public function setType(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    protected $colour;

    protected $icon;

    protected $order = 0;

    protected $text;

    protected $type;

    use ConvertTrait;
}
