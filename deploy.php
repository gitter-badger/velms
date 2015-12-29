<?php

if ( $_POST['payload'] ) {
    shell_exec("envoy run deploy");
}

?>
