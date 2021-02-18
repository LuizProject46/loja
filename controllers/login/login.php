<?php
if($_SESSION[email] && $_SESSION[id] && $_SESSION[name]){
    echo "<script>window.location.href='".$site[url]."dashboard'</script>";
}

if($_POST[email] !== null && $_POST[pass]!== null){
    
    $res = Login::signin($_POST[email],$_POST[pass]);

    if($res){
        echo "<script>window.location.href='".$site[url]."dashboard'</script>";
    }
}



?>