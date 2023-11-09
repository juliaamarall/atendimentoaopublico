<?php
include('layout/header.php');
 ?>
<body>

    <!-- NAV  -->
    <?php
    include('layout/nav.php');
    ?>
    <!-- FIM DA NAV -->

    <!-- menu lateral  -->
    <?php
    include('layout/menu.php');
    ?>

    <div class="all-conteudo">
        <section>
            <div class="main-content container-fluid">



                <div class="row">
                    <!-- Begin row -->
                    <div class="col-md-1"></div>
                    <div class="col-md-10 col-sm-8 container-fluid">

                        <h2 class="Titulo fw-bolder">Apresentação</h2>
                        <!-- IMAGEM 01 DO TÓPICO DE APRESENTAÇÃO -->
                            <div class="container">
                                <img src="imgs/Figura01.png" alt="Imagem da capa do curso com o títilo ÉTICA E SERVIÇO PÚBLICO" class="img-fluid">
                            </div>
                        <!-- FIM DA IMAGEM DE APRESENTAÇÃO   -->

                        <div class="text-left">
                            <p>Desde tempos imemoráveis, a conduta humana tem sido objeto de estudo. A ética é um dos tantos ramos da filosofia e se dedica, resumidamente, ao estudo da moral em todas as suas manifestações. Ela é uma das mais altas ou mais avançadas maneiras de harmonização e convivência social. Nas décadas recentes, a abordagem sobre ética vem adquirindo cada vez mais espaço, em particular, em virtude da grande extensão de práticas perversas que tem se apresentado em grande partes do mundo, em particular, em diversas instituições públicas e privadas. Assim, algumas questões contemporâneas são postas pela ética, dentre elas: em que consiste a felicidade? O que torna uma ação boa ou má? Justa ou injusta.</p>
                        </div>

                        <h2 class="Titulo fw-bolder">Objetivo</h2>
                        <p><i class="fa fa-dot-circle text-success"></i> Apresentar uma sumária conceituação de ética e moral, bem como alguns sistemas éticos e seus teóricos ao longo da história (períodos clássico grego, moderno e contemporâneo).</p>

                    
                        

                        <ul class="none">
                            <li class="img-fluid wow fadeInLeft" data-wow-delay="0.3s"><i></i>
                                <h4>
                                    Olá, Nome_Completo bem-vindo ao módulo 01 do curso de Gestão do tempo. Bons estudos!
                                </h4>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </section>


        <!-- Botões de navegação -->
        <div class="text-center">
            <a href="topico01.php" class="btn btn-outline-success" role="button" aria-pressed="true">Próximo <i
                    class="bi bi-chevron-right"></i></a>
        </div>


        <div id="progress-bar"></div>
    </div>
<?php
include('layout/footer.php');
?>
</body>

</html>