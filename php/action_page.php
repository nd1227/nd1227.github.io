<?php
    switch $_GET['code']:
    {
        case '12345':
            header('Location: facebook.com');
        break;
         ....

         case 'logout': logout(); break;
         ...

    }
 ?>