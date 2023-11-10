<?php

namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

use PlusTimeIT\EasyForms\Elements\RadioItem;
use PlusTimeIT\EasyForms\Fields\RadioGroupField;

/**
 * @internal
 *
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
        $field = $this->fieldClass::make();
        $test = true;
        $field->setAnyField($test);
        $this->assertSame($field->getAnyField(), $test);
    }

    public function testAChipsCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = true;
        $field->setChips($test);
        $this->assertSame($field->getChips(), $test);
    }

    public function testAColumnCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = false;
        $field->setColumn($test);
        $this->assertSame($field->getColumn(), $test);
    }

    public function testAComponentIsRadioGroup()
    {
        $field = $this->fieldClass::make();
        $this->assertSame($field->getComponent(), $this->fieldComponent);
    }

    public function testAItemCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = RadioItem::make()->setColor('white')->setLabel('Testing')->setValue('test');
        $field->addItem($test);
        $this->assertContains($test, $field->getItems());
    }

    public function testAItemsCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = [];
        $field->setItems($test);
        $this->assertSame($field->getItems(), $test);
    }

    public function testAMandatoryCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = true;
        $field->setMandatory($test);
        $this->assertSame($field->getMandatory(), $test);
    }

    public function testAMultipleCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = true;
        $field->setMultiple($test);
        $this->assertSame($field->getMultiple(), $test);
    }

    public function testARowCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = true;
        $field->setRow($test);
        $this->assertSame($field->getRow(), $test);
    }
}
