<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['submit_registro'])) {
        echo "Se enviaron por GET";
    } else {
        echo "Se enviaron por GET, pero no se especificó el formulario.";
    }
} else {
    echo "Se enviaron por POST";
}
?>
