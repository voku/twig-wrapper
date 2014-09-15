[![Build Status](https://travis-ci.org/voku/twig-wrapper.png?branch=master)](https://travis-ci.org/voku/twig-wrapper)

# Twig Wrapper is a wrapper class for the Twig templating system.

http://www.twig-project.org/

## Installing via Composer (recommended)

#### 1. Install Composer in your project:

```php
curl -s http://getcomposer.org/installer | php
```  

#### 2. Create a composer.json file in your project root:

```js
{
    "require": {
        "voku/twig-wrapper": "dev-master"
    }
}
```

#### 3. Install via Composer

```bash
php composer.phar install
```

## Use:

```php
<?php
require_once 'vendor/autoload.php';

$twig = new \voku\twig\TwigWrapper('index.twig', array(__DIR__));
$twig->assign('name', 'data');
echo $twig->render();

?>
```


