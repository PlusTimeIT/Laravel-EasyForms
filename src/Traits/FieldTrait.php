<?php
namespace PlusTimeIT\EasyForms\Traits;

trait FieldTrait
{
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

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getMasking(): array
    {
        return $this->masking;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public function getPlaceholder(): string
    {
        return $this->placeholder;
    }

    public function getReadonly(): bool
    {
        return $this->readonly;
    }

    public function getRequied(): bool
    {
        return $this->required;
    }

    public function getTooltip(): string
    {
        return $this->tooltip;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getValidation(): array
    {
        return $this->validation;
    }

    public function getValue(): mixed
    {
        return $this->value;
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

    public function setLabel(string $label): self
    {
        $this->label = $label;
        return $this;
    }

    public function setMasking(array $masking): self
    {
        $this->masking = $masking;
        return $this;
    }

    public function setOrder(int $order): self
    {
        $this->order = $order;
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

    public function setRequied(bool $required): self
    {
        $this->required = $required;
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

    public function setValidation(array $validation): self
    {
        $this->validation = $validation;
        return $this;
    }

    public function setValue($value): self
    {
        $this->value = $value;
        return $this;
    }

    use ConvertTrait;
}
