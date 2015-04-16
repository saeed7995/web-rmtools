<?php
namespace rmtools;

$required_exts = array(
	'openssl',
	'curl',
	'sqlite3',
	'simplexml',
	'dom',
	'json',
	'mbstring',
	'zlib',
);
foreach ($required_exts as $ext) {
	if (!extension_loaded($ext)) {
		die("'$ext' extension is not loaded but required, full rquired extensions list: " . implode(", ", $required_exts));
	}
}

$rmtools_base = getenv('RMTOOLS_BASE_DIR');

if (!$rmtools_base) {
	$rmtools_base = '/home/web/rmtools.php.net';
}

define('TMP_DIR', $rmtools_base . '/tmp');
$custom_env = array(
'PATH' => "C:\\Program Files (x86)\\Microsoft Visual Studio 9.0\\VC\\Bin;C:\\Program Files (x86)\\Microsoft Visual Studio 9.0\\VC\\vcpackages;C:\\Program Files (x86)\\Microsoft Visual Studio 9.0\\Common7\\IDE;C:\\Program Files\\Microsoft SDKs\\Windows\\v6.1\\Bin\\x64;C:\\Program Files\\Microsoft SDKs\\Windows\\v6.1\\Bin;C:\\Windows\\Microsoft.NET\\Framework\\v3.5;C:\\Windows\\Microsoft.NET\\Framework\\v2.0.50727;C:\\Program Files (x86)\\NVIDIA Corporation\\PhysX\\Common;C:\\Program Files\\Common Files\\Microsoft Shared\\Windows Live;C:\\Program Files (x86)\\Common Files\\Microsoft Shared\\Windows Live;C:\\Windows\\system32;C:\\Windows;C:\\Windows\\System32\\Wbem;C:\\Windows\\System32\\WindowsPowerShell\\v1.0\\;;C:\apps\slicksvn\bin;c:\\php-sdk\\bin\\;",
'INCLUDE' => "C:\\Program Files (x86)\\Microsoft Visual Studio 9.0\\VC\\Include;C:\\Program Files\\Microsoft SDKs\\Windows\\v6.1\\Include;C:\\Program Files\\Microsoft SDKs\\Windows\\v6.1\\Include\\gl;C:\\Program Files (x86)\\Microsoft Visual Studio 9.0\\VC\\ATLMFC\\INCLUDE;",
'LIB' => "C:\\Program Files (x86)\\Microsoft Visual Studio 9.0\\VC\\Lib;C:\\Program Files\\Microsoft SDKs\\Windows\\v6.1\\Lib;C:\\Program Files (x86)\\Microsoft Visual Studio 9.0\\VC\\ATLMFC\\LIB;",
'BISON_SIMPLE' => 'c:\\php-sdk\\bin\\bison.simple'
	);

