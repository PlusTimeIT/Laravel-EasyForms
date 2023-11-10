<?php

namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

use PlusTimeIT\EasyForms\Fields\NumberField;

/**
 * @internal
 *
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
        $field = $this->fieldClass::make();
        $this->assertSame($field->getComponent(), $this->fieldComponent);
    }

    public function testAMaxCanBeSet()
    {
        $field = $this->fieldClass::make();
        $field->setMax('10');
        $this->assertEquals($field->getMax(), '10');
    }

    public function testAMinCanBeSet()
    {
        $field = $this->fieldClass::make();
        $field->setMin('10');
        $this->assertEquals($field->getMin(), '10');
    }

    public function testAStepCanBeSet()
    {
        $field = $this->fieldClass::make();
        $field->setStep(10);
        $this->assertEquals($field->getStep(), 10);
    }

    public function testCanGetMax()
    {
        $field = $this->fieldClass::make();
        $field->setMax('10');
        $this->assertTrue($field->getMax() == '10');
    }

    public function testCanGetMin()
    {
        $field = $this->fieldClass::make();
        $field->setMin('10');
        $this->assertTrue($field->getMin() == '10');
    }

    public function testCanGetStep()
    {
        $field = $this->fieldClass::make();
        $field->setStep('10');
        $this->assertTrue($field->getStep() == '10');
    }
}
