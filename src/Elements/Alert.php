<?php
namespace PlusTimeIT\EasyForms\Elements;

use PlusTimeIT\EasyForms\Traits\Transformable;

// TODO Create and implement Alert interface and trait
// Alert triggers
// before_load - Alert triggers before the form fields have loaded when supplied on page load. N/A on Axios Load.
// after_load - Alert triggers after the form fields have loaded for an axios load or shown on page load.
// failed_load - Alert triggers if form has failed to load fields.
// before_processing - Alert triggers before the axios call is made for form processing
// after_processing - Alert triggers when axios call is completed, regardless of the outcome
// failed_processing - Alert triggers on a failed axios call
// success_processing - Alert triggers on a successful axios call
// form_reset - Alert triggers when a form has been reset

class Alert
{
    use Transformable;

    protected $auto_close_timer = 0;

    protected $border = 'left';

    protected $color = 'primary';

    protected $contents = '';

    protected $dark = FALSE;

    protected $dense = FALSE;

    protected $dismissible = FALSE;

    protected $elevation = 0;

    protected $icon;

    protected $order = 0;

    protected $origin = 'center center';

    protected $outlined = FALSE;

    protected $prominent = FALSE;

    protected $text = FALSE;

    protected $transition = 'fade-transition';

    protected $trigger = 'process_success';

    protected $type;

    public function __construct()
    {
        return $this;
    }

    public function getAutoCloseTimer(): int
    {
        return $this->auto_close_timer;
    }

    public function getBorder(): string
    {
        return $this->border;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getContents(): string
    {
        return $this->contents;
    }

    public function getDark(): bool
    {
        return $this->dark;
    }

    public function getDense(): bool
    {
        return $this->dense;
    }

    public function getDismissible(): bool
    {
        return $this->dismissible;
    }

    public function getElevation(): int
    {
        return $this->elevation;
    }

    public function getIcon(): string
    {
        return $this->icon;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public function getOutlined(): bool
    {
        return $this->outlined;
    }

    public function getProminent(): bool
    {
        return $this->prominent;
    }

    public function getText(): bool
    {
        return $this->text;
    }

    public function getTransition(): string
    {
        return $this->transition;
    }

    public function getTrigger(): string
    {
        return $this->trigger;
    }

    public function getType()
    {
        return $this->type;
    }

    public static function make()
    {
        return new static();
    }

    public function setAutoCloseTimer(int $auto_close_timer): self
    {
        $this->auto_close_timer = $auto_close_timer;
        return $this;
    }

    public function setBorder(string $border): self
    {
        $this->border = $border;
        return $this;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;
        return $this;
    }

    public function setContents(string $contents): self
    {
        $this->contents = $contents;
        return $this;
    }

    public function setDark(bool $dark): self
    {
        $this->dark = $dark;
        return $this;
    }

    public function setDense(bool $dense): self
    {
        $this->dense = $dense;
        return $this;
    }

    public function setDismissible(bool $dismissible): self
    {
        $this->dismissible = $dismissible;
        return $this;
    }

    public function setElevation(int $elevation): self
    {
        $this->elevation = $elevation;
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

    public function setOutlined(bool $outlined): self
    {
        $this->outlined = $outlined;
        return $this;
    }

    public function setProminent(bool $prominent): self
    {
        $this->prominent = $prominent;
        return $this;
    }

    public function setText(bool $text): self
    {
        $this->text = $text;
        return $this;
    }

    public function setTransition(string $transition): self
    {
        $this->transition = $transition;
        return $this;
    }

    public function setTrigger($trigger): self
    {
        $this->trigger = $trigger;
        return $this;
    }

    public function setType($type): self
    {
        $this->type = $type;
        return $this;
    }
}
