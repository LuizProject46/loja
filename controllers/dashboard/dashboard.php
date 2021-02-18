<?php

if(!$_SESSION[email] && !$_SESSION[id] && !$_SESSION[name]){
    echo "<script>window.location.href='".$site[url]."'</script>";
}

$produtos = Products::getAll();
?>