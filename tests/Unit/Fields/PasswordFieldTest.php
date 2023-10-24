<?php

namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

use PlusTimeIT\EasyForms\Fields\PasswordField;

/**
 * @internal
 *
 * @coversNothing
 */
class PasswordFieldTest extends \PlusTimeIT\EasyForms\Tests\Unit\Fields\FieldTestCase
{
    public function setUp(): void
    {
        $this->fieldClass = PasswordField::class;
        $this->fieldComponent = 'v-text-field';
    }

    public function testAComponentIsTextField()
    {
        $field = $this->fieldClass::make();
        $this->assertSame($field->getComponent(), $this->fieldComponent);
    }

    public function testACounterCanBeSet()
    {
        $field = $this->fieldClass::make();
        $field->setCounter('10');
        $this->assertEquals($field->getCounter(), '10');
    }

    public function testAMaxLengthCanBeSet()
    {
        $field = $this->fieldClass::make();
        $field->setMaxLength('10');
        $this->assertEquals($field->getMaxLength(), '10');
    }

    public function testCanGetCounter()
    {
        $field = $this->fieldClass::make();
        $field->setCounter('10');
        $this->assertTrue($field->getCounter() == '10');
    }

    public function testCanGetMaxLength()
    {
        $field = $this->fieldClass::make();
        $field->setMaxLength('10');
        $this->assertTrue($field->getMaxLength() == '10');
    }
}
