<?php
$hash=password_hash("12345", PASSWORD_DEFAULT);
echo $hash;
if (password_verify('12345', $hash)) {
    echo '\nPassword is valid!';
} else {
    echo 'Invalid password.';
}
?>