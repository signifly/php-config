# Signifly PHP Configuration files

This repository contains the default configuration files for various services.

## Code formatting

We use php-cs-fixer to format our code in order to standardize the styling across projects. There should be a plugin that formats the file on save to the most popular editors, such as: VS Code, Sublime Text, PHP Storm

Optionally, add the following to the scripts section in the project's composer.json file:

```php
"format": [
    "vendor/bin/php-cs-fixer fix"
],
```

This allows you to run `composer format` from your terminal to format the entire code base.

## Usage

Install the package by pulling it in from Composer:

```bash
composer require signifly/php-config --dev
```

Then update the `.php_cs.dist` file:

```php
$finder = PhpCsFixer\Finder::create()
    ->notPath('bootstrap')
    ->notPath('storage')
    ->notPath('vendor')
    ->notPath('docker')
    ->in(getcwd())
    ->name('*.php')
    ->notName('*.blade.php')
    ->notName('index.php')
    ->notName('server.php')
    ->ignoreDotFiles(true)
    ->ignoreVCS(true);

return Signifly\styles($finder);
```

Remember to update the `Finder` according to the project setup.
