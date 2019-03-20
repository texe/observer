
<?php

function testConn($ip, $port, $timeout) {
$connection = @fSockOpen($ip, $port, $errno, $errstr, $timeout);
if ($connection)
	{
	return '<div class="bg-success text-white text-center">ONLINE</div>';
	} else
		{
		return '<div class="bg-danger text-white text-center">OFFLINE</div>';
		//return '<p class="text-danger"><strong>OFFLINE! </strong></p>' . $errno . ' ' . $errstr;
		}
	}

// set time in seconds for waiting for response
$timeout=5;

$data = [
	['ip' => '195.144.107.198', 'port' => 990, 'name' => 'Rebex FTP/SSL Server'],
	['ip' => '195.144.107.198', 'port' => 22, 'name' => 'Rebex SSH Server'],
	['ip' => '195.144.107.198', 'port' => 37, 'name' => 'Rebex TIME Server'],
	['ip' => '208.67.222.222', 'port' => 53, 'name' => 'OpenDNS Server'],
	['ip' => '1.1.1.1', 'port' => 53, 'name' => 'Cloudflare DNS Server'],
	['ip' => '192.124.249.9', 'port' => 443, 'name' => 'LinuxMint Web Server'],
];
?>
