<?php

if(!$_SESSION[email] && !$_SESSION[id] && !$_SESSION[name]){
    echo "<script>window.location.href='".$site[url]."'</script>";
}

if($_POST && $_FILES){

    $name = $_POST[name];

    $price = $_POST[price];
    $price = str_replace("R$","",$price);
    $price = str_replace(",","",$price);
    $price = str_replace(".","",$price);
    $price = floatval($price);
    
    $desc = $_POST[description];
    $target_dir = "uploads/";
    $image_src = $target_file . time() .'-' . $_FILES[image][name];
    $target_file = $target_dir .  time() .'-' .basename($_FILES[image][name] ) ;
    $uploadOk = 1;
    $type = $_FILES[image][type];
    $check = getimagesize($_FILES[image]["tmp_name"]);

    if($check !== false && $type == 'image/png' || $type == 'image/jpg' || $type == 'image/jpeg') {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
           $return =  Products::new($name,$desc,$price,$image_src);
           if($return[error]){
             
            $msg ='<div class="alert alert-danger ">Ops! Houve um problema ao cadastrar</div>'; 
           }else{
            $msg ='<div class="alert alert-success">Sucesso! Produto cadastrado</div>';
            ?>
                <script>
                    setTimeout(() => {
                        window.location.href = "/dashboard"
                    },2000 )
                </script>  
                <?
           
           }
        }else{
            
            $msg ='<div class="alert alert-danger ">Ops! Erro ao submeter imagem</div>'; 
            
        }
        $uploadOk = 1;
    } else {
        
        $msg ='<div class="alert alert-danger ">Ops! O arquivo insrido não é uma imagem</div>'; 
        
        $uploadOk = 2;
        
    }
    
    

}

?>