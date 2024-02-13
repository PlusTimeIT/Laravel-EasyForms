<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

use PlusTimeIT\EasyForms\Elements\ProgressCircular;
use PlusTimeIT\EasyForms\Elements\ProgressLinear;

trait HasProgress
{
    protected ProgressLinear|ProgressCircular $progress;

    public function getProgress(): ProgressLinear|ProgressCircular
    {
        return $this->progress;
    }

    public function progress(): ProgressLinear|ProgressCircular
    {
        return $this->progress;
    }

    public function setProgress(ProgressLinear|ProgressCircular $progress): static
    {
        $this->progress = $progress;

        return $this;
    }
}
