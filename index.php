<?php
include_once("Admin/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="ORDEM DOS MÃ‰DICOS VETERINÃRIOS DE ANGOLA
A Ordem tem membros efectivos e membros extraordinÃ¡rios (correspondentes e honorÃ¡rios) podem inscrever-se, como membros efectivos, os angolanos ou estrangeiros que residem em Angola, licenciados em medicina veterinÃ¡ria pelas universidades em Angola e ainda os angolanos e estrangeiros, habilitados com cursos ministrados em universidades estrangeiras reconhecidos nos termos da legislaÃ§Ã£o aplicÃ¡vel.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>O.M.V.A - ORDEM DOS MÃ‰DICOS VETERINÃRIOS DE ANGOLA</title>
    
    <!-- Styles -->
   <!--  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet"> -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="_css/animate.min.css">
    <link rel="stylesheet" href="_css/animate.css">
	
	<!-- Favicon  -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3670845081959955" crossorigin="anonymous"></script>
    <link rel="icon" href="images/logo3.svg">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="navbar-brand logo-text page-scroll" href="index.php">Aria</a> -->

        <!-- Image Logo -->
        <a class="navbar-brand logo-image" href="index.php"><img src="images/logo3.svg" alt="alternative"></a>
        
        <!-- Mobile Menu Toggle Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-awesome fas fa-bars"></span>
            <span class="navbar-toggler-awesome fas fa-times"></span>
        </button>
        <!-- end of mobile menu toggle button -->

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#header">INÃCIO <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#intro">PERFIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="midia.php">MÃDIA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="legislacao.php">LEGISLAÃ‡ÃƒO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="membros.php">MEMBROS</a>
                </li>
               <!-- Sira -->
                <li class="nav-item">
                    <a class="nav-link page-scroll" href="sira/login.php">S.I.R.A</a>
                </li>
               
                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">PARCEIROS</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"><span class="item-text">F.M.V</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="isv.php"><span class="item-text">I.S.V</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="#"><span class="item-text">I.I.V</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="#"><span class="item-text">Ã“RGÃƒOS SEMILARES</span></a>
                    </div>
                </li>
                <!-- end of dropdown menu -->

                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" href="#" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">Ã“RGÃƒOS DA ORDEM</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="congresso.php"><span class="item-text">O Congresso</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="assembleiageral.php"><span class="item-text">Assembleia Geral</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="deontologico.php"><span class="item-text">O Conselho Profissional e DeontolÃ³gico</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="#"><span class="item-text">O BastonÃ¡rio</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="#"><span class="item-text">O Conselho Fiscal</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="#"><span class="item-text">As Assembleias Regionais</span></a>
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="#"><span class="item-text">Os Conselhos Regionais</span></a>
                        </div>
                </li>
                <!-- end of dropdown menu -->

                <!-- Dropdown Menu -->          
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">ACERCA</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="antecedentes.php"><span class="item-text">ANTECEDENTES</span></a>
                   
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="camvac.php"><span class="item-text">C.A.M.V.A.C</span></a>
                        
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="cadastracamv.php"><span class="item-text">INSCREVER CAMV</span></a>

                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="recmv.php"><span class="item-text">R.E.C.M.V</span></a>
                   
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="omva.php"><span class="item-text">O.M.V.A</span></a>

                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="revista.php"><span class="item-text">REVISTA</span></a>
                        
                        <div class="dropdown-items-divide-hr"></div>
                        <a class="dropdown-item" href="aniversariantes.php"><span class="item-text">ANIVERSARIANTES</span></a>

                    </div>
                   
                </li>
                <!-- end of dropdown menu -->

                <li class="nav-item">
                    <a class="nav-link page-scroll" href="#contact">CONTACTO</a>
                </li>
            </ul>
            <span class="nav-item social-icons">
                <span class="fa-stack">
                    <a href="https://www.youtube.com/channel/UCJFN4S6DyaZIh5T7w8T5vbA">
                        <span class="hexagon"></span>
                        <i class="fab fa-youtube fa-stack-1x"></i>
                    </a>
                </span>
               
            </span>
        </div>
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


    <!-- Header
 -->
    <header id="header" class="header">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-container">
                            <h1>ORDEM DOS MÃ‰DICOS VETERINÃRIOS DE ANGOLA<span id="js-rotating"></span></h1>
                            <p class="p-heading p-large"><span id="js-rotating">A Ordem Ã© uma associaÃ§Ã£o pÃºblica, independente dos Ã³rgÃ£os do Estado, sendo livre e autÃ³noma no Ã¢mbito das suas atribuiÃ§Ãµes</span></p>
                            <p class="p-heading p-large"><span id="js-rotating">A PREVENÃ‡ÃƒO Ã‰ MELHOR QUE A CURA</span></p>
                            <a class="btn-solid-lg page-scroll" href="cadastrar.php">INSCREVER-SE</a>
                            <a class="btn-solid-lg page-scroll" href="https://www.mediafire.com/file/9yqzq9wmqcuhrq2/2.1%C2%BA+Boletim+da+Ordem+dos+M%C3%A9dicos+Veterin%C3%A1rios+de+Angola/file">BAIXAR REVISTA</a>
                        </div>
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
    </header> <!-- end of header -->
    <!-- end of header -->

    <!-- Intro -->
    <div id="intro" class="basic-1">
        <div class="container">
            <div class="row">

            <div class="col-lg-7">
                <div class="text-container">
                <div style="text-align: justify;" class="section-title">PERFIL</div>
                        <h3>Agosto de 1994</h3>
                        <p>Um grupo restrito (ComissÃ£o Ad Hoc) de MÃ©dicos VeterinÃ¡rios, sediados em Luanda e no Lubango, reflete sobre a necessidade de criaÃ§Ã£o de uma entidade que pugnasse pela defesa dos interesses da profissÃ£o veterinÃ¡ria, e elabora um ante-projecto de Estatuto da Ordem dos MÃ©dicos VeterinÃ¡rios de Angola.</p>
                        
                 
                        <h3>23 de Junho de 1998</h3>
                        <p>Assembleia Geral de MÃ©dicos VeterinÃ¡rios, em Luanda, onde se procede Ã  eleiÃ§Ã£o da ComissÃ£o Instaladora, integrada por sete (7) mÃ©dicos veterinÃ¡rios, Ã  aprovaÃ§Ã£o do Projecto de Estatutos da Ordem dos MÃ©dicos veterinÃ¡rios de Angola e se decide pela necessidade de inscriÃ§Ã£o provisÃ³ria dos mÃ©dicos veterinÃ¡rios existentes em Angola.</p>
                    
                        <h3>24 de Novembro de 1999</h3>
                        <p>ApÃ³s reformulaÃ§Ã£o do Projecto de Estatuto, o mesmo Ã© remetido ao MinistÃ©rio da Agricultura e Desenvolvimento Rural, a fim de ser encaminhado ao Secretariado do Conselho de Ministros.</p>
                 
                        <h3>27 de Junho de 2003</h3>
                        <p>Decreto n.Âº 95/03, do Conselho de Ministros, que aprova o Estatuto.</p>

                        <h3>2 de Outubro de 2003</h3>
                        <p>PromulgaÃ§Ã£o do Estatuto pelo Presidente da RepÃºblica.</p>

                     
                   
                         </div> <!-- end of text-container -->




                   <!--Imagem de gado para o site que vai 
                     <div class="image-container">
                        <img class="img-fluid imgmembro" src="images/centro.jpg" alt="alternative">
                    </div>  end of image-container -->

                </div> <!-- end of col -->

                <div class="col-lg-5">
                    <div class="text-container">

                        <h3>21 de Outubro de 2003</h3>
                        <p >PublicaÃ§Ã£o do Estatuto da Ordem dos MÃ©dicos VeterinÃ¡rios de Angola, no DiÃ¡rio da RepÃºblica I SÃ©rie, n.Âº 83.</p>


                    <div class="section-title">MEMBROS DA ORDEM</div>
                        <p>A Ordem tem membros efectivos e membros extraordinÃ¡rios (correspondentes e honorÃ¡rios) podem inscrever-se, como membros efectivos, os angolanos ou estrangeiros que residem em Angola, licenciados em medicina veterinÃ¡ria pelas universidades em Angola e ainda os angolanos e estrangeiros, habilitados com cursos ministrados em universidades estrangeiras  reconhecidos nos termos da legislaÃ§Ã£o aplicÃ¡vel, designadamente:</p>
                        <p class="testimonial-text">"Regime acadÃ©micos da U.A.N (Artigos 61Âº e 63Âº, entre outros)"</p>
                        <p class="testimonial-text">"Regulamento de inscriÃ§Ã£o de membros efectivos e de admissÃ£o de membros extraordinÃ¡rios (aprovado em Assembleia Geral da Ordem, realizada a 27 de Novembro de 2004)"</p>
                       
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
               
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of intro -->


    <!-- Description -->
    <div class="cards-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
      
                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-binoculars fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">OBJECTIVO</h4>
                            <p>O objectivo essencial da Ordem Ã© a defesa e regulaÃ§Ã£o do exercÃ­cio da profissÃ£o veterinÃ¡ria <a class="popup-with-move-anim green" href="#project-9">ler mais</a></p>
                        </div>
                    </div>
                    <!-- end of card -->


                    <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-list-alt fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">ESTRUTURAS</h4>
                            <p>A Ordem tem Ã¢mbito nacional e compreende trÃªs delegaÃ§Ãµes regionais, que abrangem as Ã¡reas das seguintes provÃ­ncias <a class="popup-with-move-anim green" href="#project-10">ler mais</a></p>
                        </div>
                    </div>
                    <!-- end of card -->


                     <!-- Card -->
                    <div class="card">
                        <span class="fa-stack">
                            <span class="hexagon"></span>
                            <i class="fas fa-chart-pie fa-stack-1x"></i>
                        </span>
                        <div class="card-body">
                            <h4 class="card-title">ATRIBUIÃ‡Ã•ES</h4>
                            <p>a) Contribuir para defesa da saÃºde pÃºblica e qualidade de vida, avtravÃ©s da salvaguarda e promoÃ§Ã£o <a class="popup-with-move-anim green" href="#project-11">ler mais</a></p>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of description -->

    <!-- Services -->
    <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">SaÃºde PÃºblica VeterinÃ¡ria</div>
                    <h2>A PREVENÃ‡ÃƒO Ã‰ MELHOR QUE A CURA</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                <?php

                // Script de seleÃ§Ã£o da tabela dos funcionÃ¡rios
                $script_tb_noticia ="select tb_noticia.titulo,tb_noticia.imagem, tb_noticia.noticia,tb_noticia.id_noticia,tb_noticia.escritor,tb_noticia.data_noticia, tb_categoria.categoria from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria ='saude medico-veterinario' order by tb_noticia.id_noticia  desc limit 3";
                $consulta= mysqli_query($conexao, $script_tb_noticia);
                $linhas= mysqli_num_rows($consulta);



                if($linhas>0)
                {
                    while($tabela=mysqli_fetch_array($consulta))
                    {
                        
                        $titulo= $tabela['titulo'];
                        $noticia= $tabela['noticia'];
                        $escritor= $tabela['escritor'];
                        $data= $tabela['data_noticia'];
                        $categoria= $tabela['categoria'];
                        $id=$tabela['id_noticia'];

                       $NovaNoticia=substr($tabela['noticia'],0,200);

                ?>

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src='Admin/imgpt/<?php echo $tabela['imagem'] ?>' alt="">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $titulo  ?></h3>
                            <p><?php echo  $NovaNoticia ?>...</p>
                            
                            <p class="price"><?php echo $escritor ?> <span></span></p>
                            <p class="price"><span><?php echo $data ?></span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="vernoticiapostada.php?codigo=<?php echo $id;?>">Mais Detalhes</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                    <?php                          
                    }}
                    ?>

                    <!-- Card 
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-2.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Carne em mau estado de conservaÃ§Ã£o</h3>
                            <p>Use this service pack to give your company the necessary impulse to become an industry leader</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Business strategy planning</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Taking the planned actions</div>
                                </li>
                            </ul>
                            <p class="price">Starting at <span>$299</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="#callMe">Mais Detalhes</a>
                        </div> --><!-- end of button-container
                    </div> -->
                    <!-- end of card -->


                    <!-- Card 
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-3.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Carne em mau estado de conservaÃ§Ã£o</h3>
                            <p>You already are a reference point in your industry now you need to learn about acquisitions</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Maintaining the leader status</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Acquisitions the right way</div>
                                </li>
                            </ul>
                            <p class="price">Starting at <span>$299</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="#callMe">Mais Detalhes</a>
                        </div> --><!-- end of button-container 
                    </div>-->
                    <!-- end of card -->


                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->
    

    <!-- Details 1 -->
	<div id="details" class="accordion">
		<div class="area-1">
        
		</div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2">
            
            <!-- Accordion -->
            <div class="accordion-container" id="accordionOne">
                <h2>O ExercÃ­co Profissional Da Medicina veterinÃ¡ria</h2>
              
                <div class="item">
                    <div id="headingOne">
                        <span data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" role="button">
                            <span class="circle-numbering">1</span><span class="accordion-title">SÃ³ os mÃ©dicos veterinÃ¡rios</span>
                        </span>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionOne">
                        <div class="accordion-body">
                           com inscriÃ§Ã£o em vigÃ´r na Ordem podem exercer, no territÃ³rio nacional, a tÃ­tulo profissional, a actividade mÃ©dico veterinÃ¡ria.
                        </div>
                    </div>
                </div> <!-- end of item -->
            
               
                <div class="item">
                    <div id="headingTwo">
                        <span class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" role="button">
                            <span class="circle-numbering">2</span><span class="accordion-title">O exercÃ­cio da profissÃ£o veterinÃ¡ria</span>
                        </span>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionOne">
                        <div class="accordion-body">
                            em infracÃ§Ã£o ao disposto anteriormente, constitui crime de usurpaÃ§Ã£o de funÃ§Ãµes, punÃ­vel nos termos das disposiÃ§Ãµes do CÃ³digo Penal.
                        </div>
                    </div>
                </div> <!-- end of item -->

                   
            
                <div class="item">
                    <div id="headingThree">
                        <span class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" role="button">
                            <span class="circle-numbering">3</span><span class="accordion-title">Os mÃ©dicos veterinÃ¡rios</span>
                        </span>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionOne">
                        <div class="accordion-body">
                            estÃ£o obrigados, em todos os documentos que emitem, no exercÃ­cio da medicina veterinÃ¡ria, a identificar-se com o nÃºmero da sua CÃ©dula Profissional.
                        </div>
                    </div>
                </div> <!-- end of item -->


            </div> <!-- end of accordion-container -->
            <!-- end of accordion -->
		</div> <!-- end of area-2 -->
    </div> <!-- end of accordion -->
    <!-- end of details 1 -->


    <!-- Details 2 -->
	<div class="tabs">
        <div class="area-1">
            <div class="tabs-container">
                
                <!-- Tabs Links -->
                <ul class="nav nav-tabs" id="ariaTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-th"></i>Terrestre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-th"></i>Aquatico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-th"></i>Fauna Selvagem</a>
                    </li>
                </ul>
                <!-- end of tabs links -->
                
                <!-- Tabs Content -->
                <div class="tab-content" id="ariaTabsContent">

                    <!-- Tab -->
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                        

                        <?php

                        // Script de seleÃ§Ã£o da saÃºde pÃºblica Animais terrestre
                        $script_tb_noticia ="select tb_noticia.titulo,tb_noticia.imagem, tb_noticia.noticia,tb_noticia.id_noticia,tb_noticia.escritor,tb_noticia.data_noticia, tb_categoria.categoria from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria = 'Animais terrestre' order by tb_noticia.id_noticia desc limit 1";
                        $consulta= mysqli_query($conexao, $script_tb_noticia);
                        $linhas= mysqli_num_rows($consulta);



                        if($linhas>0)
                        {
                            while($tabela=mysqli_fetch_array($consulta))
                            {
                                
                                $titulo= $tabela['titulo'];
                                $noticia= $tabela['noticia'];
                                $escritor= $tabela['escritor'];
                                $data= $tabela['data_noticia'];
                                $categoria= $tabela['categoria'];
                                $id=$tabela['id_noticia'];

                            $NovaNoticia=substr($tabela['noticia'],0,500);

                        ?>
                        <h4><?php echo $titulo ?></h4>
                        <p> <?php echo $NovaNoticia  ?> <a class="green page-scroll" href="vernoticiapostada.php?codigo=<?php echo $id;?>">ler mais...</a></p>
                        <?php                          
                    }}
                ?>
                        <!-- Progress Bars
                        <div class="progress-container">
                            <div class="title">Business Development 100%</div>
                            <div class="progress">
                                <div class="progress-bar first" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="title">Opportunity Spotting 76%</div>
                            <div class="progress">
                                <div class="progress-bar second" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="title">Online Marketing 90%</div>
                            <div class="progress">
                                <div class="progress-bar third" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>  --><!-- end of progress-container -->
                        <!-- end of progress bars -->
                        
                    </div> <!-- end of tab-pane --> 
                    <!-- end of tab -->

                    <!-- Tab  Mostrar noticias Aquatico 1-->
                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                        <ul class="list-unstyled li-space-lg first">
                            <li class="media">
                                <div class="media-bullet">1</div>

                                <?php

                                    // Script de seleÃ§Ã£o da noticias Aquatico
                                    $script_tb_noticia ="select tb_noticia.titulo,tb_noticia.imagem, tb_noticia.noticia,tb_noticia.id_noticia,tb_noticia.escritor,tb_noticia.data_noticia, tb_categoria.categoria from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria = 'Animais Aquatico' order by tb_noticia.id_noticia desc limit 1";
                                    $consulta= mysqli_query($conexao, $script_tb_noticia);
                                    $linhas= mysqli_num_rows($consulta);



                                    if($linhas>0)
                                    {
                                        while($tabela=mysqli_fetch_array($consulta))
                                        {
                                            
                                            $titulo= $tabela['titulo'];
                                            $noticia= $tabela['noticia'];
                                            $escritor= $tabela['escritor'];
                                            $data= $tabela['data_noticia'];
                                            $categoria= $tabela['categoria'];
                                            $id=$tabela['id_noticia'];

                                        $NovaNoticia=substr($tabela['noticia'],0,200);

                                    ?>
                                <div class="media-body"><strong><?php echo $titulo ?></strong> <?php echo $NovaNoticia ?><a class="green page-scroll" href="vernoticiapostada.php?codigo=<?php echo $id;?>">ler mais...</a></div>
                               
                                <?php                          
                                }}
                            ?>

                            </li>
                           
                        </ul>
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                    <!-- Tab -->
                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">

                    <?php

                    // Script de seleÃ§Ã£o da noticias Fauna Selvagem
                    $script_tb_noticia ="select tb_noticia.titulo,tb_noticia.imagem, tb_noticia.noticia,tb_noticia.id_noticia,tb_noticia.escritor,tb_noticia.data_noticia, tb_categoria.categoria from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria = 'Fauna' order by tb_noticia.id_noticia desc limit 1";
                    $consulta= mysqli_query($conexao, $script_tb_noticia);
                    $linhas= mysqli_num_rows($consulta);



                    if($linhas>0)
                    {
                        while($tabela=mysqli_fetch_array($consulta))
                        {
                            
                            $titulofauna= $tabela['titulo'];
                            $noticia= $tabela['noticia'];
                            $escritor= $tabela['escritor'];
                            $data= $tabela['data_noticia'];
                            $categoria= $tabela['categoria'];
                            $id=$tabela['id_noticia'];

                        $NovaNoticiafuana=substr($tabela['noticia'],0,680);
                       

                    ?>

                        <h4><?php echo $titulofauna ?></h4>
                        <p> <?php echo $NovaNoticiafuana ?> <a class="green page-scroll" href="vernoticiapostada.php?codigo=<?php echo $id;?>">ler mais...</a></p>
                        
                        <?php                          
                                }}
                            ?>
                     
                     <!-- <p><strong>Our goal is to help</strong> your company achieve its full potential and establish long term stability for <a class="green" href="#your-link">the stakeholders</a></p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">It's easy to get a quotation, just call our office anytime</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">We'll get back to you with an initial estimate soon</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Get ready to see results even after only 30 days</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Ask for a quote and start improving your business</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Just fill out the form and we'll call you right away</div>
                            </li>
                        </ul> -->
                    </div> <!-- end of tab-pane -->
                    <!-- end of tab -->

                </div> <!-- end of tab-content -->
                <!-- end of tabs content -->

            </div> <!-- end of tabs-container -->
        </div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class="area-2"></div> <!-- end of area-2 -->
    </div> <!-- end of tabs -->
    <!-- end of details 2 -->


    <!-- Testimonials -->
    <div class="slider">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Noticias de destaques</h2>
                    <p class="p-heading">Esteja informado sobre todas as notÃ­cias da Ordem Dos MÃ©dicos VeterinÃ¡rios</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Card Slider -->
                    <div class="slider-container">
                        <div class="swiper-container card-slider">
                            <div class="swiper-wrapper">
                                
                               
                            <?php

                                // Script de seleÃ§Ã£o da noticias Slide Noticias Diversas
                                $script_tb_noticia ="select tb_noticia.titulo,tb_noticia.imagem, tb_noticia.noticia,tb_noticia.id_noticia,tb_noticia.escritor,tb_noticia.data_noticia, tb_categoria.categoria from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia order by tb_noticia.id_noticia desc limit 5";
                                $consulta= mysqli_query($conexao, $script_tb_noticia);
                                $linhas= mysqli_num_rows($consulta);



                                if($linhas>0)
                                {
                                    while($tabela=mysqli_fetch_array($consulta))
                                    {
                                        
                                        $titulofauna= $tabela['titulo'];
                                        $noticia= $tabela['noticia'];
                                        $escritor= $tabela['escritor'];
                                        $data= $tabela['data_noticia'];
                                        $categoria= $tabela['categoria'];
                                        $id=$tabela['id_noticia'];

                                    $NovaNoticiafuana=substr($tabela['noticia'],0,100);
                                

                                ?>

                               
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <div class="card">
                                    <img class="card-image" src='Admin/imgpt/<?php echo $tabela['imagem'] ?>' alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text"><?php echo $NovaNoticiafuana ?> <a class="green page-scroll" href="vernoticiapostada.php?codigo=<?php echo $id;?>">ler mais...</a></div>
                                            <div class="testimonial-author"><?php echo $escritor ?></div>
                                        </div>
                                    </div>
                                </div> <!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <?php                          
                                }}
                                ?>
                              
                              
                              
                              
                              
                                <!-- Slide 
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-2.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">I purchased the Growth Accelerator service pack a few years ago and I renewed the contract each year. </div>
                                            <div class="testimonial-author">Marsha Singer - Marketer</div>
                                        </div>
                                    </div>        
                                </div> --><!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide 
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-3.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">Aria's CEO personally attends client meetings and gives his feedback on business growth strategies.</div>
                                            <div class="testimonial-author">Roy Smith - Developer</div>
                                        </div>
                                    </div>        
                                </div> --><!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide 
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-4.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">At the beginning I thought the prices are a little high for what they offer but they over deliver each and every time.</div>
                                            <div class="testimonial-author">Ronald Spice - Owner</div>
                                        </div>
                                    </div>
                                </div> --><!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide 
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-5.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">I recommend Aria to every business owner or growth leader that wants to take his company to the next level.</div>
                                            <div class="testimonial-author">Lindsay Rune - Manager</div>
                                        </div>
                                    </div>        
                                </div> --><!-- end of swiper-slide -->
                                <!-- end of slide -->
        
                                <!-- Slide 
                                <div class="swiper-slide">
                                    <div class="card">
                                        <img class="card-image" src="images/testimonial-6.jpg" alt="alternative">
                                        <div class="card-body">
                                            <div class="testimonial-text">My goals for using Aria's services seemed high when I first set them but they've met them with no problems.</div>
                                            <div class="testimonial-author">Ann Black - Consultant</div>
                                        </div>
                                    </div>        
                                </div> --><!-- end of swiper-slide -->
                                <!-- end of slide -->
                            
                            </div> <!-- end of swiper-wrapper -->
        
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->
        
                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of sliedr-container -->
                    <!-- end of card slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider -->
    <!-- end of testimonials -->


<!--- Noticias acerca das actividades dos membros -->
   <!-- Services -->
   <div id="services" class="cards-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">Actividades Dos Membros</div>
                    <h2>ACTIVIDADES</h2>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    
                <?php

                // Script de seleÃ§Ã£o da tabela dos funcionÃ¡rios
                $script_tb_noticia ="select tb_noticia.titulo,tb_noticia.imagem, tb_noticia.noticia,tb_noticia.id_noticia,tb_noticia.escritor,tb_noticia.data_noticia, tb_categoria.categoria from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria ='Actividade Medico-Veterinario' order by tb_noticia.id_noticia  desc limit 3";
                $consulta= mysqli_query($conexao, $script_tb_noticia);
                $linhas= mysqli_num_rows($consulta);



                if($linhas>0)
                {
                    while($tabela=mysqli_fetch_array($consulta))
                    {
                        
                        $titulo= $tabela['titulo'];
                        $noticia= $tabela['noticia'];
                        $escritor= $tabela['escritor'];
                        $data= $tabela['data_noticia'];
                        $categoria= $tabela['categoria'];
                        $id=$tabela['id_noticia'];

                       $NovaNoticia=substr($tabela['noticia'],0,200);

                ?>

                    <!-- Card -->
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src='Admin/imgpt/<?php echo $tabela['imagem'] ?>' alt="">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $titulo  ?></h3>
                            <p><?php echo  $NovaNoticia ?>...</p>
                            
                            <p class="price"><?php echo $escritor ?> <span></span></p>
                            <p class="price"><span><?php echo $data ?></span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="vernoticiapostada.php?codigo=<?php echo $id;?>">Mais Detalhes</a>
                        </div> <!-- end of button-container -->
                    </div>
                    <!-- end of card -->

                    <?php                          
                    }}
                    ?>

                    <!-- Card 
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-2.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Carne em mau estado de conservaÃ§Ã£o</h3>
                            <p>Use this service pack to give your company the necessary impulse to become an industry leader</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Business strategy planning</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Taking the planned actions</div>
                                </li>
                            </ul>
                            <p class="price">Starting at <span>$299</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="#callMe">Mais Detalhes</a>
                        </div> --><!-- end of button-container
                    </div> -->
                    <!-- end of card -->


                    <!-- Card 
                    <div class="card">
                        <div class="card-image">
                            <img class="img-fluid" src="images/services-3.jpg" alt="alternative">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Carne em mau estado de conservaÃ§Ã£o</h3>
                            <p>You already are a reference point in your industry now you need to learn about acquisitions</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Maintaining the leader status</div>
                                </li>
                                <li class="media">
                                    <i class="fas fa-square"></i>
                                    <div class="media-body">Acquisitions the right way</div>
                                </li>
                            </ul>
                            <p class="price">Starting at <span>$299</span></p>
                        </div>
                        <div class="button-container">
                            <a class="btn-solid-reg page-scroll" href="#callMe">Mais Detalhes</a>
                        </div> --><!-- end of button-container 
                    </div>-->
                    <!-- end of card -->


                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-2 -->
    <!-- end of services -->
    




    <!-- Call Me
    <div id="callMe" class="form-1">
        <div class="container">
            <div class="row">
               <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CALL ME</div>
                        <h2 class="white">Have Us Contact You By Filling And Submitting The Form</h2>
                        <p class="white">You are just a few steps away from a personalized offer. Just fill in the form and send it to us and we'll get right back with a call to help you decide what service package works.</p>
                        <ul class="list-unstyled li-space-lg white">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">It's very easy just fill in the form so we can call</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">During the call we'll require some info about the company</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Don't hesitate to email us for any questions or inquiries</div>
                            </li>
                        </ul>
                    </div>
                </div>  end of col -->
              




              
                <div class="col-lg-6">
                   
                    <!-- Call Me Form 
                    <form id="callMeForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="lname" name="lname" required>
                            <label class="label-control" for="lname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="lphone" name="lphone" required>
                            <label class="label-control" for="lphone">Phone</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="lemail" name="lemail" required>
                            <label class="label-control" for="lemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <select class="form-control-select" id="lselect" required>
                                <option class="select-option" value="" disabled selected>Interested in...</option>
                                <option class="select-option" value="Off The Ground">Off The Ground</option>
                                <option class="select-option" value="Accelerated Growth">Accelerated Growth</option>
                                <option class="select-option" value="Market Domination">Market Domination</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox white">
                            <input type="checkbox" id="lterms" value="Agreed-to-Terms" name="lterms" required>I agree with Aria's stated <a class="white" href="privacy-policy.html">Privacy Policy</a> and <a class="white" href="terms-conditions.html">Terms & Conditions</a>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">CALL ME</button>
                        </div>
                        <div class="form-message">
                            <div id="lmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>-->
                    <!-- end of call me form -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-1 -->
    <!-- end of call me -->


    <!-- Projects
	<div id="projects" class="filter">
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">ACTIVIDADES</div>
                    <h2>ACTIVIDADE DOS MEMBROS</h2>
                </div>  end of col -->
            <!-- </div> end of row 
            <div class="row">
                <div class="col-lg-12">
                     Filter -->
                    <!--  Mostrar a noticia das actividades dos membros a partir da base de dados
                   
                    <div class="button-group filters-button-group">
                        <a class="button is-checked" data-filter="*"><span>TODAS</span></a>
                        <a class="button" data-filter=".design"><span>DESIGN</span></a>
                        <a class="button" data-filter=".development"><span>DEVELOPMENT</span></a>
                        <a class="button" data-filter=".marketing"><span>MARKETING</span></a>
                        <a class="button" data-filter=".seo"><span>SEO</span></a>
                    </div>  end of button group 
                    <div class="grid">


                    <?php

                    // Script de seleÃ§Ã£o da noticias Slide Actividades dos Membros 1
                    $codigoId="select MAX(id_noticia) as Resultado from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria = 'Actividade Medico-Veterinario'";
                    $Resultado=$conexao->query($codigoId);
    
                    while($vetor2=$Resultado->fetch_assoc())
                    {        
                        $Mostrar=$vetor2['Resultado'];
    
                    // Script de seleÃ§Ã£o da saÃºde pÃºblica
                    $script_tb_noticiaActividade ="select tb_noticia.titulo,tb_noticia.imagem, tb_noticia.noticia,tb_noticia.id_noticia,tb_noticia.escritor,tb_noticia.data_noticia, tb_categoria.categoria from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria ='Actividade Medico-Veterinario' and tb_noticia.id_noticia = '$Mostrar' order by tb_noticia.id_noticia desc limit 1";
                    $consultaActividade= mysqli_query($conexao, $script_tb_noticiaActividade);
                    $linhasActividade= mysqli_num_rows($consultaActividade);


                    if($linhasActividade>0)
                    {
                        while($tabelaActividade=mysqli_fetch_array($consultaActividade))
                        {
                            
                            $tituloActividade= $tabelaActividade['titulo'];
                            $noticiaActividade= $tabelaActividade['noticia'];
                            $escritorActividade= $tabelaActividade['escritor'];
                            $dataActividade= $tabelaActividade['data_noticia'];
                            $categoriaActividade= $tabelaActividade['categoria'];
                            $idActividade=$tabelaActividade['id_noticia'];

                        $NovaNoticiaActividade=substr($tabelaActividade['noticia'],0,100);


                    ?>
                      <div class="element-item development">
                            <a class="popup-with-move-anim" href="#project-1"><div class="element-item-overlay"><span><?php echo $tituloActividade  ?></span></div><img src='Admin/imgpt/<?php echo $tabelaActividade['imagem'] ?>' alt="alternative"></a>
                        </div>

                    <?php                          
                    }}}
                    ?>
                        <?php

                        // Script de seleÃ§Ã£o da noticias Slide Actividades dos Membros 2
                        $codigoId="select MAX(id_noticia)-1 as Resultado from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria = 'Actividade Medico-Veterinario'";
                        $Resultado=$conexao->query($codigoId);
        
                        while($vetor2=$Resultado->fetch_assoc())
                        {        
                            $Mostrar=$vetor2['Resultado'];
        
                        // Script de seleÃ§Ã£o da saÃºde pÃºblica
                        $script_tb_noticiaActividade2 ="select tb_noticia.titulo,tb_noticia.imagem, tb_noticia.noticia,tb_noticia.id_noticia,tb_noticia.escritor,tb_noticia.data_noticia, tb_categoria.categoria from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria ='Actividade Medico-Veterinario' and tb_noticia.id_noticia = '$Mostrar' order by tb_noticia.id_noticia desc limit 1";
                        $consultaActividade2= mysqli_query($conexao, $script_tb_noticiaActividade2);
                        $linhasActividade2= mysqli_num_rows($consultaActividade2);
    


                        if($linhasActividade2>0)
                        {
                            while($tabelaActividade2=mysqli_fetch_array($consultaActividade2))
                            {
                                
                                $tituloActividade2= $tabelaActividade2['titulo'];
                                $noticiaActividade2= $tabelaActividade2['noticia'];
                                $escritorActividade2= $tabelaActividade2['escritor'];
                                $dataActividade2= $tabelaActividade2['data_noticia'];
                                $categoriaActividade2= $tabelaActividade2['categoria'];
                                $idActividade2=$tabelaActividade2['id_noticia'];

                            $NovaNoticiaActividade2=substr($tabelaActividade2['noticia'],0,100);


                        ?>
                        <div class="element-item development">
                            <a class="popup-with-move-anim" href="#project-2"><div class="element-item-overlay"><span><?php  echo $tituloActividade2 ?></span></div><img src='Admin/imgpt/<?php echo $tabelaActividade2['imagem'] ?>' alt="alternative"></a>
                        </div>

                        <?php                          
                         }}}
                        ?>
                        <?php

                        // Script de seleÃ§Ã£o da noticias Slide Actividades dos Membros 3
                      
                        $codigoId="select MAX(id_noticia)-2 as Resultado from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria = 'Actividade Medico-Veterinario'";
                        $Resultado=$conexao->query($codigoId);
        
                        while($vetor2=$Resultado->fetch_assoc())
                        {        
                            $Mostrar=$vetor2['Resultado'];
        
                        
                        $script_tb_noticiaActividade3 ="select tb_noticia.titulo,tb_noticia.imagem, tb_noticia.noticia,tb_noticia.id_noticia,tb_noticia.escritor,tb_noticia.data_noticia, tb_categoria.categoria from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria ='Actividade Medico-Veterinario' and tb_noticia.id_noticia = '$Mostrar' order by tb_noticia.id_noticia desc limit 1";
                        $consultaActividade3= mysqli_query($conexao, $script_tb_noticiaActividade3);
                        $linhasActividade3= mysqli_num_rows($consultaActividade3);



                        if($linhasActividade3>0)
                        {
                            while($tabelaActividade3=mysqli_fetch_array($consultaActividade3))
                            {
                                
                                $tituloActividade3= $tabelaActividade3['titulo'];
                                $noticiaActividade3= $tabelaActividade3['noticia'];
                                $escritorActividade3= $tabelaActividade3['escritor'];
                                $dataActividade3= $tabelaActividade3['data_noticia'];
                                $categoriaActividade3= $tabelaActividade3['categoria'];
                                $idActividade3=$tabelaActividade3['id_noticia'];

                            $NovaNoticiaActividade3=substr($tabelaActividade3['noticia'],0,100);


                        ?>
                        <div class="element-item design development marketing">
                            <a class="popup-with-move-anim" href="#project-3"><div class="element-item-overlay"><span><?php  echo $tituloActividade3 ?></span></div><img src='Admin/imgpt/<?php echo $tabelaActividade3['imagem'] ?>' alt="alternative"></a>
                        </div>
                        <?php                          
                         }}}
                        ?>
                        <?php

                        // Script de seleÃ§Ã£o da noticias Slide Actividades dos Membros 4
                        $codigoId="select MAX(id_noticia)-3 as Resultado from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria = 'Actividade Medico-Veterinario'";
                        $Resultado=$conexao->query($codigoId);
        
                        while($vetor2=$Resultado->fetch_assoc())
                        {        
                            $Mostrar=$vetor2['Resultado'];
        
                        // Script de seleÃ§Ã£o da saÃºde pÃºblica
                        $script_tb_noticiaActividade4 ="select tb_noticia.titulo,tb_noticia.imagem, tb_noticia.noticia,tb_noticia.id_noticia,tb_noticia.escritor,tb_noticia.data_noticia, tb_categoria.categoria from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria ='Actividade Medico-Veterinario' and tb_noticia.id_noticia = '$Mostrar' order by tb_noticia.id_noticia desc limit 1";
                        $consultaActividade4= mysqli_query($conexao, $script_tb_noticiaActividade4);
                        $linhasActividade4= mysqli_num_rows($consultaActividade4);



                        if($linhasActividade4>0)
                        {
                            while($tabelaActividade4=mysqli_fetch_array($consultaActividade4))
                            {
                                
                                $tituloActividade4= $tabelaActividade4['titulo'];
                                $noticiaActividade4= $tabelaActividade4['noticia'];
                                $escritorActividade4= $tabelaActividade4['escritor'];
                                $dataActividade4= $tabelaActividade4['data_noticia'];
                                $categoriaActividade4= $tabelaActividade4['categoria'];
                                $idActividade4=$tabelaActividade4['id_noticia'];

                                $NovaNoticiaActividade4=substr($tabelaActividade4['noticia'],0,100);


                        ?>
                        <div class="element-item design development marketing">
                            <a class="popup-with-move-anim" href="#project-4"><div class="element-item-overlay"><span><?php  echo $tituloActividade4 ?></span></div><img src='Admin/imgpt/<?php echo $tabelaActividade4['imagem'] ?>' alt="alternative"></a>
                        </div>
                        <?php                          
                         }}}
                        ?>
                        <?php

                        // Script de seleÃ§Ã£o da noticias Slide Actividades dos Membros 5
                        $codigoId="select MAX(id_noticia)-4 as Resultado from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria = 'Actividade Medico-Veterinario'";
                        $Resultado=$conexao->query($codigoId);
        
                        while($vetor2=$Resultado->fetch_assoc())
                        {        
                            $Mostrar=$vetor2['Resultado'];
        
                        // Script de seleÃ§Ã£o da saÃºde pÃºblica
                        $script_tb_noticiaActividade5 ="select tb_noticia.titulo,tb_noticia.imagem, tb_noticia.noticia,tb_noticia.id_noticia,tb_noticia.escritor,tb_noticia.data_noticia, tb_categoria.categoria from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria ='Actividade Medico-Veterinario' and tb_noticia.id_noticia = '$Mostrar' order by tb_noticia.id_noticia desc limit 1";
                        $consultaActividade5= mysqli_query($conexao, $script_tb_noticiaActividade5);
                        $linhasActividade5= mysqli_num_rows($consultaActividade5);


                        if($linhasActividade5>0)
                        {
                            while($tabelaActividade5=mysqli_fetch_array($consultaActividade5))
                            {
                                
                                $tituloActividade5= $tabelaActividade5['titulo'];
                                $noticiaActividade5= $tabelaActividade5['noticia'];
                                $escritorActividade5= $tabelaActividade5['escritor'];
                                $dataActividade5= $tabelaActividade5['data_noticia'];
                                $categoriaActividade5= $tabelaActividade5['categoria'];
                                $idActividade5=$tabelaActividade5['id_noticia'];

                            $NovaNoticiaActividade5=substr($tabelaActividade5['noticia'],0,100);


                        ?>
                        <div class="element-item design development marketing seo">
                            <a class="popup-with-move-anim" href="#project-5"><div class="element-item-overlay"><span><?php  echo $tituloActividade5 ?></span></div><img src='Admin/imgpt/<?php echo $tabelaActividade5['imagem'] ?>' alt="alternative"></a>
                        </div>
                        <?php                          
                         }}}
                        ?>
                        <?php

                        // Script de seleÃ§Ã£o da noticias Slide Actividades dos Membros 6
                        $codigoId="select MAX(id_noticia)-5 as Resultado from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria = 'Actividade Medico-Veterinario'";
                        $Resultado=$conexao->query($codigoId);
        
                        while($vetor2=$Resultado->fetch_assoc())
                        {        
                            $Mostrar=$vetor2['Resultado'];
        
                        // Script de seleÃ§Ã£o da saÃºde pÃºblica
                        $script_tb_noticiaActividade6 ="select tb_noticia.titulo,tb_noticia.imagem, tb_noticia.noticia,tb_noticia.id_noticia,tb_noticia.escritor,tb_noticia.data_noticia, tb_categoria.categoria from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria ='Actividade Medico-Veterinario' and tb_noticia.id_noticia = '$Mostrar' order by tb_noticia.id_noticia desc limit 1";
                        $consultaActividade6= mysqli_query($conexao, $script_tb_noticiaActividade6);
                        $linhasActividade6= mysqli_num_rows($consultaActividade6);


                        if($linhasActividade6>0)
                        {
                            while($tabelaActividade6=mysqli_fetch_array($consultaActividade6))
                            {
                                
                                $tituloActividade6= $tabelaActividade6['titulo'];
                                $noticiaActividade6= $tabelaActividade6['noticia'];
                                $escritorActividade6= $tabelaActividade6['escritor'];
                                $dataActividade6= $tabelaActividade6['data_noticia'];
                                $categoriaActividade6= $tabelaActividade6['categoria'];
                                $idActividade6=$tabelaActividade6['id_noticia'];

                            $NovaNoticiaActividade6=substr($tabelaActividade6['noticia'],0,100);


                        ?>
                        <div class="element-item design marketing seo">
                            <a class="popup-with-move-anim" href="#project-6"><div class="element-item-overlay"><span><?php  echo $tituloActividade6 ?></span></div><img src='Admin/imgpt/<?php echo $tabelaActividade6['imagem'] ?>' alt="alternative"></a>
                        </div>
                        <?php                          
                         }}}
                        ?>
                        <?php

                        // Script de seleÃ§Ã£o da noticias Slide Actividades dos Membros 7
                        $codigoId="select MAX(id_noticia)-6 as Resultado from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria = 'Actividade Medico-Veterinario'";
                        $Resultado=$conexao->query($codigoId);
        
                        while($vetor2=$Resultado->fetch_assoc())
                        {        
                            $Mostrar=$vetor2['Resultado'];
        
                        // Script de seleÃ§Ã£o da saÃºde pÃºblica
                        $script_tb_noticiaActividade7 ="select tb_noticia.titulo,tb_noticia.imagem, tb_noticia.noticia,tb_noticia.id_noticia,tb_noticia.escritor,tb_noticia.data_noticia, tb_categoria.categoria from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria ='Actividade Medico-Veterinario' and tb_noticia.id_noticia = '$Mostrar' order by tb_noticia.id_noticia desc limit 1";
                        $consultaActividade7= mysqli_query($conexao, $script_tb_noticiaActividade7);
                        $linhasActividade7= mysqli_num_rows($consultaActividade7);



                        if($linhasActividade7>0)
                        {
                            while($tabelaActividade7=mysqli_fetch_array($consultaActividade7))
                            {
                                
                                $tituloActividade7= $tabelaActividade7['titulo'];
                                $noticiaActividade7= $tabelaActividade7['noticia'];
                                $escritorActividade7= $tabelaActividade7['escritor'];
                                $dataActividade7= $tabelaActividade7['data_noticia'];
                                $categoriaActividade7= $tabelaActividade7['categoria'];
                                $idActividade7=$tabelaActividade7['id_noticia'];

                            $NovaNoticiaActividade7=substr($tabela['noticia'],0,100);


                        ?>
                        <div class="element-item design marketing">
                            <a class="popup-with-move-anim" href="#project-7"><div class="element-item-overlay"><span><?php echo $tituloActividade7  ?></span></div><img src='Admin/imgpt/<?php echo $tabelaActividade7['imagem'] ?>' alt="alternative"></a>
                        </div>
                        <?php                          
                         }}}
                        ?>
                        <?php

                        // Script de seleÃ§Ã£o da noticias Slide Actividades dos Membros 8
                        $codigoId="select MAX(id_noticia)-7 as Resultado from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria = 'Actividade Medico-Veterinario'";
                        $Resultado=$conexao->query($codigoId);
        
                        while($vetor2=$Resultado->fetch_assoc())
                        {        
                            $Mostrar=$vetor2['Resultado'];
        
                        // Script de seleÃ§Ã£o da saÃºde pÃºblica
                        $script_tb_noticiaActividade8 ="select tb_noticia.titulo,tb_noticia.imagem, tb_noticia.noticia,tb_noticia.id_noticia,tb_noticia.escritor,tb_noticia.data_noticia, tb_categoria.categoria from tb_noticia join tb_categoria where tb_categoria.id_categoria = tb_noticia.categoria_noticia and tb_categoria.categoria ='Actividade Medico-Veterinario' and tb_noticia.id_noticia = '$Mostrar' order by tb_noticia.id_noticia desc limit 1";
                        $consultaActividade8= mysqli_query($conexao, $script_tb_noticiaActividade8);
                        $linhasActividade8= mysqli_num_rows($consultaActividade8);



                        if($linhasActividade8>0)
                        {
                            while($tabelaActividade8=mysqli_fetch_array($consultaActividade8))
                            {
                                
                                $tituloActividade8= $tabelaActividade8['titulo'];
                                $noticiaActividade8= $tabelaActividade8['noticia'];
                                $escritorActividade8= $tabelaActividade8['escritor'];
                                $dataActividade8= $tabelaActividade8['data_noticia'];
                                $categoriaActividade8= $tabelaActividade8['categoria'];
                                $idActividade8=$tabelaActividade8['id_noticia'];

                            $NovaNoticiaActividade8=substr($tabelaActividade8['noticia'],0,100);


                        ?>
                        <div class="element-item design marketing">
                            <a class="popup-with-move-anim" href="#project-8"><div class="element-item-overlay"><span><?php echo $tituloActividade8  ?></span></div><img src='Admin/imgpt/<?php echo $tabelaActividade8['imagem'] ?>' alt="alternative"></a>
                        </div>
                        <?php                          
                         }}}
                        ?>
                      
                    </div>  end of grid 
                     end of filter -->
                    
                   


                </div><!--   end of col  -->
            </div><!--   end of row  -->
		</div><!--  end of container  -->
    </div> <!--  end of filter 
     end of projects -->


    <!-- Project Lightboxes -->
    <!-- Lightbox -->
    <div id="project-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">Ã—</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-1.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Online Banking</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">Ã—</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-2.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Classic Industry</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">Ã—</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-3.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>BoomBap Audio</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-4" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">Ã—</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-4.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Van Moose</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-5" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">Ã—</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-5.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Joy Moments</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-6" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">Ã—</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-6.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Spark Events</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-7" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">Ã—</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-7.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Casual Wear</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-8" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">Ã—</button>
            <div class="col-lg-8">
                <img class="img-fluid" src="images/project-8.jpg" alt="alternative">
            </div> <!-- end of col -->
            <div class="col-lg-4">
                <h3>Zazoo Apps</h3>
                <hr class="line-heading">
                <h6>Strategy Development</h6>
                <p>Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current needs</p>
                <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div>
                <a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- Lightbox -->
    <div id="project-9" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">Ã—</button>
           <!--  <div class="col-lg-8">
                <img class="img-fluid" src="images/project-8.jpg" alt="alternative">
            </div> end of col -->
            <div class="col-lg-12">
                <h3>OBJECTIVOS</h3>
                <hr class="line-heading">
                <!-- <h6>Strategy Development</h6> -->
                <p>O objectivo essencial da Ordem Ã© a defesa e regulaÃ§Ã£o do exercÃ­cio da profissÃ£o veterinÃ¡ria, contribuindo para sua melhoria e progresso, nos domÃ­nios centÃ­ficos, tÃ©cnico e profissional, o apoio aos interesses profissionais dos seus membros e a salvaguarda dos princÃ­pios deontolÃ³gicos que se impoÃªm em todas as actividades.</p>
                <!-- <p>By offering the best professional services and quality products in the market. Don't hesitate and get in touch with us.</p>
                <div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div> -->
                <a class="btn-outline-reg mfp-close as-button" href="#">SAIR</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

  <!-- Lightbox -->
  <div id="project-10" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">Ã—</button>
           <!-- <div class="col-lg-4">
                <img class="img-fluid" src="images/project-8.jpg" alt="alternative">
            </div> --> <!-- end of col -->
            <div class="col-lg-12">
                <h3>ESTRUTURAS</h3>
                <hr class="line-heading">
               <!-- <h6>Strategy Development</h6> -->
                <p>A Ordem tem Ã¢mbito nacional e compreende trÃªs delegaÃ§Ãµes regionais, que abrangem as Ã¡reas das seguintes provÃ­ncias:</p>
                <p>DelegaÃ§Ã£o Regional Norte: Luanda, Bengo, Cabinda, UÃ­ge, ZaÃ­re, Malange, Lunda-Norte, Lunda-Sul, Kwanza-Norte.</p>
                <p>DelegaÃ§Ã£o Regional Centro: Huambo, BiÃ©, Benguela, Kwanza-sul, Moxico.</p>
                <p>DelegaÃ§Ã£o Regional Sul: HuÃ­la, Namibe, Cunene e Kuando-Kubango.</p>
                <p>DelegaÃ§Ã£o Regional Centro: Huambo, BiÃ©, Benguela, Kwanza-sul, Moxico.</p>
            
            <!--<div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div> -->
                <a class="btn-outline-reg mfp-close as-button" href="#">SAIR</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

 <!-- Lightbox -->
 <div id="project-11" class="lightbox-basic zoom-anim-dialog mfp-hide">
        <div class="row">
            <button title="Close (Esc)" type="button" class="mfp-close x-button">Ã—</button>
           <!--  <div class="col-lg-4">
               <img class="img-fluid" src="images/project-8.jpg" alt="alternative">
            </div>--> <!-- end of col -->
            <div class="col-lg-12">
                <h3>ATRIBUIÃ‡Ã•ES</h3>
                <hr class="line-heading">
               <!-- <h6>Strategy Development</h6> -->
                <p>a) Contribuir para a defesa da saÃºde pÃºblica e qualidade de vida, atravÃ©s da salvaguarda e promoÃ§Ã£o da sanidade animal e da higiene alimentar, dentro do princÃ­pio do desenvolvimento sustentÃ¡vel.</p>
                <p>b) Zelar pela funÃ§Ã£o social, dignidade e prestÃ­gio da profissÃ£o de mÃ©dico veterinÃ¡rios e promover o respeito pelos respectivos princÃ­pios deontolÃ³gicos.</p>
                <p>c) Representar os mÃ©dicos veterinÃ¡rios perante quaisquer entidades pÃºblicas ou privadas.</p>
                <p>d) Emitir a cÃ©dula profissional de mÃ©dicos veterinÃ¡rios.</p>
                <p>e) Exercer a juridiÃ§Ã£o, disciplinar em relaÃ§Ã£o aos mÃ©dicos veterinÃ¡rios.</p>
                <p>f) Elaborar estudos e propor aos Ã³rgÃ£os competentes as medidas necessÃ¡rias a um adequado e eficaz exercÃ­cico da actividade veterinÃ¡ria, bem como emitir parecer sobre os projectos de diplomas legislativo que interessem a prossecuÃ§Ã£o das suas atribuiÃ§Ãµes.</p>
                <p>g) Emitir parecer acerca de planos de estudose cursos conducentes Ã  formaÃ§Ã£o de mÃ©dicos veterinÃ¡rios.</p>
                <p>h) Fomentar a solidariedade entre membros.</p>
                <p>e) Encentivar, dinimizar e apoiar as acÃ§Ãµes tendentes ao desenvolvimento e aprofeiÃ§oamento da medicina veterinÃ¡ria, nomeadamente atravÃ©s da organizaÃ§Ã£o por si ou em colaboraÃ§Ã£o com outras entidades, de cursos de especializaÃ§Ã£o e de reciclagem, congressos, seminÃ¡rios, conferÃªncias e outras actividades da mesma natureza.</p>
                <p>j) Intencificar a cooperaÃ§Ã£o com os organismos interessados, pÃºblicos ou privados, nacionais ou estrangeiros, em todas as materias no Ã¢mbito das actividades veterinÃ¡rias.</p>
                <!--<div class="testimonial-container">
                    <p class="testimonial-text">Need a solid foundation for your business growth plans? Aria will help you manage sales and meet your current requirements.</p>
                    <p class="testimonial-author">General Manager</p>
                </div> -->
                <a class="btn-outline-reg mfp-close as-button" href="#">SAIR</a> 
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->

    <!-- end of project lightboxes -->


    <!-- Team -->
    <div class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Membros Do Conselho Diretivo</h2>
                    <p class="p-heading">A medicina veterinÃ¡ria, traduz-se em acÃ§Ãµes que visam o bem estar e a saÃºde animal, a higiene pÃºblica veterinÃ¡ria, a inspecÃ§Ã£o de produtos de origem animal, incluindo o pescado, assistÃªncia zootÃ©cnica Ã  produÃ§Ã£o de espÃ©cies animais e assistÃªncias tecnolÃ³gica Ã  indÃºstria de produtos animais.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
            <div class="col-lg-12">

<?php
// Script de seleÃ§Ã£o da tabela dos funcionÃ¡rios BastÃ³nÃ¡rio
$script_tb_funcionario ="select tb_funcionario.cp,tb_funcionario.visivel,tb_funcionario.id_funcionario, tb_funcionario.nome, tb_funcionario.n_bi,tb_funcionario.telefone,tb_funcionario.email,tb_funcionario.imagem,tb_funcionario.data_nascimento,tb_cargo.cargo from tb_funcionario join tb_cargo where tb_cargo.id_cargo = tb_funcionario.cargo and tb_funcionario.cargo=4 and tb_funcionario.visivel='sim' limit 10";
$consulta= mysqli_query($conexao, $script_tb_funcionario);
$linhas= mysqli_num_rows($consulta);



if($linhas>0)
{
    while($tabela=mysqli_fetch_array($consulta))
    {
        
        $Nome= $tabela['nome'];
        $Email= $tabela['email'];
        $n_bi= $tabela['n_bi'];
        $telefone= $tabela['telefone'];
        $Imagem=$tabela['imagem'];
        $data_nascimento= $tabela['data_nascimento'];
        $cargo=$tabela['cargo'];
        $n_cp=$tabela['cp'];
        $visivel=$tabela['visivel'];

        $id=$tabela['id_funcionario'];

        ?>



    <!-- Team Member -->
                <div class="team-member">
                    <div class="image-wrapper">
                        <img class="img-fluid" src="Admin/imgpt/<?php echo $tabela['imagem'] ?>" alt="alternative">
                    </div> <!-- end of image-wrapper -->
                    <p class="p-large"><?php echo $Nome  ?></p>
                    <p class="job-title"><?php echo $cargo  ?></p>
                <!--   <span class="social-icons">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                    </span> -->
                </div> <!-- end of team-member -->
                <!-- end of team member -->

                <?php                          
                        }}
                        ?> 
            </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                
                <?php
                // Script de seleÃ§Ã£o da tabela dos funcionÃ¡rios
                $script_tb_funcionario ="select tb_funcionario.cp,tb_funcionario.visivel,tb_funcionario.id_funcionario, tb_funcionario.nome, tb_funcionario.n_bi,tb_funcionario.telefone,tb_funcionario.email,tb_funcionario.imagem,tb_funcionario.data_nascimento,tb_cargo.cargo from tb_funcionario join tb_cargo where tb_cargo.id_cargo = tb_funcionario.cargo and tb_funcionario.cargo=1 and tb_funcionario.visivel='sim' limit 2";
                $consulta= mysqli_query($conexao, $script_tb_funcionario);
                $linhas= mysqli_num_rows($consulta);



                if($linhas>0)
                {
                    while($tabela=mysqli_fetch_array($consulta))
                    {
                        
                        $Nome= $tabela['nome'];
                        $Email= $tabela['email'];
                        $n_bi= $tabela['n_bi'];
                        $telefone= $tabela['telefone'];
                        $Imagem=$tabela['imagem'];
                        $data_nascimento= $tabela['data_nascimento'];
                        $cargo=$tabela['cargo'];
                        $n_cp=$tabela['cp'];
                        $visivel=$tabela['visivel'];

                        $id=$tabela['id_funcionario'];

                        ?>



                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="Admin/imgpt/<?php echo $tabela['imagem'] ?>" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large"><?php echo $Nome  ?></p>
                        <p class="job-title">Secretariado</p>
                     <!--   <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span> -->
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <?php                          
                            }}
                            ?>

                <?php
                // Script de seleÃ§Ã£o da tabela dos funcionÃ¡rios
                $script_tb_funcionario ="select tb_funcionario.cp,tb_funcionario.visivel,tb_funcionario.id_funcionario, tb_funcionario.nome, tb_funcionario.n_bi,tb_funcionario.telefone,tb_funcionario.email,tb_funcionario.imagem,tb_funcionario.data_nascimento,tb_cargo.cargo from tb_funcionario join tb_cargo where tb_cargo.id_cargo = tb_funcionario.cargo and tb_funcionario.cargo=3 and tb_funcionario.visivel='sim' limit 10";
                $consulta= mysqli_query($conexao, $script_tb_funcionario);
                $linhas= mysqli_num_rows($consulta);



                if($linhas>0)
                {
                    while($tabela=mysqli_fetch_array($consulta))
                    {
                        
                        $Nome= $tabela['nome'];
                        $Email= $tabela['email'];
                        $n_bi= $tabela['n_bi'];
                        $telefone= $tabela['telefone'];
                        $Imagem=$tabela['imagem'];
                        $data_nascimento= $tabela['data_nascimento'];
                        $cargo=$tabela['cargo'];
                        $n_cp=$tabela['cp'];
                        $visivel=$tabela['visivel'];

                        $id=$tabela['id_funcionario'];

                        ?>



                    <!-- Team Member -->
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="Admin/imgpt/<?php echo $tabela['imagem'] ?>" alt="alternative">
                        </div> <!-- end of image-wrapper -->
                        <p class="p-large"><?php echo $Nome  ?></p>
                        <p class="job-title"><?php echo $cargo  ?></p>
                     <!--   <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span> -->
                    </div> <!-- end of team-member -->
                    <!-- end of team member -->

                    <?php                          
                            }}
                            ?>




                    <!-- Team Member 
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/cota.png" alt="alternative">
                        </div> end of image wrapper 
                        <p class="p-large">Veronique Smith</p>
                        <p class="job-title">Business Developer</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                    </div> --><!-- end of team-member -->
                    <!-- end of team member -->

                    <!-- Team Member 
                    <div class="team-member">
                        <div class="image-wrapper">
                            <img class="img-fluid" src="images/team-3.png" alt="alternative">
                        </div>  end of image wrapper 
                        <p class="p-large">Chris Zimerman</p>
                        <p class="job-title">Online Marketer</p>
                        <span class="social-icons">
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-facebook-f fa-stack-1x"></i>
                                </a>
                            </span>
                            <span class="fa-stack">
                                <a href="#your-link">
                                    <span class="hexagon"></span>
                                    <i class="fab fa-twitter fa-stack-1x"></i>
                                </a>
                            </span>
                        </span>
                    </div> --><!-- end of team-member -->
                    <!-- end of team member -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of team -->


    <!-- About -->
    <div id="about" class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-xl-6">
                    <div class="image-container">
                        <img class="img-fluid imgabout" src="images/centro2.jpg" alt="alternative">
                    </div> <!-- end of image-container -->
                </div> <!-- end of col -->
                <div class="col-lg-7 col-xl-6">
                    <div class="text-container">
                        <div class="section-title">Ã“RGÃƒOS DA ORDEM</div>
                        <h2>Ã“RGÃƒOS DA ORDEM</h2>
                        <p>SÃ£o Ã“rgÃ£os da Ordem</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">O Congresso</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Assembleia Geral</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">O Conselho Profissional e DeontolÃ³gico</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">O BastonÃ¡rio</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">O Conselho Fiscal</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">As Assembleias Regionais</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Os Conselhos Regionais</div>
                            </li>
                        </ul>

                        <!-- Counter -->
                        <div id="counter">
                       <!-- Mostrar o Total de inscritos que tem na base de dados -->
                        <?php
                        $codigomembros="select * from tb_membros_inscritos order by id_membros desc";
                        $consultamembros= mysqli_query($conexao,$codigomembros);
                        $linhasmembros= mysqli_num_rows($consultamembros);

                        if($linhasmembros>0)
                        {
                            ?>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="<?php echo $linhasmembros ?>">1</div>
                                <div class="counter-info">Membros<br>Inscritos</div>
                            </div>
                        <?php
                        }
                        ?>   
                         <!--   <div class="cell">
                                <div class="counter-value number-count" data-count="121">1</div>
                                <div class="counter-info">Issues<br>Solved</div>
                            </div>
                            <div class="cell">
                                <div class="counter-value number-count" data-count="159">1</div>
                                <div class="counter-info">Good<br>Reviews</div>
                            </div> -->
                        </div>
                        <!-- end of counter -->

                    </div> <!-- end of text-container -->      
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of about -->


    <!-- Contact -->
    <div id="contact" class="form-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <div class="section-title">CONTACTO</div>
                        <h2>LocalizaÃ§Ã£o</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-map-marker-alt"></i>CondomÃ­nio Vila de Luanda, EdifÃ­cio Mavinga, 4Âº Andar, Apartamento 406 (Frente a Filda)</li>
                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">222 327 286</a></li>
                            <li><i class="fas fa-phone"></i><a href="tel:003024630820">+244 932 131 935</a></li>
                            <li><i class="fas fa-envelope"></i><a href="mailto:geral@omvangola.co.ao">geral@omvangola.co.ao</a></li>
                        </ul>
                        <h2>HorÃ¡rio de Funcionamento</h2>
                        <ul class="list-unstyled li-space-lg">
                            <li class="address"><i class="fas fa-clock"></i>Segunda - Feira   : 08h:00 - 15h:30min</li>
                            <li class="address"><i class="fas fa-clock"></i>Quarta - Feira   : 08h:00 - 15h:30min</li>
                            <li class="address"><i class="fas fa-clock"></i>Sexta - Feira   : 08h:00 - 15h:30min</li>
                        </ul>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.2876366109567!2d13.290540415140766!3d-8.852790593125865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f13705cd93a5%3A0xf465c27e4f5c489e!2sEdif%C3%ADcio%20Mavinga%2C%20Rua%20da%20Filda%2C%20Condominio%20Vilas%20de%20Luanda%2C%20Bloco%20Filda%202%2C%20Luanda!5e0!3m2!1spt-PT!2sao!4v1612864169226!5m2!1spt-PT!2sao" width="450" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                   
              <!--            <h3>Follow Aria On Social Media</h3>

                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-pinterest fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <span class="hexagon"></span>
                                <i class="fab fa-behance fa-stack-1x"></i>
                            </a>
                        </span>
                        -->
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    
                    <!-- Contact Form -->
                    <form method="post" action="salvarsms.php">
                    
                        <div class="form-group">
                            <input type="text" name="nome" class="form-control-input" id="cname" required>
                            <label class="label-control"  for="cname">Nome</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input"  name="email" id="cemail" required>
                            <label class="label-control" for="cemail" >Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="number" name="telefone" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail" >Telefone</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" name="mensagem" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage" >Escreve A Sua Mensagem</label>
                            <div class="help-block with-errors"></div>
                        </div>
                       
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Enviar Mensagem</button>
                        </div>
                      
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form-2 -->
    <!-- end of contact -->

  <!-- Footer -->
  <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-container about">
                        <h4>ORDEM DOS MÃ‰DICOS VETERINÃRIOS DE ANGOLA</h4>
                        <p class="white">A Ordem tem membros efectivos e membros extraordinÃ¡rios (correspondentes e honorÃ¡rios) podem inscrever-se, como membros efectivos, os angolanos ou estrangeiros que residem em Angola, licenciados em medicina veterinÃ¡ria pelas universidades em Angola e ainda os angolanos e estrangeiros, habilitados com cursos ministrados em universidades estrangeiras reconhecidos nos termos da legislaÃ§Ã£o aplicÃ¡vel.</p>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Parceiros</h4>
                        <ul class="list-unstyled li-space-lg white">
                            <li>
                                <a class="white" href="#your-link">F.M.V</a>
                            </li>
                            <li>
                                <a class="white" href="isv.php">I.S.V</a>
                            </li>
                            <li>
                                <a class="white" href="privacy-policy.html">I.I.V</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-md-2">
                    <div class="text-container">
                        <h4>Acerca</h4>
                        <ul class="list-unstyled li-space-lg">
                            <li>
                                <a class="white" href="antecedentes.php">ANTECEDENTES</a>
                            </li>
                            <li>
                               <a class="white" href="camvac.php">C.A.M.V.A.C</a>
                            </li>
                            <li>
                               <a class="white" href="recmv.php">R.E.C.M.V</a>
                            </li>
                            <li>
                               <a class="white" href="omva.php">O.M.V.A</a>
                            </li>
                            <li class="media">
                                <a class="white" href="membros.php">MEMBROS</a>
                            </li>
                        </ul>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright Â© 2021 <a href="#">VGA SOFT</a></p> 
                    <!-- Login icon-->
                    <span class="fa-stack">
                        <a href="login.php">
                            <span class="hexagon"></span>
                            <i class="fab fa-android fa-stack-1x"></i>
                        </a>
                    </span>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->


        <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- Isotope for filter -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>
