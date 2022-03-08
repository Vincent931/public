<?php
require('./controllers/controller.php');

if (isset($_GET['action'])) {
     
    if ($_GET['action'] == 'connect') {
         
        formConnect();
    }
} else {
    echo 'erreur de connexion';
}