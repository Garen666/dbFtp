<?php

$ftp_server = "files.000webhost.com";
$ftp_user_name = "garen6666";
$ftp_user_pass = "123456789AA";

// ��������� ����������
$conn_id = ftp_connect($ftp_server);

// �������� ����� ������������ � ������
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
ftp_pasv($conn_id, true);
// �������� �����
if (ftp_put($conn_id, "db.sql.zip", "T:/db.sql.zip", FTP_BINARY)) {
    echo "file ������� �������� �� ������\n";
} else {
    echo "�� ������� ��������� file �� ������\n";
}

// �������� ����������
ftp_close($conn_id);