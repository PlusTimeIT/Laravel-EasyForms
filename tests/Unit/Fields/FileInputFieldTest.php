<?php
namespace PlusTimeIT\EasyForms\Tests\Unit\Fields;

use PlusTimeIT\EasyForms\Fields\FileInputField;

/**
 * @internal
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
        $field = new $this->fieldClass();
        $test = 'tests';
        $field->setAccept($test);
        $this->assertSame($field->getAccept(), $test);
    }

    public function testAComponentIsFileInput()
    {
        $field = new $this->fieldClass();
        $this->assertSame($field->getComponent(), $this->fieldComponent);
    }

    public function testACounterCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = TRUE;
        $field->setCounter($test);
        $this->assertSame($field->getCounter(), $test);
    }

    public function testAMultipleCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = TRUE;
        $field->setMultiple($test);
        $this->assertSame($field->getMultiple(), $test);
    }

    public function testAPrependIconCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = 'test icon';
        $field->setPrependIcon($test);
        $this->assertSame($field->getPrependIcon(), $test);
    }

    public function testAShowSizeCanBeSetAndGet()
    {
        $field = new $this->fieldClass();
        $test = TRUE;
        $field->setShowSize($test);
        $this->assertSame($field->getShowSize(), $test);
    }
}
