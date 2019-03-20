# Observer

A simple observer of service availability. 

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites

In order to use this script you need have to acces to:

```
Web Server
PHP 7
```

### Installing

Copy two files to your server with running php parser. The index.php should be placed in a public directory. One directory above you should place observer.php

## Configuration

Configuration is very simple. All you have to do is add server, port and description for monitoring service in observer.php. See the $data array:

```php
$data = [
	['ip' => '195.144.107.198', 'port' => 990, 'name' => 'Rebex FTP/SSL Server'],
	['ip' => '195.144.107.198', 'port' => 22, 'name' => 'Rebex SSH Server'],
	['ip' => '195.144.107.198', 'port' => 37, 'name' => 'Rebex TIME Server'],
	['ip' => '208.67.222.222', 'port' => 53, 'name' => 'OpenDNS Server'],
	['ip' => '1.1.1.1', 'port' => 53, 'name' => 'Cloudflare DNS Server'],
	['ip' => '192.124.249.9', 'port' => 443, 'name' => 'LinuxMint Web Server'],
];
```

Just fill IP address of service, port and name (short description). In the repository I have added 6 examples of servers with various services (DNS, WEB, FTP etc.). Just change above lines or add your own.

Then open web browser and visit index.php and see which services are online and offline:

![ObserverScreenshot](https://github.com/texe/observer/blob/master/ObserverScreenshot.png)

## Authors

* **Chris Texe** - *Initial work* - [Texe](https://github.com/texe)

## License

This project is licensed under the MIT License.

