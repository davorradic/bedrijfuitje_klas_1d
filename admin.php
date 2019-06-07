<?php
if(isset($_SESSION) && $_SESSION['gebruikersnaam'] == 'admin'){
    echo 'welcome admin';
} else {
    header('Location: index.php?page=admin_login');
}
?>