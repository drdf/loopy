# loopy

For the loopy developers who want to iterate with `foreach` over `WP_Query`.

## usage

### main query

```php
foreach( loopy($GLOBALS['wp_query']) as $post ) {
    // ...
}
```

### secondary query

```php
$myQuery = new WP_Query('category_name=example-category');

foreach( loopy($myQuery) as $post ) {
    // ...
}
```

## further information

- [WordPress "The Loop"](https://developer.wordpress.org/themes/basics/the-loop/)
- [`yield` / PHP Generator](https://www.php.net/manual/en/language.generators.syntax.php)
