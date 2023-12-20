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

    public function buildDirectories(array $directories): void
    {
        $base = '';
        foreach ($directories as $directory) {
            $base .= $directory;
            $this->comment('Checking: '.$base);
            if (! File::isDirectory(config('easyforms.form.path').'/'.$base)) {
                File::makeDirectory(config('easyforms.form.path').'/'.$base);
            }
            $base .= '/';
        }
    }

    /**
     * Execute the console command.
     */
    public function checks(string $type): bool
    {
        $allowedTypes = ['input', 'action'];
        $this->comment('Running checks...');
        if (! File::isDirectory(config('easyforms.form.path'))) {
            File::makeDirectory(config('easyforms.form.path'));
        }

        if (! in_array($type, $allowedTypes)) {
            $this->comment("{$this->argument('type')} is unknown, Type must be one of the following: ".implode(',', $allowedTypes));

            return false;
        }

        return true;
    }

    public function handle(): int
    {

        $this->comment('Creating EasyForm....');
        $type = strtolower($this->argument('type'));

        if (! $this->checks($type)) {
            $this->comment('Creating Form failed');

            return 0;
        }

        $fullFilePath = str_replace('\\', '/', $this->argument('name'));
        $directories = explode('\\', $this->argument('name'));
        $name = $directories[array_key_last($directories)];
        $this->comment('Directory checking...');
        $namespace = config('easyforms.form.namespace');
        if (count($directories) > 1) {
            $this->comment('Directories found...');
            array_pop($directories);
            $namespace .= '\\'.implode('\\', $directories);

            $this->buildDirectories($directories);

        }
        $this->comment('File checking for duplicates...');

        if (File::exists(app_path(config('easyforms.form.path')."/{$fullFilePath}.php"))) {
            $this->comment("{$this->argument('name')} already exists, failed to create.");

            return 0;
        }

        $replacements = [
            '<namespace>' => $namespace,
            '<fullName>' => $this->argument('name'),
            '<name>' => $name,
        ];

        $this->comment('Getting stub...');
        $contents = match ($type) {
            'action' => File::get(base_path('/vendor/plustime-it/laravel-easyforms/stubs/ActionForm.stub')),
            default => File::get(base_path('/vendor/plustime-it/laravel-easyforms/stubs/InputForm.stub')),
        };

        $this->comment('Replacing placeholders...');
        foreach ($replacements as $find => $replace) {
            $contents = str_replace($find, $replace, $contents);
        }

        $this->comment('Creating file..');
        File::put(config('easyforms.form.path')."/{$fullFilePath}.php", $contents);
        $this->comment("Successfully created {$this->argument('name')}");

        return 1;
    }
}
