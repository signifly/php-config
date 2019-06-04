# Signifly PHP Configuration files

This repository contains the default configuration files for various services.

## Code formatting

We use php-cs-fixer to format our code in order to standardize the styling across projects. There should be a plugin that formats the file on save to the most popular editors, such as: VS Code, Sublime Text, PHP Storm

**Setup**

Copy the `.php_cs` file to the root folder of your project.

Optionally, add the following to the scripts section in the project's composer.json file:

```php
"format": [
    "vendor/bin/php-cs-fixer fix"
],
```

This allows you to run `composer format` from your terminal to format the entire code base.
