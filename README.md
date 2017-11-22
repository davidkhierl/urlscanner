# URL Scanner
Scans URLs and return unresponsive link - This is an updated urlscanner base from the depreciated book of [Modern PHP](http://shop.oreilly.com/product/0636920033868.do)

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
Scanning CSV
```php
use Webartisan\Url\Scanner;
use League\Csv\Reader;

$urls = [];

$csv = Reader::createFromPath($argv[1]);

foreach ($csv as $url) {
    array_push($urls, $url[0]);
}

$scanner = new Scanner($urls);

$result = $scanner->getInvalidUrls();

if (!empty($result)) {
    print_r($scanner->getInvalidUrls());
}
else {
    print("All url is working" . PHP_EOL);
}
```
Testing
------
No testing yet.

Contributing
------
See [CONTRIBUTING.md](/CONTRIBUTING.md)

Credits
------
- [Josh Lockhart](https://github.com/codeguy)
- [All Contributors](https://github.com/modernphp/scanner/contributors)

License
------
The MIT License (MIT). Please see [License File](/LICENSE) for more information.
