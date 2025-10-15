<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';
    if ($user === 'admin' && $pass === 'hsnCTF{l0c4l_4uth0r1ty_12345678}') {
        echo '<h2>Welcome Admin!</h2>';
        echo '<strong>Flag:</strong> hsnCTF{l0c4l_4uth0r1ty_12345678}';
    } else {
        echo '<h2>Access Denied!</h2>';
    }
} else {
    header('Location: index.html');
    exit();
}
?>
