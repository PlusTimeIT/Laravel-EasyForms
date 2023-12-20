<?php

namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

use PlusTimeIT\EasyForms\Fields\DatePickerField;

/**
 * @internal
 *
 * @coversNothing
 */
class DatePickerFieldTest extends \PlusTimeIT\EasyForms\Tests\Unit\Fields\FieldTestCase
{
    public function setUp(): void
    {
        $this->fieldClass = DatePickerField::class;
        $this->fieldComponent = 'easy-date-picker';
    }

    public function testACloseOnContentClickCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = false;
        $field->setCloseOnContentClick($test);
        $this->assertSame($field->getCloseOnContentClick(), $test);
    }

    public function testAComponentIsDatePicker()
    {
        $field = $this->fieldClass::make();
        $this->assertSame($field->getComponent(), $this->fieldComponent);
    }

    public function testAControlsCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = true;
        $field->setControls($test);
        $this->assertSame($field->getControls(), $test);
    }

    public function testAMultipleCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = true;
        $field->setMultiple($test);
        $this->assertSame($field->getMultiple(), $test);
    }
}
