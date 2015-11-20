Action blocks proof of concept
=============================

Code:
-----

```php
<?php

require_once  __DIR__ . '/vendor/autoload.php';

$addExecutor = new \Acme\Executor\AddExecutor();
$multiplyExecutor = new \Acme\Executor\MultiplyExecutor();
$inSequelExecutor = new \Acme\Executor\InSequalExecutor();

$executor = new \Acme\Executor();
$executor->addExecutor($addExecutor);
$executor->addExecutor($multiplyExecutor);
$executor->addExecutor($inSequelExecutor);

$actions = new \Acme\Action\InSequelAction(
    new \Acme\Action\AddAction(
        new \Acme\Action\AddAction(2, 2),
        new \Acme\Action\MultiplyAction(2, new \Acme\Action\AddAction(2, 2))
    ),
    new \Acme\Action\AddAction(
        new \Acme\Action\AddAction(3, 3),
        new \Acme\Action\MultiplyAction(3, new \Acme\Action\AddAction(3, 3))
    ),
    new \Acme\Action\AddAction(
        new \Acme\Action\AddAction(4, 4),
        new \Acme\Action\MultiplyAction(4, new \Acme\Action\AddAction(4, 4))
    )
);


var_dump($executor->execute($actions));
```

Result
------

```php
array(3) {
  [0] =>
  int(12)
  [1] =>
  int(24)
  [2] =>
  int(40)
}
```
