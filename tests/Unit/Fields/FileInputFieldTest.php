<?php

namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

use PlusTimeIT\EasyForms\Fields\FileInputField;

/**
 * @internal
 *
 * @coversNothing
 */
class FileInputFieldTest extends \PlusTimeIT\EasyForms\Tests\Unit\Fields\FieldTestCase
{
    public function setUp(): void
    {
        $this->fieldClass = FileInputField::class;
        $this->fieldComponent = 'v-file-input';
    }

    public function testAAcceptCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = 'tests';
        $field->setAccept($test);
        $this->assertSame($field->getAccept(), $test);
    }

    public function testAComponentIsFileInput()
    {
        $field = $this->fieldClass::make();
        $this->assertSame($field->getComponent(), $this->fieldComponent);
    }

    public function testACounterCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = true;
        $field->setCounter($test);
        $this->assertSame($field->getCounter(), $test);
    }

    public function testAMultipleCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = true;
        $field->setMultiple($test);
        $this->assertSame($field->getMultiple(), $test);
    }

    public function testAPrependIconCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = 'test icon';
        $field->setPrependIcon($test);
        $this->assertSame($field->getPrependIcon(), $test);
    }

    public function testAShowSizeCanBeSetAndGet()
    {
        $field = $this->fieldClass::make();
        $test = true;
        $field->setShowSize($test);
        $this->assertSame($field->getShowSize(), $test);
    }
}
