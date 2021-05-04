<?php
namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

use PlusTimeIT\EasyForms\Elements\SelectItem;
use PlusTimeIT\EasyForms\Fields\AutoCompleteField;

/**
 * @internal
 * @coversNothing
 */
class AutoCompleteTest extends \PlusTimeIT\EasyForms\Tests\Unit\Fields\FieldTestCase
{
    public function setUp(): void
    {
        $this->fieldClass = AutoCompleteField::class;
        $this->fieldComponent = 'v-autocomplete';
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

    public function testAComponentIsAutoComplete()
    {
        $field = new $this->fieldClass();
        $this->assertSame($field->getComponent(), $this->fieldComponent);
    }

    public function testAItemCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = SelectItem::make()->setId(0)->setValue('test');

        $field->addItem($test);
        $this->assertContains($test, $field->getItems());
    }

    public function testAItemIdCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = 'test id';
        $field->setItemId($test);
        $this->assertSame($field->getItemId(), $test);
    }

    public function testAItemsCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = [];
        $field->setItems($test);
        $this->assertSame($field->getItems(), $test);
    }

    public function testAItemTextCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = 'test text';
        $field->setItemText($test);
        $this->assertSame($field->getItemText(), $test);
    }

    public function testAItemValueCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = 'test value';
        $field->setItemValue($test);
        $this->assertSame($field->getItemValue(), $test);
    }

    public function testAMultipleCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = TRUE;
        $field->setMultiple($test);
        $this->assertSame($field->getMultiple(), $test);
    }
}
