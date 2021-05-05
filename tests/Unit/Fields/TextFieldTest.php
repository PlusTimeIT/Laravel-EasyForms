<?php
namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

use PlusTimeIT\EasyForms\Fields\TextField;

/**
 * @internal
 * @coversNothing
 */
class TextFieldTest extends \PlusTimeIT\EasyForms\Tests\Unit\Fields\FieldTestCase
{
    public function setUp(): void
    {
        $this->fieldClass = TextField::class;
        $this->fieldComponent = 'v-text-field';
    }

    public function testAComponentIsTextField()
    {
        $field = new $this->fieldClass();
        $this->assertSame($field->getComponent(), $this->fieldComponent);
    }

    public function testACounterCanBeSet()
    {
        $field = new $this->fieldClass();
        $field->setCounter('10');
        $this->assertObjectHasAttribute('counter', $field);
    }

    public function testAMaxLengthCanBeSet()
    {
        $field = new $this->fieldClass();
        $field->setMaxLength('10');
        $this->assertObjectHasAttribute('maxlength', $field);
    }

    public function testCanGetCounter()
    {
        $field = new $this->fieldClass();
        $field->setCounter('10');
        $this->assertTrue('10' == $field->getCounter());
    }

    public function testCanGetMaxLength()
    {
        $field = new $this->fieldClass();
        $field->setMaxLength('10');
        $this->assertTrue('10' == $field->getMaxLength());
    }
}
