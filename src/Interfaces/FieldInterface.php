<?php
namespace PlusTimeIT\EasyForms\Interfaces;

interface FieldInterface
{
    public function getCols();

    public function getComponent();

    public function getComponentType();

    public function getLabel();

    public function getMasking();

    public function getOrder();

    public function getPlaceholder();

    public function getReadonly();

    public function getRequied();

    public function getTooltip();

    public function getType();

    public function getValidation();

    public function getValue();

    public function setCols(int $cols);

    public function setComponent(string $component);

    public function setComponentType(string $component_type);

    public function setLabel(string $label);

    public function setMasking(array $masking);

    public function setOptions(array $options);

    public function setOrder(int $order);

    public function setPlaceholder(string $placeholder);

    public function setReadonly(bool $readonly);

    public function setRequied(bool $required);

    public function setTooltip(string $tooltip);

    public function setType(string $type);

    public function setValidation(array $validation);

    public function setValue($value);

    public function toArray();

    public function toJson();
}
