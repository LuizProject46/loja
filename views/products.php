<style>
  .card__prod:hover{
    transition: 0.7s;
    transform: scale(1.04);
    box-shadow: 2px 2px 14px #77b0f5;
  }
</style>


<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Produtos</h1>
              <ol class="breadcrumb">
                <li><a href="/">Página Inicial</a></li>
                <li class="active">Produtos</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section padding_layout_1 product_list_main">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center pb-4">Conheça nossos produtos</h2>
        <div class="row">
         <?if(count($produtos) == 0):?>  
            <div class="alert alert-secondary col-md-12 text-center"> <i class="fa fa-info-circle"></i> <b>Nenhum produto disponível no momento...</b></div>
          <?else:?>
            <? foreach($produtos as $p):?>           
              <div  class="col-md-4 col-sm-4 col-xs-12 margin_bottom_30_all">
                
                  <!-- <div  class="product_list">
                    <div class="product_img"> <img height="200" width="200" class="img-responsive" src="<?=$site[url]?>uploads/<?=$p[image]?>" alt=""> </div>
                    <div class="product_detail_btm">
                      <div class="center">
                        <h4><a href="it_shop_detail.html"><h3><?=$p[name]?><h3></a></h4>
                      </div>
                      <div class="starratin">
                        <div class="center ">R$ <?=number_format($p[price],2,',','.')?></div>
                      </div>
                    
                    </div>
                  </div> -->
                  <div class="card card__prod">
                    <img width="300" height="300" class="card-img-top" src="<?=$site[url]?>uploads/<?=$p[image]?>" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title"><?=$p[name]?></h5>
                      <label><b>Descrição</b></label>
                      <p class="card-text"><?=$p[description]?></p>
                      <div class="product_price">
                        <p><span class="new_price">R$ <?=number_format($p[price],2,',','.')?></span></p>
                      </div>
                    </div>
                  </div>
                
              </div>
              
              <?endforeach;?>
          <?endif;?>
        </div>
      </div>
      
        </div>
      </div>
    </div>
  </div>
</div>