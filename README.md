An example project that uses [php-actions/phpunit][action-link]
===

This is a trivial project that holds only simple example functionality: a greeter that can greet you by name.

Check out the [**Actions tab** in the Github repository][actions-tab] to see the past actions workflows and their outputs.

There are unit tests stored within the `test` directory, along with a `phpunit.xml`.

The file at `.github/workflows/ci.yml` shows how to use [php-actions/phpunit][action-link] - take note of the `uses: php-actions/phpunit@v9` line.

Versions of PHPUnit and all options are available to configure. Please see the [php-actions/phpunit documentation][action-link] for more information!

Please note **the version number of the Github Action must match your composer.json major version number**. For example, if your composer.json requires `phpunit/phpunit 8.5.8`, you must use `php-actions/phpunit@v8`, as major versions of PHPUnit are incompatible with each other.   

*** 

If you found this repository helpful, please consider [sponsoring the developer][sponsor].

[action-link]: https://github.com/php-actions/phpunit
[actions-tab]: https://github.com/php-actions/example-phpunit/actions
[sponsor]: https://github.com/sponsors/g105b
