<?php

namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

/**
 * @internal
 * @coversNothing
 */
class FieldTestCase extends \Orchestra\Testbench\TestCase
{
    public $fieldClass;

    public function testItCanBeStaticallyCreated()
    {
        $class = $this->fieldClass;
        $this->assertTrue($class::make() == new $class());
    }
}
