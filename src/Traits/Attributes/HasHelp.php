<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\Icon;
use PlusTimeIT\EasyForms\Elements\Tooltip;

trait HasHelp
{
    protected string $help = '';

    public function getHelp(): string
    {
        return $this->help;
    }

    public function setHelp(string $help): self
    {
        $this->help = $help;
        // get default settings for help icon.
        $defaultHelp = config('easyforms.defaults.help');
        $defaultHelp['position'] = $defaultHelp['position']->value ?? 'append_inner_icon';
        $defaultHelp['icon'] = $defaultHelp['icon'] ?? Icon::make()->setSize('small')->setIcon('mdi-help');
        if (! $defaultHelp['icon']->hasTooltip()) {
            $defaultHelp['icon']->setTooltip(
                Tooltip::make(['text' => $this->help])
            );
        }
        if (property_exists(__CLASS__, $defaultHelp['position'])) {
            // icon position exists on field
            $this->{$defaultHelp['position']} = $defaultHelp['icon'];
        } else {
            // set help icon position to default append-inner
            $this->append_inner_icon = $defaultHelp['icon'];
        }

        return $this;
    }
}
