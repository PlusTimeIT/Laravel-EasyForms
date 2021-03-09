<?php
namespace PlusTimeIT\EasyForms\Traits;

use Illuminate\Http\Request;

trait FormTrait
{
    public function fill(array $data)
    {
    }

    public function getFields(): array
    {
        return $this->fields;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function load()
    {
        return self::TYPE == 'input' ? $this->fields->toJson() : $this->fields->toJson();
    }

    public function process(request $request)
    {
        //validate
    }

    public function setFields(array $fields): self
    {
        $this->fields = $fields;
        return $this->sortFields();
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

    public function sortFields(): self
    {
        $this->fields = collect($this->fields)->sortBy([fn($a, $b) => $a->getOrder() <=> $b->getOrder()])->toArray();
        return $this;
    }

    use ToArrayTrait;
    use ToJsonTrait;
}
