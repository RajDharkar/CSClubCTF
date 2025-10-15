<?php
if (isset($_GET['page']) && $_GET['page'] === 'flag') {
    include 'flag.php';
} else {
    echo '<h1>Welcome!</h1>';
    echo '<p>Include the right page to find the secret.</p>';
}
?>
