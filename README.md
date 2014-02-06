# CrudGeneratorBundle

This bundle generates code cute you extending SensioGeneratorBundle using KnpPaginatorBundle and Boostrap Templates.

## Installation

### Using composer

Add following lines to your `composer.json` file:

### Symfony 2.3.1 - 2.3.2

```json
"require": {
	...
	"mwsimple/crud-generator": "v2.3.2"
}
```

### Symfony 2.3.3

```json
"require": {
	...
	"mwsimple/crud-generator": "v2.3.3"
}
```

### Symfony > 2.3.6 + Include Boostrap 2

```json
"require": {
	...
	"mwsimple/crud-generator": "dev-2.3-bootstrap2"
}
```

### Symfony 2.3.9 + Include Boostrap 3

```json
"require": {
    ...
    "mwsimple/crud-generator": "2.3.9.*@dev"
}
```

Execute:

```cli
php composer.phar update "mwsimple/crud-generator"
```

Add it to the `AppKernel.php` class:

```php
	// ...
	new MWSimple\Bundle\CrudGeneratorBundle\MWSimpleCrudGeneratorBundle(),
	new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
	new Lexik\Bundle\FormFilterBundle\LexikFormFilterBundle(),
```

### Configuration paginator example

You can configure `config.yml` default query parameter names and templates

```yaml
    knp_paginator:
        page_range: 5                      # default page range used in pagination control
        default_options:
            page_name: page                # page query parameter name
            sort_field_name: sort          # sort field query parameter name
            sort_direction_name: direction # sort direction query parameter name
            distinct: true                 # ensure distinct results, useful when ORM queries are using GROUP BY statements
        template:
            pagination: KnpPaginatorBundle:Pagination:twitter_bootstrap_pagination.html.twig # bootstrap sliding pagination controls template
            sortable: KnpPaginatorBundle:Pagination:sortable_link.html.twig # sort link template
```

### Configuration filter example

You can configure `config.yml` find Twig Configuration

```yaml
    twig:
        ...
        form:
            resources:
                - LexikFormFilterBundle:Form:form_div_layout.html.twig
```

### Configure translations (include en, es, ca)

You can configure `config.yml`

```yaml
    framework:
        ...
        translator:      { fallback: %locale% } # uncomment line
```

### Install assets

```cli
app/console assets:install
```

## Dependencies

This bundle extends [SensioGeneratorBundle](https://github.com/sensio/SensioGeneratorBundle) and add a paginator using [KnpPaginatorBundle](https://github.com/KnpLabs/KnpPaginatorBundle) and filter using [LexikFormFilterBundle](https://github.com/lexik/LexikFormFilterBundle) .

## Usage

Use following command from console:

```cli
app/console mwsimple:generate:crud
```

## Author

Gonzalo Alonso - gonkpo@gmail.com

## Bootstrap 3

Tito Canteros - titocanteros@gmail.com