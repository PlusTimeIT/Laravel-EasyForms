<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Transformable;

class Button
{
    public function __construct()
    {
        return $this;
    }

    public function getColor(): string
    {
        return $this->color;
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

    public static function make()
    {
        return new static();
    }

    public function setColor(string $color): self
    {
        $this->color = $color;
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

    protected $color;

    protected $icon;

    protected $order = 0;

    protected $text;

    protected $type;

    use Transformable;
}
