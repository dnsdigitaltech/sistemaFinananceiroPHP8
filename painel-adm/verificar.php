<?php
    @session_start();
    if(@$_SESSION['nivelUsuaro'] != 'Administrador'){
        echo "<script language='javascript'> 
                window.location='../'
            </script>";
    }
?>  