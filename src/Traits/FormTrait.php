<?php

namespace PlusTimeIT\EasyForms\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PlusTimeIT\EasyForms\Elements\LoadResponse;
use PlusTimeIT\EasyForms\Elements\ProcessResponse;

trait FormTrait
{
    use Attributes\HasAdditionalData;
    use Attributes\HasAlerts;
    use Attributes\HasAxios;
    use Attributes\HasFormLoader;
    use Attributes\HasGoogleRecaptchaSiteKey;
    use Attributes\HasName;
    use Attributes\HasShowTitle;
    use Attributes\HasTitle;
    use Attributes\HasType;
    use Creatable;

    public function getValidation(): array
    {
        return collect($this->fields ?? [])->mapWithKeys(function ($field) {
            $rules = [];
            collect($field->getRules())->each(function ($rule) use (&$rules) {
                // if boolean check if true, if not skip it.
                if ((is_bool($rule->getValue()) && $rule->getValue()) || ! is_bool($rule->getValue())) {
                    $rules[] = (is_bool($rule->getValue()) ? $rule->getName() : implode(':', [$rule->getName(), $rule->getValue()]));
                }
            });

            return [$field->getName() => implode('|', $rules)];
        })->reject(fn ($rules) => empty($rules))->toArray();
    }

    public static function load(request $request): LoadResponse
    {
        return LoadResponse::make()->success()->form(self::make());
    }

    abstract public static function process(request $request): ProcessResponse;

    public function validateRequest(request $request)
    {
        return Validator::make($request->all(), $this->getValidation());
    }
}
