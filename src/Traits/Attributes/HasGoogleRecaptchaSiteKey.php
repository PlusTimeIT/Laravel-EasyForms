<?php

namespace PlusTimeIT\EasyForms\Traits\Attributes;

trait HasGoogleRecaptchaSiteKey
{
    protected ?string $google_recaptcha_site_key = null;

    public function getGoogleRecaptchaSiteKey(): ?string
    {
        return $this->google_recaptcha_site_key;
    }

    public function setGoogleRecaptchaSiteKey(?string $google_recaptcha_site_key): static
    {
        $this->google_recaptcha_site_key = $google_recaptcha_site_key;

        return $this;
    }
}
