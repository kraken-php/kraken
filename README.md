# Kraken Framework Application Skeleton

[![Build Status](https://travis-ci.org/kraken-php/framework.svg)](https://travis-ci.org/kraken-php/framework)
[![Total Downloads](https://poser.pugx.org/kraken-php/kraken/downloads)](https://packagist.org/packages/kraken-php/kraken) 
[![Latest Stable Version](https://poser.pugx.org/kraken-php/framework/v/stable)](https://packagist.org/packages/kraken-php/framework) 
[![Latest Unstable Version](https://poser.pugx.org/kraken-php/framework/v/unstable)](https://packagist.org/packages/kraken-php/framework) 
[![License](https://poser.pugx.org/kraken-php/framework/license)](https://packagist.org/packages/kraken-php/framework)
[![Gitter](https://badges.gitter.im/kraken-php/framework.svg)](https://gitter.im/kraken-php/framework?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)
[![@kraken_php on Twitter](https://img.shields.io/badge/twitter-%40kraken__php-blue.svg)](https://twitter.com/kraken_php)

> **Note:** This repository contains pre-configured application skeleton for fast creation of new projects with [Kraken Framework](https://github.com/kraken-php/framework).

<br>
<p align="center">
<img src="https://avatars2.githubusercontent.com/u/15938282?v=3&s=150" />
</p>

## Description

This repository is pre-configured, clean and empty skeleton for creating a new projects using [Kraken Framework](https://github.com/kraken-php/framework).

For more information go to [framework repository](https://github.com/kraken-php/framework) or [official website](http://kraken-php.com).

## You Might Also Be Interested In

To help you getting into working with Kraken, the official repository contains additional demo applications, that you might
be interested in checking out:

- [Distributed Chat App](https://github.com/kraken-php/demo-chat) - this application implements simple, real-time chat in PHP using HTTP and WebSockets.

## Requirements

* PHP-5.5, PHP-5.6 or PHP-7.0+,
* [Pthreads](http://php.net/manual/en/book.pthreads.php) extension enabled (only if you want to use threading),
* UNIX or ~~Windows~~ OS.

## Installation and Official Documentation

To install this application skeleton, please go to desired location to store project, then call composer:

```
composer create-project --prefer-dist kraken-php/kraken .
```

## Starting The Project

### Basic Start

To start project, first run `kraken.server` instance.

    $> kraken.server

Then, check if connection is working in another terminal window:

    $> kraken server:ping

If everything works correctly, as final step, run the application using:

    $> kraken project:create

To close the project, use:

    $> kraken project:destroy

### Alternative Start

While developing your application it might be useful for you to start containers alternatively, one by one. To do that, 
without console support, use:

    $> php ./data/autorun/kraken.process undefined Main Main

**WARNING** This script is only useful for running your containers for debug purpose. Your application should never call
them, but instead use proper built-in commands!

## Documentation

Documentation for the framework can be found in the [official documentation][2] page.

## Contributing

This library is pre-configured project application for Kraken Framework. To make contributions, please go to [framework repository][3].

## License

Kraken Framework is open-sourced software licensed under the [MIT license][6]. The documentation is provided under [FDL-1.3 license][7].

[1]: http://kraken-php.com
[2]: http://kraken-php.com/docs
[3]: http://kraken-php.com/getting_started
[4]: http://kraken-php.com/faq
[5]: http://kraken-php.com/docs/contributions
[6]: http://opensource.org/licenses/MIT
[7]: https://www.gnu.org/licenses/fdl-1.3.en.html
[8]: https://groups.google.com/forum/#!forum/kraken-php
