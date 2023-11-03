<?php
$env = file_get_contents('.env');
$env = explode("\n", $env);

$envVars = [];
foreach ($env as $line) {
    $line = trim($line);
    if ($line !== '' && $line[0] !== '#') {
        $parts = explode('=', $line, 2);
        if (count($parts) === 2) {
            list($key, $value) = $parts;
            $envVars[$key] = $value;
        } else {
            // Xử lý khi dòng không hợp lệ
            echo "Dòng không hợp lệ: $line\n";
        }
    }
}

/* DATABASE */
define('HACKER', 'Lỗi không thể truy cập đường dẫn này !');
define('ADMIN', 'admin');
$connect = new mysqli($envVars['DB_HOST'], $envVars['DB_USER'], $envVars['DB_PASSWORD'], $envVars['DB_DB']);
if ($connect->connect_error) {
    die("Không thể kết nối");
    exit();
}