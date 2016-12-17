## Alibris

## Introduction

Zend Framework module with API client to access Alibris API

## Installation
Install the module using Composer into your application's vendor directory. Add the following line to your
`composer.json`.

```json
{
    "require": {
        "firelike/alibris": "^1.*"
    }
}
```
## Configuration

Enable the module in your `application.config.php` file.

```php
return array(
    'modules' => array(
        'Firelike\Alibris'
    )
);
```

Copy and paste the `alibris.local.php.dist` file to your `config/autoload` folder and customize it with your credentials and
other configuration settings. Make sure to remove `.dist` from your file.Your `alibris.local.php` might look something like the following:

```php
<?php
return [
    'alibris_service' => [
        'service_url' => 'http://api.alibris.com/v1/public/',
        'api_key' => '<your-api-key>'
    ]
];
```


## Usage

```php
        use Firelike\Alibris\Service\AlibrisService;
        
        $service = new AlibrisService();
        
        $params = [ 
            'wquery' => 'grisham' 
        ];
        $records = $service->search($params);
        
        var_dump($records);
        
        $params = [
            'query' => 'train' 
        ];
        $records= $service->itemSearch($params);

        $params = [
            'work' => 'connelly' 
        ];
        $records= $service->recommend($params);
        
        
        $params = [
            'work' => 'king' 
        ];
        $records= $service->review($params);
        

```

## Implemented Service Methods:

* **search**
* **itemSearch**
* **recommend**
* **review**

## Links

* [Zend Framework website](http://framework.zend.com)
* [Arin WHOIS RWS](http://whois.arin.net/ui)