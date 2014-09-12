ZF2 module for matryoshka [![Latest Stable Version](https://poser.pugx.org/matryoshka-model/zf2-matryoshka-module/v/stable.png)](https://packagist.org/packages/matryoshka-model/zf2-matryoshka-module)
=========================

| Master  | Develop |
|:-------------:|:-------------:|
| [![Build Status](https://secure.travis-ci.org/matryoshka-model/zf2-matryoshka-module.svg?branch=master)](https://travis-ci.org/matryoshka-model/zf2-matryoshka-module)  | [![Build Status](https://secure.travis-ci.org/matryoshka-model/zf2-matryoshka-module.svg?branch=develop)](https://travis-ci.org/matryoshka-model/zf2-matryoshka-module)  |
| [![Coverage Status](https://coveralls.io/repos/matryoshka-model/zf2-matryoshka-module/badge.png?branch=master)](https://coveralls.io/r/matryoshka-model/zf2-matryoshka-module)  | [![Coverage Status](https://coveralls.io/repos/matryoshka-model/zf2-matryoshka-module/badge.png?branch=develop)](https://coveralls.io/r/matryoshka-model/zf2-matryoshka-module)  |


ZF2 integration module for [Matryoshka library](https://github.com/matryoshka-model/matryoshka).

This repository contains a ZF2 module that registers **default services** and provides **a set of useful controller plugins**.

Installation
---

Using [composer](http://getcomposer.org/):

Add the following to your `composer.json` file:

```json
"require": {
    "php": ">=5.4",
    "matryoshka-model/zf2-matryoshka-module": "~0.3"
}
```

Use
---

Before using this module you only need to configure Matryoshka settings according to your model.

Then you can use built-in plugins in your controllers.

Example:

```php
public function fooAction()
{
	$myModel  = $this->model()->get('MyModel'); // Retrieve a model instance through the ModelManager
	$myObject = $this->object()->get('MyObject'); // Retrieve an object instance through the ModelManager
}
```
