$hosts_file = '/etc/hosts';
$ip_address = '127.0.0.1';
$hostname = 'example.com';

$data = $ip_address . ' ' . $hostname;

// Append data to the end of the hosts file
file_put_contents($hosts_file, PHP_EOL . $data, FILE_APPEND);

echo 'Data has been written to the hosts file.';