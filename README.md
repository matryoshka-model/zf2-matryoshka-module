ZF2 Matryoshka [![Latest Stable Version](https://poser.pugx.org/matryoshka-model/zf2-matryoshka-module/v/stable.png)](https://packagist.org/packages/matryoshka-model/zf2-matryoshka-module)
=======================

ZF2 integration module for [Matryoshka library](https://github.com/matryoshka-model/matryoshka).

This repository contains a ZF2 module that registers default services and provides a set of useful controller plugins.


Installation
---

Using [composer](http://getcomposer.org/):

Add the following to your `composer.json` file:

    "require": {
        "php": ">=5.4",
        "matryoshka-model/zf2-matryoshka-module": "~0.1"
    }

Use
---

Before using this module you only need to configure Matroshka settings according your model, then you can use built-in plugins in your controllers.

Example:

```php

public function fooAction()
{
	$myModel  = $this->model()->get('MyModel'); //Retrive a model instance through the ModelManager
	$myObject = $this->object()->get('MyObject'); //Retrive an object instance through the ModelManager
}

```