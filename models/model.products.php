<?
class Products {


    public static function new($name, $desc, $price, $image){
        $db = Db::connect();
        
        try{
            $db->exec("INSERT INTO produtos(name,description,price,image) VALUES(
                '".addslashes($name)."',
                '".addslashes($desc)."',
                '".addslashes($price)."',
                '".addslashes($image)."'
            )");

            return [
                "error" => false,
                "message" => "Sucesso!"
            ];
        }catch(Exception $e ){
           
            return [
                "error" => true,
                "message" => "Erro ao cadastrar produto"
            ];
        }

        
    }
    public static function edit($name, $desc, $price,$id,$image = null){
        $db = Db::connect();
        
        try{
            $res = $db->query("SELECT image FROM produtos WHERE id='$id'");
            $res = $res->fetch(PDO::FETCH_ASSOC);
            
            $current_image = $image == null ? $res[image] : $image;
            
           
            
            $db->exec("UPDATE  produtos SET name = '".addslashes($name)."',description = '".addslashes($desc)."',price = '".addslashes($price)."',image = '".addslashes($current_image)."' WHERE id='$id'");

            return [
                "error" => false,
                "message" => "Sucesso!"
            ];
        }catch(Exception $e ){
            
            return [
                "error" => true,
                "message" => "Erro ao editar produto"
            ];
        }

        
    }

    public static function getAll(){

        $db = Db::connect();

        try{

           $res =  $db->query("SELECT * FROM produtos");
           $res = $res->fetchAll(PDO::FETCH_ASSOC);

           return $res;

        }catch(Exception $e ){
            echo "Erro " . $e;
        }
    }

    public static function getDesc($id){

        $db = Db::connect();

        try{

           $res =  $db->query("SELECT description FROM produtos WHERE id='$id'");
           $res = $res->fetchAll(PDO::FETCH_ASSOC);

           return $res;

        }catch(Exception $e ){
            $res = false;
        }

        return $res;
    }

    public static function getOne($id){

        $db = Db::connect();

        try{

           $res =  $db->query("SELECT * FROM produtos WHERE id='$id'");
           $res = $res->fetch(PDO::FETCH_ASSOC);

           return $res;

        }catch(Exception $e ){
            $res = false;
        }

        return $res;
    }

    public static function del($id,$image){

        $db = Db::connect();

        try{

            $db->exec("DELETE FROM  produtos WHERE id='$id'");
            unlink('../uploads/'.$image);

           $res = 1;

        }catch(Exception $e ){
           
            $res = 0;
        }

        return $res;
    }
}


?>