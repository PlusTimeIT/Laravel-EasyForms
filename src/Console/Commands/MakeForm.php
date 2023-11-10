<?php

namespace PlusTimeIT\EasyForms\Console\Commands;

use File;
use Illuminate\Console\Command;

/**
 * Command to create a new Laravel EasyForm via terminal.
 */
class MakeForm extends Command
{
    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Create a new Laravel EasyForm';

    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'make:form {name} {type=input}';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->comment('Creating EasyForm....');
        $type = strtolower($this->argument('type'));

        $replacements = [
            '<projectNamespace>' => config('easyforms.form.namespace'),
            '<formName>' => $this->argument('name'),
        ];
        $allowedTypes = ['input', 'action'];

        if (! in_array($type, $allowedTypes)) {
            $this->comment("{$this->argument('type')} is unknown, Type must be one of the following: ".implode(',', $allowedTypes));

            return 0;
        }

        if (! File::isDirectory(config('easyforms.form.path'))) {
            File::makeDirectory(config('easyforms.form.path'));
        }

        if (File::exists(app_path(config('easyforms.form.path')."/{$this->argument('name')}.php"))) {
            $this->comment("{$this->argument('name')} already exists, failed to create.");

            return 0;
        }

        $contents = match ($type) {
            'action' => File::get(base_path('/vendor/plustime-it/laravel-easyforms/stubs/ActionForm.stub')),
            default => File::get(base_path('/vendor/plustime-it/laravel-easyforms/stubs/InputForm.stub')),
        };

        foreach ($replacements as $find => $replace) {
            $contents = str_replace($find, $replace, $contents);
        }

        File::put(config('easyforms.form.path')."/{$this->argument('name')}.php", $contents);
        $this->comment("Successfully created {$this->argument('name')}");

        return 1;
    }
}
