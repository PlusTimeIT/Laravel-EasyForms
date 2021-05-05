<?php
namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

use PlusTimeIT\EasyForms\Fields\NumberField;

/**
 * @internal
 * @coversNothing
 */
class NumberFieldTest extends \PlusTimeIT\EasyForms\Tests\Unit\Fields\FieldTestCase
{
    public function setUp(): void
    {
        $this->fieldClass = NumberField::class;
        $this->fieldComponent = 'v-text-field';
    }

    public function testAComponentIsTextField()
    {
        $field = new $this->fieldClass();
        $this->assertSame($field->getComponent(), $this->fieldComponent);
    }

    public function testAMaxCanBeSet()
    {
        $field = new $this->fieldClass();
        $field->setMax('10');
        $this->assertObjectHasAttribute('max', $field);
    }

    public function testAMinCanBeSet()
    {
        $field = new $this->fieldClass();
        $field->setMin('10');
        $this->assertObjectHasAttribute('min', $field);
    }

    public function testAStepCanBeSet()
    {
        $field = new $this->fieldClass();
        $field->setStep(10);
        $this->assertObjectHasAttribute('step', $field);
    }

    public function testCanGetMax()
    {
        $field = new $this->fieldClass();
        $field->setMax('10');
        $this->assertTrue('10' == $field->getMax());
    }

    public function testCanGetMin()
    {
        $field = new $this->fieldClass();
        $field->setMin('10');
        $this->assertTrue('10' == $field->getMin());
    }

    public function testCanGetStep()
    {
        $field = new $this->fieldClass();
        $field->setStep('10');
        $this->assertTrue('10' == $field->getStep());
    }
}
