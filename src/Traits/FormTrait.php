<?php
namespace PlusTimeIT\EasyForms\Traits;

use Illuminate\Http\Request;
use PlusTimeIT\EasyForms\Elements\{Axios, ProcessResponse};

trait FormTrait
{
    use Attributes\HasAlerts;
    use Attributes\HasAxios;
    use Attributes\HasName;
    use Attributes\HasTitle;
    use Attributes\HasType;

    public static function fill(request $request)
    {
        return self::make();
    }

    public function getValidation(): array
    {
        return collect($this->fields ?? [])->mapWithKeys(function($field) {
            $rules = [];
            collect($field->getRules())->each(function($rule) use (&$rules) {
                $rules[] = (is_bool($rule->getValue()) ? $rule->getName() : implode(':', [$rule->getName() , $rule->getValue()]));
            });
            return [$field->getName() => implode('|', $rules)];
        })->reject(fn($rules) => empty($rules))->toArray();
    }

    public static function make(): self
    {
        return new static();
    }

    public static function process(request $request)
    {
        return ProcessResponse::make()->success()->data('Yay you processed!');
    }

    public function validateRequest(request $request)
    {
        return \Validator::make($request->all(), $this->getValidation());
    }
}
