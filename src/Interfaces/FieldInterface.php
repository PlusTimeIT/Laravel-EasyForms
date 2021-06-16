<?php
namespace PlusTimeIT\EasyForms\Interfaces;

interface FieldInterface
{
    public function dependsOn(string $dependsOn);

    public function getClearable(): bool;

    public function getCols(): int;

    public function getComponent(): string;

    public function getComponentType(): string;

    public function getDense(): bool;

    public function getDependsOn(): string | NULL;

    public function getHelp(): string;

    public function getLabel(): string;

    public function getOrder(): int;

    public function getOutlined(): bool;

    public function getPlaceholder(): string;

    public function getReadonly(): bool;

    public function getRules(): array;

    public function getTooltip(): string;

    public function getType(): string;

    public function getValue();

    public function setClearable(bool $clearable);

    public function setCols(int $cols);

    public function setComponent(string $component);

    public function setComponentType(string $component_type);

    public function setDense(bool $dense);

    public function setDependsOn(string $dependsOn);

    public function setHelp(string $help);

    public function setLabel(string $label);

    public function setOptions(array $options);

    public function setOrder(int $order);

    public function setOutlined(bool $outlined);

    public function setPlaceholder(string $placeholder);

    public function setReadonly(bool $readonly);

    public function setRules(array $rules);

    public function setTooltip(string $tooltip);

    public function setType(string $type);

    public function setValue($value);

    public function toArray();

    public function toJson();
}
