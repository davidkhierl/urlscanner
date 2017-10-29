#URL Scanner
Scans URLs and return unresponsive link - This is an exercise from the book of [Modern PHP](http://shop.oreilly.com/product/0636920033868.do)

Install
------
Via [Composer](https://getcomposer.org/)
```
composer require webartiasn/urlscanner
```

Usage
------
```php
use Webartisan\Url\Scanner;

$url = [
    "https://davidkhierl.com",
    "http://php.net",
    "http://asdwasd.com"
];

$scanner = new Scanner($url);

print_r($scanner->getInvalidUrls());
```

Testing
------
No testing yet.

Contributing
------
See [CONTRIBUTING.md](../blob/master/CONTRIBUTING.md)

Credits
------
- [Josh Lockhart](https://github.com/codeguy)
- [All Contributors](https://github.com/modernphp/scanner/contributors)

License
------
The MIT License (MIT). Please see [License File](../blob/master/LICENSE) for more information.
