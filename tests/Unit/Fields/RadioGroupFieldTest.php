<?php
namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

use PlusTimeIT\EasyForms\Elements\RadioItem;
use PlusTimeIT\EasyForms\Fields\RadioGroupField;

/**
 * @internal
 * @coversNothing
 */
class RadioGroupFieldTest extends \PlusTimeIT\EasyForms\Tests\Unit\Fields\FieldTestCase
{
    public function setUp(): void
    {
        $this->fieldClass = RadioGroupField::class;
        $this->fieldComponent = 'v-radio-group';
    }

    public function testAAnyFieldCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = TRUE;
        $field->setAnyField($test);
        $this->assertSame($field->getAnyField(), $test);
    }

    public function testAChipsCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = TRUE;
        $field->setChips($test);
        $this->assertSame($field->getChips(), $test);
    }

    public function testAColumnCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = FALSE;
        $field->setColumn($test);
        $this->assertSame($field->getColumn(), $test);
    }

    public function testAComponentIsRadioGroup()
    {
        $field = new $this->fieldClass();
        $this->assertSame($field->getComponent(), $this->fieldComponent);
    }

    public function testAItemCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = RadioItem::make()->setColor('white')->setLabel('Testing')->setValue('test');
        $field->addItem($test);
        $this->assertContains($test, $field->getItems());
    }

    public function testAItemsCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = [];
        $field->setItems($test);
        $this->assertSame($field->getItems(), $test);
    }

    public function testAMandatoryCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = TRUE;
        $field->setMandatory($test);
        $this->assertSame($field->getMandatory(), $test);
    }

    public function testAMultipleCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = TRUE;
        $field->setMultiple($test);
        $this->assertSame($field->getMultiple(), $test);
    }

    public function testARowCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = TRUE;
        $field->setRow($test);
        $this->assertSame($field->getRow(), $test);
    }
}
