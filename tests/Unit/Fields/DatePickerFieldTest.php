<?php
namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

use PlusTimeIT\EasyForms\Fields\DatePickerField;

/**
 * @internal
 * @coversNothing
 */
class DatePickerFieldTest extends \PlusTimeIT\EasyForms\Tests\Unit\Fields\FieldTestCase
{
    public function setUp(): void
    {
        $this->fieldClass = DatePickerField::class;
        $this->fieldComponent = 'date-picker';
    }

    public function testACloseOnContentClickCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = FALSE;
        $field->setCloseOnContentClick($test);
        $this->assertSame($field->getCloseOnContentClick(), $test);
    }

    public function testAComponentIsDatePicker()
    {
        $field = new $this->fieldClass();
        $this->assertSame($field->getComponent(), $this->fieldComponent);
    }

    public function testAControlsCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = TRUE;
        $field->setControls($test);
        $this->assertSame($field->getControls(), $test);
    }

    public function testAMultipleCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = TRUE;
        $field->setMultiple($test);
        $this->assertSame($field->getMultiple(), $test);
    }
}
