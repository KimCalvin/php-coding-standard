# php-coding-standard (phpcstd)
This project combines various PHP linting and static analysis tools into one
easy to use CLI binary.

> **Disclaimer:**
Since this is an opinionated project, the configurations are tailed to my personal taste.
However, most of it is based on the official PSR standards and only do slight style adjustments here and there
(e.g. leaving out function arguments if they're redundant, importing global constants and functions, ...).

## Getting started
```
composer require-dev spaceemotion/phpcstd
```

This will install the `phpcstd` binary to your vendor folder.

```
$ phpcstd [options] <files or folders>

--ci
  Changes the output format to checkstyle.xml for better CI integration

--fix
  Try to fix any linting errors (disables other tools)

--continue
  Just run the next check if the previous one failed

--help
  Displays this help message
```

## Contents
### Tools included
Tool | Description
-----|------------
[PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) | Detects styling issues
[phpstan](https://github.com/phpstan/phpstan) | Runs logical checks
[PHP Mess Detector](https://github.com/phpmd/phpmd) | Tries to keep code complexity to a minimum

### Extensions used
- **phpstan**
  - nunomaduro/larastan
  - phpstan/phpstan-deprecation-rules
  - phpstan/phpstan-mockery
  - phpstan/phpstan-phpunit
  - phpstan/phpstan-strict-rules
- **PHP_CodeSniffer**
  - escapestudios/symfony2-coding-standard
  - slevomat/coding-standard