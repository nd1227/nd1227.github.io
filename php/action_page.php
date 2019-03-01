<?php
    $code = $_POST;
 ?>
<?php
    switch ($code) {
        case "12345":
            header("Location: https://www.google.com");
    }
    exit;
?>