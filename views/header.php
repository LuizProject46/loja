<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Loja Beto</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
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
<!-- revolution slider css -->
<link rel="stylesheet" type="text/css" href="<?=$site[url]?>/assets/revolution/css/settings.css" />
<link rel="stylesheet" type="text/css" href="<?=$site[url]?>/assets/revolution/css/layers.css" />
<link rel="stylesheet" type="text/css" href="<?=$site[url]?>/assets/revolution/css/navigation.css" />
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body id="default_theme" class="it_service">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" width="100" height="100" src="<?$site[url]?>/assets/images/logo.jpeg" alt="#" /> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  
  <!-- end header top -->
  <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="/"><img style="
    width: 106px;
    height: 61px;
"src="<?=$site[url]?>/assets/images/logo.jpeg"/></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> <a class="active" href="/">Página Inicial</a>
                </li>
                <li><a href="/sobre">Sobre Nós</a></li>
                <li> <a href="/produtos">Produtos</a>
                </li>
                <li> <a href="/contato">Contato</a>
                </li>
                <?if($_SESSION[name] && $_SESSION[email]):?>
                  <li> <a href="/dashboard"><i style="margin-right:8px;" class="fa fa-user"></i><?=$_SESSION[name]?></a>
                <?endif;?>
                </li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>