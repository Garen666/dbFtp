<?php

$ftp_server = "files.000webhost.com";
$ftp_user_name = "garen6666";
$ftp_user_pass = "123456789AA";

// установка соединения
$conn_id = ftp_connect($ftp_server);

// проверка имени пользователя и пароля
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
ftp_pasv($conn_id, true);
// загрузка файла
if (ftp_put($conn_id, "db.sql.zip", "T:/db.sql.zip", FTP_BINARY)) {
    echo "file успешно загружен на сервер\n";
} else {
    echo "Не удалось загрузить file на сервер\n";
}

// закрытие соединения
ftp_close($conn_id);