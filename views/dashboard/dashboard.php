<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Dashboard</title>
    <style>
       
        .btn_add{
            padding: 10px;
            border: none;
            border-radius: 10px;
            background: #68acf3;
            color: #fff;
            cursor: pointer
        }
        .btn_del{
            padding: 10px;
            border: none;
            border-radius: 10px;
            background: #f31e74;
            color: #fff;
            cursor: pointer
        }
        .btn_logout{
            cursor: pointer;
            color:#ff0ba9;
        }

        .label__name{
            font-size: 23px;
            font-weight: bold;
            color: #545353;
            margin-right: 20px;
        }
        
    body {
        background: #f5f5f5;
       
    }
    h1,h2,h3,th{
        color:#5f5f5f;
    }

    td{
        color : #333;
    }
    .card{
    border: none;
    border-radius: 9px;
    box-shadow: 1px 2px 8px #0000001c;
}
    

    </style>
</head>
<body>

    <div class="container">
        <h3 class="mt-3">Sistema Admin - Versão 1.0</h3>
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="col-md-12 d-flex align-items-center justify-content-between">
                            <a class="btn text-info btn-primary-outline" href="/produtos/novo"> <i class="fa fa-plus"></i> Adicionar Produto</a>
                            <div>  
                                <label class="label__name">Seja bem-vindo, <?=$_SESSION[name]?>!</label>
                                <a  href="/logout" class="btn_logout"> <i class="fa fa-sign-out"></i> Sair</a>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body ">
                    <div style="display:none;"class="msg-del"></div>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Preço R$</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?foreach($produtos as $p):?>
                                <tr>
                                    <td><?=$p[id]?></td>
                                    <td><?=$p[name]?></td>
                                    
                                    <td><?=number_format($p[price],2,',','.')?></td>
                                    <td><img width="40" height="40" src="<?=$site[url]?>uploads/<?=$p[image]?>" alt=""></td>
                                    <td>
                                        <a  class="btn btn-info" href="/produtos/editar/<?=$p[id]?>"><i class="fa fa-pencil"></i> Editar</a>
                                        <a  class="btn btn-danger text-light btn_del" data-i="<?=$p[image]?>" data="<?=$p[id]?>"> <i class="fa fa-trash"></i> Excluir</a>
                                        <button type="button" class="btn btn-primary btn_desc" data-prod="<?=$p[id]?>"data-toggle="modal" data-target="#exampleModal">
                                            Ver descrição
                                        </button>
                                    </td>
                                    
                                    
                                </tr>
                                 
                            <?endforeach;?>
                            <td>
                            <td>
                            
                            
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Descrição do produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="<?=$site[url]?>/assets/js/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.btn_desc').on('click',function(){
            
            let id = $(this).attr('data-prod')
            let image = $(this).attr('data-i')

            $.ajax({
                url: "<?=$site[url]?>api",
                method: 'POST',
                dataType: 'json',
                data: {type:'prod_desc',id:id,image:image},
                beforeSend: function (){
                        $(".modal-body").html('<h1 class="text-center"><i class="fa fa-spin fa-spinner"></i></h1>')
                },
                success: function (data){
                    
                    
                    $(".modal-body").html(`<p>${data[0].description}<p>`)
                    
                }
            })
        })
        $('.btn_del').on('click',function(){
            
            let id = $(this).attr('data')
            let res = confirm("Deseja Mesmo deletar esse produto?")
            
            if(res){
                $.ajax({
                url: "<?=$site[url]?>api",
                method: 'POST',
                dataType: 'json',
                data: {type:'prod_del',id:id},
                
                success: function (data){
                    if(data == 1){

                        $(".msg-del").html("<div class='alert alert-success'>Sucesso! Produto deletado</div>")
                        $(".msg-del").fadeIn()
                       window.location.href = ''
                    }else{
                        $(".msg-del").html("<div class='alert alert-danger'>Ops! erro ao deletar produto</div>")
                        $(".msg-del").fadeIn()
                        setTimeout(() => {
                            $(".msg-del").fadeOut()
                            $(".msg-del").html()
                        }, 10000);

                    }
                    
                   
                    
                }
            })
            }
            
        })
    })

</script>
</body>
</html>