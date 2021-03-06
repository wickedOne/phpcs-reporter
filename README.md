# PHP CodeSniffer PhpStorm reporter

prints additional PhpStorm editor url in PHPCS cli output.

[![Latest Stable Version](http://poser.pugx.org/wickedone/phpcs-reporter/v)](https://packagist.org/packages/wickedone/phpcs-reporter) 
[![Total Downloads](http://poser.pugx.org/wickedone/phpcs-reporter/downloads)](https://packagist.org/packages/wickedone/phpcs-reporter) 
[![License](http://poser.pugx.org/wickedone/phpcs-reporter/license)](https://packagist.org/packages/wickedone/phpcs-reporter) 
[![PHP Version Require](http://poser.pugx.org/wickedone/phpcs-reporter/require/php)](https://packagist.org/packages/wickedone/phpcs-reporter)

## installation
```bash
$ composer require --dev wickedone/phpcs-reporter
```

### command line usage:
specify this report on the command line:

```bash
$ php vendor/bin/phpcs --report='WickedOne\PHPCSReport\PhpStormReport'
```

### phpcs xml configuration
specify this report in your ``phpcs.xml.dist``:
```xml
<?xml version="1.0" encoding="UTF-8"?>

<ruleset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="vendor/squizlabs/php_codesniffer/phpcs.xsd">

    <arg name="report" value="WickedOne\PHPCSReport\PhpStormReport" />
    ...

```

> **NOTE**: if one file has multiple violations, the editor link will direct you to the file itself rather than the correct line.
> use ctrl + l to jump to the correct line in these situations.