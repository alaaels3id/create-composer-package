<?php

namespace App\Console\Commands;

use Alaaelsaid\LaravelStubPackage\Support\Stub;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    protected $signature = 'test:create {name}';

    protected $description = 'Command description';

    public function handle()
    {
        $name = $this->argument('name');

        $namespace = 'App\\Http\\Tests';

        $path = base_path($namespace) . '\\' . ucwords($name) . 'Test.php';

        $message = Stub::of('test-command.stub', $name, $namespace, $path);

        $this->info($message);
    }
}
