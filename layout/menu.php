    <!-- PLUGIN DO FADE IN -->

    <style>
        .MenuTopico {
            color: #274F23 !important;
            font-weight: bold !important;
        }

        #menuNumero {
            color: #274F23;
            font-weight: bold !important;
            font-size: 1.2rem;
            padding-right: 0.3rem;
            margin-left: 0;
            margin-right: 0.4rem;
            font-family: "Raleway";
            right: 0.8rem;
            margin-top: -0.23rem;
        }

        .ativo {
            background-color: #e1ebe3;
        }
    </style>

    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active ps">
                <div class="m-4 mx-auto text-center">
                    <!-- <a href="index.php">
                    <img class="img-fluid" src="https://atilasilvalima.a2hosted.com/projects/EGPCE/Cedis/cdn/imagens/egpce.png" alt="Logo EGPCE">
                    </a> -->
                    <img class="img-fluid img-responsive" src="https://www.egp.ce.gov.br/wp-content/uploads/sites/8/2021/06/logo-egpce-250x170-1.png" height="140" width="140" alt="Logo EGPCE">
                </div>
                <div class="sidebar-menu">

                    <ul class="menu ms-3">

                        <li class="sidebar-item">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="index.php" class="MenuTopico sidebar-link <?php if($page=='index'){echo'ativo';}?>"><span id="menuNumero"> </span>Apresentação </a>
                            </div>
                        </li>

                        <li class="sidebar-item sidebar-item1">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico01.php" class="MenuTopico sidebar-link <?php if($page=='Topico01'){echo 'ativo';}?>">
                                    <div id="menuNumero">01 </div>Alinhamento Estratégico
                                </a>

                                <ul class="sublinks">
                                 <li><a href="#one">1.1 A Certificação De Fornecedores Como Um Elo Nas Cadeias De Suprimentos</a></li>
                                 
                                 <li><a href="#two">1.2 A Certificação De Fornecedores Na Administração Pública</a></li>
                                 <li><a href="#tree">1.3 A Certificação De Fornecedores No Governo Do Estado Do Ceará</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-item sidebar-item2">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico02.php" class="MenuTopico sidebar-link <?php if($page=='Topico02'){echo 'ativo';}?>">
                                    <div id="menuNumero">02 </div>Agenda Estratégica Setorial: conceitos
                                </a>

                                <ul class="sublinks">
                                 <li><a href="#top2-one">2.1 Parâmetros Excludentes: Análise de Casos e Empregos Específicos</a></li>
                                 
                                 <li><a href="#top2-two">2.2 Exemplos de Itens Considerados Materiais Permanentes</a></li>
                                 <li><a href="#top2-tree">2.3 Exemplos de Itens Considerados Materiais de Consumo</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="sidebar-item sidebar-item3">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Topico03.php" class="MenuTopico sidebar-link <?php if($page=='Topico03'){echo 'ativo';}?>">
                                    <div id="menuNumero">03 </div>Agenda Estratégica Setorial: estrutura
                                </a>

                                <ul class="sublinks">
                                 <li><a href="#top3-one">3.1 Atributos Adicionais a Serem Considerados na Classificação de Materiais</a></li>
                                 
                                 <li><a href="#top3-two">3.2 Formas De Classificação De Materiais</a></li>
                                 <li><a href="#top3-tree">3.3 Estrutura Básica de Um Catálogo de Bens, Materiais e Serviços</a></li>
                                </ul>
                            </div>
                        </li>
                        
                        <li class="sidebar-item">
                            <div class="bd-callout-menu bd-callout-success-menu">
                                <a href="Referencias.php" class="MenuTopico sidebar-link <?php if($page=='Referencias'){echo 'ativo';}?>">Referências
                                </a>             
                            </div>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
    
    </div>
    <!-- SCRIPT - JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $('ul li a').click(function() {
                $('li a').removeClass("ativo");
                $(this).addClass("ativo");
            });
        });
    </script>
