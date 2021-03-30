<?php
namespace PlusTimeIT\EasyForms\Traits;

use Illuminate\Http\Request;

trait FormTrait
{
    public static function fill(request $request)
    {
        return self::make()->fields();
    }

    public function getAlerts(): array
    {
        return $this->alerts;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getValidation(): array
    {
        return collect($this->fields)->mapWithKeys(function($field) {
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
        //validate
    }

    public function setAlerts(array $alerts): self
    {
        $this->alerts = $alerts;
        return $this;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function validateRequest(request $request)
    {
        return \Validator::make($request->all(), $this->getValidation());
    }
}
