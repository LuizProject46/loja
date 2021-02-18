<!-- bootstrap css -->
<link rel="stylesheet" href="<?=$site[url]?>../assets/css/bootstrap.min.css" />
    <!-- Site css -->
    <link rel="stylesheet" href="<?=$site[url]?>/assets/css/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="<?=$site[url]?>/assets/css/responsive.css" />
    <!-- colors css -->
    <link rel="stylesheet" href="<?=$site[url]?>/assets/css/colors1.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="<?=$site[url]?>/assets/css/custom.css" />
    <!-- wow Animation css -->
    <link rel="stylesheet" href="<?=$site[url]?>/assets/css/animate.css" />
<style>
    body{
        background: #f5f5f5;
    }
    .btn_add{
            margin-top: 20px;
            padding: 10px;
            border: none;
            border-radius: 10px;
            background: #68acf3;
            color: #fff;
            cursor: pointer
        }
       
        .upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn_image {
     border: 1px solid gray;
    color: #fff;
    background-color: #d64473;
    padding: 8px 20px;
    border-radius: 8px;
    /* font-size: 20px; */
    font-weight: bold;
    
}
input[type=file]:hover{
    cursor:pointer;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
.card{
    border: none;
    border-radius: 9px;
    box-shadow: 1px 2px 8px #0000001c;
}
.btn_back{
    font-size: 16px;
    font-weight: 600;
    color: #5e2ad8;
}
</style>
<div class="container   ">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                <a class="btn_back" href="/dashboard"><i class="fa fa-arrow-left"></i>  Voltar</a>
                
                <h1 class="card-title mt-5">Novo Produto</h1>
                <?=$msg?>
                <form enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Titulo</label>
                        <input required type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Preço</label>
                        <input required type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Descrição</label>
                        <textarea name="description" required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="upload-btn-wrapper">
                            <button class="btn_image"><i class="fa fa-upload"></i> Escolher imagem</button>
                            <input required id="imgInp" type="file" name="image" />
                            <br/>
                            <br/>
                            <img style="display:none;" id="blah" src="#" alt="image" width="120" height="120" />
                        </div>
                    </div>
                    
                    <input type="submit" class=" btn btn-info col-md-12" value="Cadastrar"/>
                </form>
                
                </div>
            
            </div>
        
        </div>
    
    </div>

</div>

<script src="<?=$site[url]?>/assets/js/jquery.min.js"></script>
<script src="<?=$site[url]?>/assets/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js" integrity="sha512-sR3EKGp4SG8zs7B0MEUxDeq8rw9wsuGVYNfbbO/GLCJ59LBE4baEfQBVsP2Y/h2n8M19YV1mujFANO1yA3ko7Q==" crossorigin="anonymous"></script>
<!-- menu js -->
<script src="<?=$site[url]?>/assets/js/menumaker.js"></script>
<!-- wow animation -->
<script src="<?=$site[url]?>/assets/js/wow.js"></script>
<!-- custom js -->
<script>
$(document).ready(function(){

    
    $('input[name=price]').inputmask('decimal', {
        'alias': 'numeric',
        'groupSeparator': ',',
        'autoGroup': true,
        'digits': 2,
        'radixPoint': ".",
        'digitsOptional': true,
        'allowMinus': false,
        'prefix': 'R$ ',
        'placeholder': '0,00',
        'rightAlign': false
    });
    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
        
      $('#blah').attr('src', e.target.result);
      $('#blah').show()
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgInp").change(function() {
  readURL(this);
});


})


</script>