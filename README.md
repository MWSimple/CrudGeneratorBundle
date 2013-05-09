## Mi Web Simple

# CrudGeneratorBundle

## Installation

### Using composer

Add following lines to your `composer.json` file:

### Symfony 2.2

    "require": {
      ...
      "mwsimple/crud-generator": "2.2.*@dev"
    },
    "minimum-stability": "dev"


Execute:

    php composer.phar update "mwsimple/crud-generator"

Add it to the `AppKernel.php` class:

    new MWSimple\Bundle\CrudGeneratorBundle\MWSimpleCrudGeneratorBundle(),

## Dependencies

This bundle extends [SensioGeneratorBundle](https://github.com/sensio/SensioGeneratorBundle) and add a paginator using ...(developing) and filter
support using ...(developing) .

## Usage

Use following command from console:

    app/console mwsimple:generate:crud

## Author

Gonzalo Alonso - gonkpo@gmail.com
