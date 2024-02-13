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

    public function setHelp(string $help): static
    {
        $this->help = $help;
        // get default settings for help icon.
        $defaultHelp = config('easyforms.defaults.help');
        $defaultHelp['position'] = $defaultHelp['position'] ?? 'append_inner_icon';
        $helpIcon = Icon::make()->setSize('small')->setIcon($defaultHelp['icon'] ?? 'mdi-help');
        if (! $helpIcon->hasTooltip()) {
            $helpIcon->setTooltip(
                Tooltip::make(['text' => $this->help])
            );
        }
        if (property_exists(__CLASS__, $defaultHelp['position'])) {
            // icon position exists on field
            $this->{$defaultHelp['position']} = $helpIcon;
        } else {
            // set help icon position to default append-inner
            $this->append_inner_icon = $helpIcon;
        }

        return $this;
    }
}
