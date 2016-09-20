# Kraken Framework Application Skeleton

[![Build Status](https://travis-ci.org/kraken-php/framework.svg)](https://travis-ci.org/kraken-php/framework)
[![Total Downloads](https://poser.pugx.org/kraken-php/kraken/downloads)](https://packagist.org/packages/kraken-php/kraken) 
[![Latest Stable Version](https://poser.pugx.org/kraken-php/framework/v/stable)](https://packagist.org/packages/kraken-php/framework) 
[![Latest Unstable Version](https://poser.pugx.org/kraken-php/framework/v/unstable)](https://packagist.org/packages/kraken-php/framework) 
[![License](https://poser.pugx.org/kraken-php/framework/license)](https://packagist.org/packages/kraken-php/framework)
[![Gitter](https://badges.gitter.im/kraken-php/framework.svg)](https://gitter.im/kraken-php/framework?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)

> **Note:** This repository contains pre-configured application skeleton for fast creation of new projects with [Kraken Framework](https://github.com/kraken-php/framework).

<br>
<p align="center">
<img src="https://avatars2.githubusercontent.com/u/15938282?v=3&s=150" />
</p>

## Description

Kraken is the first and only multi-processed, multi-threaded, fault-tolerant framework for PHP. It has been written to 
provide easy and reliable API for creating distributed applications using PHP. Kraken aims to solve typical problems of 
writing such applications and to provide developers with powerful yet elegant tools for dealing with them. 

The main focus of Kraken Framework is put on: 
* __Concurrency__ : create systems that are asynchronous and concurrent by design,
* __Distribution__ : divide your application into several containers and run them on multiple threads, processors or hosts,
* __Faul tolerance__ : write systems that self-heal using remote and local supervision hierarchies,
* __Elasticity__ : modify existing architecture in realtime without need to change in code,
* __High performance__ : handle up to thousands of connections per second on each container,
* __Extensibility__ : use available options to easily extend and adapt framework features for your needs.

Start writing applications that were previously marked as impossible or hard to implement in PHP right know. Servers, 
service-oriented architecture, agent-based models, games, complex daemons, socket programs, schedulers and much, much 
more - nothing is impossible with Kraken! 

For more information go to [framework repository](https://github.com/kraken-php/framework) or [official website](http://kraken-php.com).

## Requirements

* PHP-5.5, PHP-5.6 or PHP-7.0+,
* [Pthreads](http://php.net/manual/en/book.pthreads.php) extension enabled (only if you want to use threading),
* UNIX or ~~Windows~~ OS.

## Installation and Official Documentation

To install this application skeleton, please go to desired location to store project, then call composer:

```
composer create-project --prefer-dist kraken-php/kraken .
```

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
