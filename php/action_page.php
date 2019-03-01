<?php
    $code = $_POST;
 ?>
<?php
    switch ($code) {
        case "12345":
            header("Location: http://www.google.com");
    }
    exit;
?>