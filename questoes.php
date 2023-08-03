
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>rrCONCURSOS/questoes</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header class="header">
            <div class="dv1">
                <div class="l1e">
                   <div class="bluep"><img src="img/rr.jpeg" height="35px"></div>
                    <ul class="ul1">
                        <li><a href="index.php">menu</a></li>
                    </ul>
                </div>
                <h1>rr CONCURSOS</h1>
               <ul class="ul2">
                   <li><a href="ajuda.html">ajuda</a></li>
                   <li><a href="assinar.html">assinar</a></li>
                   <li><a href="login.php">entrar</a></li>
               </ul>
            </div>
            

           <div class="l2">
               
                    <li><a href="index.php">INICIO</a></li>
                    <li><a href="vestibular.html">VESTIBULAR</a></li>
                    <li><a href="aulas.html">AULAS</a></li>
                    <li><a href="questoes.html">QUESTÕES</a></li>
               

               
                    <li><a href="outroscads.html">OUTROS CADERNOS</a></li>
                    <li><a href="noticias.html">NOTICIAS</a></li>
                    <li><a href="infos.html">+INFOS</a></li>
               
            </div>

        </header>
        <section class="principal">

            <aside class="aside">
                <ul>
                    <li><a href="caderno.html">CADERNOS</a></li>
                    <li><a href="configs.html">CONFIGS</a></li>
                    <li><a href="filtros.html">FILTROS</a></li>
                </ul>

            </aside>
            <main class="main1">
                <div class="qmain">
                
                    banca:desconheida<br>
                    instituição:desconhecida<br>
                    ano:2023<br>
                    
                    <form method="post">
                    
                        <p>Quanto e 12*12+3 ?</p>
                        <input type="radio" name="respostai" value="a"> a) 147<br>
                        <input type="radio" name="respostai" value="b"> b) 246<br>
                        <input type="radio" name="respostai" value="c"> c) 784<br>
                        <input type="radio" name="respostai" value="d"> d) 146<br>
                        <input type="submit"  name="verifica" value="verificar">
                    </form>
                    <br>

                    
                   <div id="resultadoi">
                        <?php
    
                            if(isset($_POST['verifica'])) {
                                $respos = $_POST["respostai"];
                      
     
                                if ($respos == "d") {
                                    echo "Resposta correta!";
                                    echo '<style>#resultadoi { background-color: green; }</style>';
           
                                } 
                                else {
                                    echo "Resposta incorreta!";
                                    echo '<style>#resultadoi { background-color: red; }</style>';
          
                               }
                            }
                        ?>
                      

                    </div>
                </div>

                <div class="q2m">
                    <form method="post">
                        
                    banca:desconheida<br>
                    instituição:desconhecida<br>
                    ano:2023<br>
                        <p>Qual é a capital do Brasil?</p>
                        <input type="radio" name="resposta" value="a"> a) Brasília<br>
                        <input type="radio" name="resposta" value="b"> b) São Paulo<br>
                        <input type="radio" name="resposta" value="c"> c) Rio de Janeiro<br>
                        <input type="radio" name="resposta" value="d"> d) Belo Horizonte<br>
                        <input type="submit"  name="verificar" value="verificar">
                    </form>
                    <br>

                    
                    <div id="resultado">
                    <?php
                        
                        if (isset($_POST['verificar'])) {
                           
                            $resposta = $_POST["resposta"];

                         
                            if ($resposta == "a") {
                                echo "Resposta correta!";
                                echo '<style>#resultado { background-color: green; }</style>';
                               
                            } 
                            else {
                                echo "Resposta incorreta!";
                                echo '<style>#resultado { background-color: red; }</style>';
                              
                            }
                        }
                    ?>
                   
                    </div>
                </div>

            </main>
            <aside class="propagand">
               <div class="prop1">
               <img src="img/prop.jpg" height="250px" width="175px"  >
               </div>
               <div class="prop2">
               <img src="img/rrcurs.jpg" height=250px width="175px" >
               </div>
            </aside>
        </section>

        <footer>
            <ul>
                <li class="ulf">RR CONCURSOS</li>
                <li class="ulf">Provas</li>
                <li class="ulf">Video aulas</li>
                <li class="ulf">Disciplinas</li>
                <li class="ulf">Sobre Nós</li>
                
            </ul>
            <ul>
                <li class="ulf">PAGINAS ÚTEIS</li>
                <li class="ulf">Noticias</li>
                <li class="ulf">Como usar o RR CONCURSOS</li>
                <li class="ulf">Avalie-nos</li>
            </ul>
            <div class="bluep2">RR CONCURSOS</div>


        </footer>



    </body>






</html>