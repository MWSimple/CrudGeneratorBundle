# CrudGeneratorBundle

This bundle generates code cute you extending SensioGeneratorBundle using KnpPaginatorBundle and Boostrap Templates.

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

	// ...
    new MWSimple\Bundle\CrudGeneratorBundle\MWSimpleCrudGeneratorBundle(),
    new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),

### Configuration paginator example

You can configure default query parameter names and templates

```yaml
knp_paginator:
    page_range: 5                      # default page range used in pagination control
    default_options:
        page_name: page                # page query parameter name
        sort_field_name: sort          # sort field query parameter name
        sort_direction_name: direction # sort direction query parameter name
        distinct: true                 # ensure distinct results, useful when ORM queries are using GROUP BY statements
    template:
        pagination: KnpPaginatorBundle:Pagination:sliding.html.twig     # sliding pagination controls template
        sortable: KnpPaginatorBundle:Pagination:sortable_link.html.twig # sort link template


## Dependencies

This bundle extends [SensioGeneratorBundle](https://github.com/sensio/SensioGeneratorBundle) and add a paginator using [KnpPaginatorBundle](https://github.com/KnpLabs/KnpPaginatorBundle) and filter
support using ...(developing) .

## Usage

Use following command from console:

    app/console mwsimple:generate:crud

## Author

Gonzalo Alonso - gonkpo@gmail.com