[![Build Status](https://travis-ci.org/rodrigodiez/mockable-predis.svg?branch=master)](https://travis-ci.org/rodrigodiez/mockable-predis)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/e06994d2-d371-404d-90d0-022b2dd7be03/mini.png)](https://insight.sensiolabs.com/projects/e06994d2-d371-404d-90d0-022b2dd7be03)

# Mockable Predis
This project allows developers to use [PhpSpec/Prophecy](http://phpspec.readthedocs.org/en/latest/) to TDD projects that use [Predis](https://github.com/nrk/predis) by allowing mocks of the Client to be created.

# Installation

```
composer require rodrigodiez/mockable-predis
```

# Use
Just use `RodrigoDiez\MockablePredis\Client` class in your code instead of `Predis\Client`

## Why is this needed?
[Predis](https://github.com/nrk/predis) makes intensive use of *magic call* methods in its `Client` class making it impossible for some mocking frameworks to guess its interface and create mocks.

One common workaround when using *magic call* methods within a class is to document them using `@method` annotations as described [here](http://manual.phpdoc.org/HTMLSmartyConverter/PHP/phpDocumentor/tutorial_tags.method.pkg.html)

[Predis](https://github.com/nrk/predis) maintainers decided to document these methods in the `ClientInterface` instead of doing it in the `Client` class itself as recommended by *phpdoc* documentation. On the other hand, [Prophecy](https://github.com/phpspec/prophecy) maintainers refuse to read `@method` annotations from interfaces.

Full history and both sides arguments can be found [here](https://github.com/nrk/predis/pull/213) and [here](https://github.com/phpspec/prophecy/pull/126).
