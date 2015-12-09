#Chullo 

Chullo is a PHP client for Fedora 4 built using Guzzle and EasyRdf.

[![Latest Stable Version](https://img.shields.io/packagist/v/Islandora/chullo.svg?style=flat-square)](https://packagist.org/packages/islandora/chullo)
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%205.5-8892BF.svg?style=flat-square)](https://php.net/)
[![Build Status](https://travis-ci.org/Islandora-CLAW/chullo.svg?branch=master)](https://travis-ci.org/Islandora-CLAW/chullo)

## Requirements

* PHP 5.5+
* [Composer](https://getcomposer.org/)

## Installation

1. `git clone git@github.com:Islandora-CLAW/chullo.git`
2. `cd chullo`
3. `php composer.phar install`

You can also install with composer by pointing to your local clone. Just add these relevant bits to your `composer.json`:

```
{
    "repositories": [
        {
            "type": "vcs",
            "url": "/path/to/chullo"
        }
    ],
    "require": {
        "islandora/chullo": "dev-master"
    }
}
```

Then just `php composer.phar install` as usual.

##Usage

The included `docker-compose.yml` file can be used to quickly bring up Fedora and Blazegraph instances: `docker-compose up`. It requires [Docker](#) and [Docker Compose](#).

###Fedora

See `examples/fedora.php` for an example of using Chullo with Fedora.

### Triplestore

See `examples/triplestore.php` for an example of using Chullo with a Triplestore.

## Maintainers/Sponsors

Current maintainers:

* [Daniel Lamb](https://github.com/daniel-dgi)
* [Nick Ruest](https://github.com/ruebot)

## Development

If you would like to contribute to this module, please check out [CONTRIBUTING.md](CONTRIBUTING.md).
