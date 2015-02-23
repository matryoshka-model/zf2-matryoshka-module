ZF2 module for matryoshka 
=========================

[![Latest Stable Version](https://img.shields.io/packagist/v/matryoshka-model/zf2-matryoshka-module.svg?style=flat-square)](https://packagist.org/packages/matryoshka-model/zf2-matryoshka-module)

| Master  | Develop |
|:-------------:|:-------------:|
| [![Build Status](https://img.shields.io/travis/matryoshka-model/zf2-matryoshka-module/master.svg?style=flat-square)](https://travis-ci.org/matryoshka-model/zf2-matryoshka-module) | [![Build Status](https://img.shields.io/travis/matryoshka-model/zf2-matryoshka-module/develop.svg?style=flat-square)](https://travis-ci.org/matryoshka-model/zf2-matryoshka-module) |
| [![Coverage Status](https://img.shields.io/coveralls/matryoshka-model/zf2-matryoshka-module/master.svg?style=flat-square)](https://coveralls.io/repos/matryoshka-model/zf2-matryoshka-module/badge.png?branch=master) | [![Coverage Status](https://img.shields.io/coveralls/matryoshka-model/zf2-matryoshka-module/develop.svg?style=flat-square)](https://coveralls.io/repos/matryoshka-model/zf2-matryoshka-module/badge.png?branch=develop) |


ZF2 integration module for [Matryoshka library](https://github.com/matryoshka-model/matryoshka).

This repository contains a ZF2 module that registers **default services** and provides **a set of useful controller plugins**.

Installation
---

Using [composer](http://getcomposer.org/):

Add the following to your `composer.json` file:

```json
"require": {
    "php": ">=5.4",
    "matryoshka-model/zf2-matryoshka-module": "~0.6.0"
}
```

Finally, add the module name to your project's `config/application.config.php` under the `modules`
key:


```php
return array(
    /* ... */
    'modules' => array(
        /* ... */
        'Matryoshka',
    ),
    /* ... */
);
```

How-to
------

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

---

[![Analytics](https://ga-beacon.appspot.com/UA-49655829-1/matryoshka-model/zf2-matryoshka-module)](https://github.com/igrigorik/ga-beacon)
