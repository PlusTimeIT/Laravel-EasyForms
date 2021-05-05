<?php
namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

use PlusTimeIT\EasyForms\Fields\TimePickerField;

/**
 * @internal
 * @coversNothing
 */
class TimePickerFieldTest extends \PlusTimeIT\EasyForms\Tests\Unit\Fields\FieldTestCase
{
    public function setUp(): void
    {
        $this->fieldClass = TimePickerField::class;
        $this->fieldComponent = 'time-picker';
    }

    public function testAAmPmInTitleCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = FALSE;
        $field->setAmPmInTitle($test);
        $this->assertSame($field->getAmPmInTitle(), $test);
    }

    public function testAComponentIsTimePicker()
    {
        $field = new $this->fieldClass();
        $this->assertSame($field->getComponent(), $this->fieldComponent);
    }

    public function testAMultipleCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = TRUE;
        $field->setMultiple($test);
        $this->assertSame($field->getMultiple(), $test);
    }

    public function testANoTitleCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = TRUE;
        $field->setNoTitle($test);
        $this->assertSame($field->getNoTitle(), $test);
    }
}
