<?php
namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

/**
 * @internal
 * @coversNothing
 */
class FieldTestCase extends \Orchestra\Testbench\TestCase
{
    protected $fieldClass;

    protected $fieldComponent;

    protected $fieldType;

    public function testItCanBeStaticallyCreated()
    {
        $class = $this->fieldClass;
        $this->assertTrue($class::make() == new $class());
    }
}
