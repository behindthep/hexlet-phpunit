# php-package

[![Github Actions Status](https://github.com/hexlet-boilerplates/php-package/workflows/PHP%20CI/badge.svg)](https://github.com/hexlet-boilerplates/php-package/actions)
[![Code Climate](https://codeclimate.com/github/hexlet-boilerplates/php-package/badges/gpa.svg)](https://codeclimate.com/github/hexlet-boilerplates/php-package)
[![Issue Count](https://codeclimate.com/github/hexlet-boilerplates/php-package/badges/issue_count.svg)](https://codeclimate.com/github/hexlet-boilerplates/php-package/issues)
[![Test Coverage](https://codeclimate.com/github/hexlet-boilerplates/php-package/badges/coverage.svg)](https://codeclimate.com/github/hexlet-boilerplates/php-package/coverage)

## Prerequisites

* Linux
* PHP >=8.3
* Xdebug
* Make
* Git

## Addons

Use <http://psysh.org/>

## Setup

```bash
git clone https://github.com/hexlet-boilerplates/php-package.git
cd php-package
make install
```

## Run tests

```sh
make test
```

## Test Coverage

* see `phpunit.xml`
* See [codeclimate documentation](https://docs.codeclimate.com/docs/configuring-test-coverage)
* add `CC_TEST_REPORTER_ID` to workflow as SECRETS ENV VARIABLE (for safety)
