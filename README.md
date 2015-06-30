<p><img align="right" src="https://github.com/matryoshka-model/matryoshka/blob/master/docs/assets/images/matryoshka_logo_hi_res_512.png" width="64px" height="64px"/></p>
<p></p>
ZF2 module for Matryoshka
-------------------------

[![Latest Stable Version](https://img.shields.io/packagist/v/matryoshka-model/zf2-matryoshka-module.svg?style=flat-square)](https://packagist.org/packages/matryoshka-model/zf2-matryoshka-module) [![Build Status](https://img.shields.io/travis/matryoshka-model/zf2-matryoshka-module/master.svg?style=flat-square)](https://travis-ci.org/matryoshka-model/zf2-matryoshka-module) [![Coverage Status](https://img.shields.io/coveralls/matryoshka-model/zf2-matryoshka-module/master.svg?style=flat-square)](https://coveralls.io/repos/matryoshka-model/zf2-matryoshka-module/badge.png?branch=master) [![Matryoshka Model's Slack](http://matryoshka-slackin.herokuapp.com/badge.svg?style=flat-square)](http://matryoshka-slackin.herokuapp.com)

> ZF2 integration module for [Matryoshka](https://github.com/matryoshka-model/matryoshka).

This repository contains a ZF2 module that registers **default services** and provides **a set of useful controller plugins**.

#### Community

For questions and support please visit the [slack channel](http://matryoshka-slackin.herokuapp.com).

Installation
---

Using [composer](http://getcomposer.org/):

Add the following to your `composer.json` file:

```json
"require": {
    "matryoshka-model/zf2-matryoshka-module": "~0.7.0"
}
```

Finally, add the module name to your project's `config/application.config.php` under the `modules`
key:


```php
return [
    /* ... */
    'modules' => [
        /* ... */
        'Matryoshka',
    ],
    /* ... */
];
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

[![Analytics](https://ga-beacon.appspot.com/UA-49657176-2/zf2-matryoshka-module?flat)](https://github.com/igrigorik/ga-beacon)
