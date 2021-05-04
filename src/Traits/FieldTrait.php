<?php
namespace PlusTimeIT\EasyForms\Traits;

trait FieldTrait
{
    use Transformable;

    protected $clearable = FALSE;

    protected $cols = 12;

    protected $component = 'v-text-field';

    protected $component_type = '';

    protected $dense = TRUE;

    protected $help = '';

    protected $label = '';

    protected $masking = '';

    protected $name = '';

    protected $order = 0;

    protected $outlined = TRUE;

    protected $placeholder = '';

    protected $readonly = FALSE;

    protected $rules = [];

    protected $tooltip = '';

    protected $type = 'text';

    protected $value = '';

    public function getClearable(): bool
    {
        return $this->clearable;
    }

    public function getCols(): int
    {
        return $this->cols;
    }

    public function getComponent(): string
    {
        return $this->component;
    }

    public function getComponentType(): string
    {
        return $this->component_type;
    }

    public function getDense(): bool
    {
        return $this->dense;
    }

    public function getHelp(): string
    {
        return $this->help;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getMasking()
    {
        return $this->masking;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public function getOutlined(): bool
    {
        return $this->outlined;
    }

    public function getPlaceholder(): string
    {
        return $this->placeholder;
    }

    public function getReadonly(): bool
    {
        return $this->readonly;
    }

    public function getRules(): array
    {
        return $this->rules;
    }

    public function getTooltip(): string
    {
        return $this->tooltip;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getValue(): mixed
    {
        return $this->value;
    }

    public function setClearable(bool $clearable): self
    {
        $this->clearable = $clearable;

        return $this;
    }

    public function setCols(int $cols): self
    {
        $this->cols = $cols;

        return $this;
    }

    public function setComponent(string $component): self
    {
        $this->component = $component;

        return $this;
    }

    public function setComponentType(string $component_type): self
    {
        $this->component_type = $component_type;

        return $this;
    }

    public function setDense(bool $dense): self
    {
        $this->dense = $dense;

        return $this;
    }

    public function setHelp(string $help): self
    {
        $this->help = $help;

        return $this;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function setMasking($masking): self
    {
        $this->masking = $masking;

        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

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

    public function setPlaceholder(string $placeholder): self
    {
        $this->placeholder = $placeholder;

        return $this;
    }

    public function setReadonly(bool $readonly): self
    {
        $this->readonly = $readonly;

        return $this;
    }

    public function setRules(array $rules): self
    {
        $this->rules = $rules;

        return $this;
    }

    public function setTooltip(string $tooltip): self
    {
        $this->tooltip = $tooltip;

        return $this;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function setValue($value): self
    {
        $this->value = $value;

        return $this;
    }
}
