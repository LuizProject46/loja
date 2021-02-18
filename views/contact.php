<style>
#success_page{
  background: #b5ffd0;
  padding: 13px;
  border-radius: 17px;
  color: #333;
  display: none;
     
}

#error_message{
  background: #ff3398;
    color: #ffff;
    font-weight: 600;
    padding: 20px;
    border-radius: 13px;
    display: none;
}
</style>

<script>
  window.site_url = "<?=$site[url]?>"
</script>
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Contato</h1>
              <ol class="breadcrumb">
                <li><a href="index.html">Página Inicial</a></li>
                <li class="active">Contato</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
      <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <div class="full">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="main_heading text_align_center">
                <h2>Entre em contato com a gente</h2>
              </div>
            </div>
            <div class="contact_information d-flex justify-content-arround">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                <div class="information_bottom text_align_center">
                  <div class="icon_bottom"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
                  <div class="info_cont">
                    <h4>(19) 3324-2720 / 3324-2729</h4>
                    <p> Telefone para contato</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                <div class="information_bottom text_align_center">
                  <div class="icon_bottom"> <a href=""><img width='40' height='40' src="<?=$site[url]?>/assets/images/whats.png" alt=""> </div></a>
                  <div class="info_cont">
                    <h4>(19) 98923-8400</h4>
                    <p> WhatsApp</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 adress_cont">
                <div class="information_bottom text_align_center">
                  <div class="icon_bottom"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
                  <div class="info_cont">
                    <h4>e2mrepresentacoes@gmail.com</h4>
                    <p>E-mail</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contant_form">
            
              <div id='success_page'></div>
           
              <div id="error_message"></div>
            
              <h2 class="text_align_center">Envie um E-mail</h2>
              <div class="form_section">
                <form class="form_contant" method="POST">
                  <fieldset>
                  <div class="row">
                    
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input required  class="field_custom" placeholder="Nome" name="name" type="text">
                    </div>
                    <div class="field col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <input required class="field_custom" placeholder="E-mail" name="email" type="email">
                    </div>
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <input required class="field_custom" placeholder="Telefone" name="phone" type="text">
                    </div>
                    <div class="field col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <textarea required class="field_custom" placeholder="Mensagem" name="msg"></textarea>
                    </div>
                    <div class="center"><button class="btn main_bt" type="submit">Enviar</button></div>
                  </div>
                  </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>