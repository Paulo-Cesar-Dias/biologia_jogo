<?php

    $final = 0;
    $pq = 0;
    $pt = 0;
    $usuario = "";
    $alt = "";
    $jaexe = "";
    $recomeco = "";

    $class=array("normal","normal","normal","normal");
    $perguntas[0]["questao"]="1. Qual o sistema responsável pela formação dos detritos que saem do nosso corpo oriundos dos alimentos sólidos que consumimos? ";
    $perguntas[0][0]=array("Sistema endócrino",false,"Você errou, infelizmente, esse não é o sistema correto e sim o digestório!");
    $perguntas[0][1]=array("Sistema digestório",true,"Parabéns, o sistema digestório realmente é o sistema responsável não por digerir os alimentos e extrair as substâncias necessárias, porém, é através dele que as fezes são formadas e excretadas!");
    $perguntas[0][2]=array("Sistema excretor",false,"Você errou, infelizmente, esse não é o sistema correto e sim o digestório!");
    $perguntas[0][3]=array("Sistema cardiovascular",false,"Você errou, infelizmente, esse não é o sistema correto e sim o digestório!");

    //2
    $perguntas[1]["questao"]="2. “Os néfrons são unidades básicas de órgãos como o(s) ________, esses órgãos são
    componentes diretos do sistema ________.” Complete as lacunas da frase com a
    alternativa correta.
    ";
    $perguntas[1][0]=array("bexiga e respiratório respectivamente",false,"Você errou, infelizmente, infelizmente o órgão correto são os rins que estão localizados no sistema urinário.");
    $perguntas[1][1]=array("faringe e circulatório respectivamente",false,"Você errou, infelizmente, infelizmente o órgão correto são os rins que estão localizados no sistema urinário.");
    $perguntas[1][2]=array("rins e urinário respectivamente",true,"Parabéns, os néfrons são as unidades básicas dos rins que estão situados no sistema urinário. São os néfrons inclusive os responsáveis pela produção da urina.");
    $perguntas[1][3]=array("estômago e digestório",false,"Você errou, infelizmente, infelizmente o órgão correto são os rins que estão localizados no sistema urinário.");

    //3
    $perguntas[2]["questao"]="3. Porque é importante a respiração pelo nariz, ao invés da respiração pela boca.
    ";
    $perguntas[2][0]=array("Porque as vias nasais possuem a capacidade de filtragem e umidificação do ar
    ",true,"Parabéns, as vias nasais são um dos primeiros locais por onde passa o ar que respiramos, nesse sentido, são essas vias que também possuem os mecanismos de “preparação do ar” para ser utilizado, isso envolve a remoção de impurezas e umedecimento do ar.

    ");
    $perguntas[2][1]=array("Porque respirar pela boca compromete o sistema respiratório
    ",false,"Você errou, as vias nasais possuem todo o sistema de filtragem e umidificação do ar.
    ");
    $perguntas[2][2]=array("Porque respirar pelo nariz permite que o O2 chegue mais rápido nas células
    ",false,"Você errou, as vias nasais possuem todo o sistema de filtragem e umidificação do ar.
    ");
    $perguntas[2][3]=array("Porque a respiração feita pela boca compromete o paladar graças as impurezas",false,"Você errou, as vias nasais possuem todo o sistema de filtragem e umidificação do ar.
    ");

    //4
    $perguntas[3]["questao"]="4. Qual o sistema responsável por possuir as glândulas de produção das substâncias que o
    corpo humano precisa para algumas de suas funções.
    ";
    $perguntas[3][0]=array("Sistema endócrino",true,"Parabéns, o sistema endócrino é o sistema responsável pela produção dos hormônios utilizados para o bom funcionamento do nosso corpo. 
    ");
    $perguntas[3][1]=array("Sistema imunológico",false,"Você errou, a resposta correta seria o sistema endócrino.");
    $perguntas[3][2]=array("Sistema respiratório",false,"Você errou, a resposta correta seria o sistema endócrino.");
    $perguntas[3][3]=array("Sistema urinário",false,"Você errou, a resposta correta seria o sistema endócrino.");

    //5
    $perguntas[4]["questao"]="5. No sistema imunológico, quais as células responsáveis pelo estímulo de outras células a
    combaterem as células contaminadas?";
    $perguntas[4][0]=array("Macrófagos",false,"Você errou, a opção correta seria os linfócitos T auxiliadores.
    ");
    $perguntas[4][1]=array("Linfócitos T auxiliadores",true,"Parabéns, os linfócitos T auxiliadores funcionam como receptores de informações sobre as células contaminadas e estimula imediatamente aos linfócitos B e T citotóxicos a agirem rapidamente.
    ");
    $perguntas[4][2]=array("Linfócitos T citotóxicos",false,"Você errou, a opção correta seria os linfócitos T auxiliadores.
    ");
    $perguntas[4][3]=array("Linfócitos B",false,"Você errou, a opção correta seria os linfócitos T auxiliadores.
    ");

    //6
    $perguntas[5]["questao"]="6. Qual a função do sistema nervoso central?";
    $perguntas[5][0]=array("Pensar nas coisas que vão ser feitas no dia-a-dia",false,"Você errou, a opção correta seria os linfócitos T auxiliadores.

    ");
    $perguntas[5][1]=array("Interpretar as informações captadas pelos órgãos sensoriais",true,"Parabéns, os linfócitos T auxiliadores funcionam como receptores de informações sobre as células contaminadas e estimula imediatamente aos linfócitos B e T citotóxicos a agirem rapidamente.
    ");
    $perguntas[5][2]=array("Ser composto pela medula espinal e o encéfalo",false,"Você errou, a opção correta seria os linfócitos T auxiliadores.

    ");
    $perguntas[5][3]=array("Receber os estímulos nervosos de diversas partes do corpo",false,"Você errou, a opção correta seria os linfócitos T auxiliadores.

    ");

    //7
    $perguntas[6]["questao"]="7. No sistema digestório, qual o órgão que apresenta atuação dos sucos pancreáticos e
    entérico";
    $perguntas[6][0]=array("Intestino delgado",true,"Parabéns, é numa parte do intestino delgado chamado duodeno, que ocorre a ingestão do quimo. Nesse processo, o suco entérico rico em enzimas digestivas é produzido e liberado no processo, onde há também a atuação do suco pancreático produzido pelo pâncreas.
    ");
    $perguntas[6][1]=array("Faringe",false,"Você errou, é no intestino delgado que podemos ver a atuação desses dois tipos de suco produzidos pelo nosso corpo.");
    $perguntas[6][2]=array("Intestino grosso",false,"Você errou, é no intestino delgado que podemos ver a atuação desses dois tipos de suco produzidos pelo nosso corpo.");
    $perguntas[6][3]=array("Estômago",false,"Você errou, é no intestino delgado que podemos ver a atuação desses dois tipos de suco produzidos pelo nosso corpo.");

    //8
    $perguntas[7]["questao"]="8. Quais os hormônios produzidos pelo sistema endócrino, são atuantes diretos no controle
    da glicose no corpo humano.";
    $perguntas[7][0]=array("Aldosterona, cortisol e epinefrina",false,"Você errou, são a insulina e o glucagon responsáveis por esse processo.
    ");
    $perguntas[7][1]=array("Insulina e glucagon",true,"Parabéns, a insulina é responsável pela promoção da entrada de glicose nas células e o glucagon é o responsável pela síntese e liberação da glicose no fígado.
    ");
    $perguntas[7][2]=array("Progesterona e testosterona",false,"Você errou, são a insulina e o glucagon responsáveis por esse processo.
    ");
    $perguntas[7][3]=array("Paratormônio e calcitonina",false,"Você errou, são a insulina e o glucagon responsáveis por esse processo.
    ");
        
    //9
    $perguntas[8]["questao"]="9. No Sistema cardiovascular, qual a função do coração e do pulmão respectivamente.";
    $perguntas[8][0]=array("Oxigenar o sangue e permitir a circulação pelo corpo",false,"Você errou, na verdade é permitir a circulação pelo corpo e oxigenar o sangue.
    ");
    $perguntas[8][1]=array("Permitir a circulação pelo corpo e oxigenar o sangue",true,"Parabéns, o coração é responsável pela troca de sangue oxigenado pelo não oxigenado, de maneira que o seu bombeamento permite que o sangue chegue em todo o corpo. Já o pulmão é responsável por pegar o sangue sem oxigênio e oxigená-lo, de maneira que o gás seja passado para as células.");
    $perguntas[8][2]=array("Bombear o sangue pelo corpo e trazer o revestir o coração",false,"Você errou, na verdade é permitir a circulação pelo corpo e oxigenar o sangue.
    ");
    $perguntas[8][3]=array("Oxigenar o sangue e bater rápido em um momento de desespero e agonia.",false,"Você errou, na verdade é permitir a circulação pelo corpo e oxigenar o sangue.
    ");

    //10
    $perguntas[9]["questao"]="No sistema urinário, qual a parte do sistema responsável por conduzir a urina produzida?";
    $perguntas[9][0]=array("Bexiga",false,"Você errou, a parte responsável por isso é constituída pelos ureteres.");
    $perguntas[9][1]=array("Rins",false,"Você errou, a parte responsável por isso é constituída pelos ureteres.");
    $perguntas[9][2]=array("Néfrons",false,"Você errou, a parte responsável por isso é constituída pelos ureteres.");
    $perguntas[9][3]=array("Ureteres",true,"Parabéns, os ureteres têm a função de ser como um canal entre os rins e bexiga para o armazenamento da urina pronta para ser excretada.
    ");

    if(isset($_POST['proximo'])){
        $pq = $_POST['passar'] + 1;
        $pt = $_POST['pontos'];
        $usuario= $_POST['usuario'];
    }

    if(isset($_POST['finalizar'])){

        $final = $_POST['finalizar'];
        $pq = $_POST['passar']+1;
        $pt = $_POST['pontos'];
        $usuario = $_POST['usuario'];
    }

    if(isset($_POST['recomeco'])){
        $pq = $_POST['passar'];
        $usuario = "";
    }

    if(isset($_POST['alternativa'])){
        $usuario= $_POST['usuario'];
        $alt = $_POST['alternativa'];
        $pt = $_POST['pontos'];
        $pq = $_POST['passar']-1;
        $jaexe = "disabled";

        if(is_numeric($alt)){

            if($perguntas[$pq][$alt][1]==true){

                echo "<div class='sucesso'>
                       ".$perguntas[$pq][$alt][2]."
                    </div>";
                $pt = $pt+100;
                $class[$alt]="parabens";  

            }else{

                $alt = $_POST['alternativa'];
                echo "<div class='errado'>
                ".$perguntas[$pq][$alt][2]."
                    </div>";
                $class[$alt]="errou";
                if ($pt>50) {
                   
                    $pt = $pt-50;
                }

            }    
        }
        $pq = $_POST['passar'];
    }

function perguntas($posicao){

    global $perguntas,$pt,$class,$jaexe,$usuario;
   
    if($posicao==0){
        
        echo " 
        <center>
            <section class='area-teste'>
                <div class='teste'>
                    <div class='questao". $posicao ."'>
                        <center>
                            <h1>INSIRA SEU NOME</h1>
                            <input type='text' 
                            placeholder = 'Nickname' name ='usuario' autocomplete= 'off'><br><br>
                            
                            <input type='submit' name='proximo' value='Começar'> 
                        </center>
                    </div>
                </div>
            </section>
        </center>";

    }else{

        $posicao--;

        if($posicao<10){
            echo "
            <center>
                <div class='questao". $posicao+1 ."'><br>";

                    echo "<div class='ponto'>" . 
                            "Ponto(s): " . $pt . 
                        "</div>";

                    echo "<br>";

                    echo "<label for=''>" . $perguntas[$posicao]['questao'] . "</label><br><br>
                    <div class=". $class[0] .">
                        <input class='chora_nao' type='submit' ". $jaexe ." name='alternativa' value='0'>
                        <label for=''>" . $perguntas[$posicao][0][0] . "</label><br>
                    </div>
                    <div class=". $class[1] .">    
                        <input class='chora_nao' ". $jaexe ." type='submit' name='alternativa' value='1'>
                        <label for=''>" . $perguntas[$posicao][1][0] . "</label><br>
                    </div>
                    <div class=". $class[2] .">
                        <input class='chora_nao' ". $jaexe ." type='submit' name='alternativa' value='2'>
                        <label for=''>" . $perguntas[$posicao][2][0] . "</label><br>
                    </div>
                    <div class=". $class[3] .">
                        <input class='chora_nao' ". $jaexe ." type='submit' name='alternativa' value='3'>
                        <label for=''>" . $perguntas[$posicao][3][0] . "</label>
                    </div>
                    
                    <br>";

                    if($posicao == 9){
                        echo "<input type='submit' name='finalizar' value='Finalizar'>";
                    }else{
                        echo "<input type='submit' name='proximo' value='Próximo'>";
                    }

            echo "
                </div> 
            </center>";
        }else{
            echo "<div class = 'finalizando'>
                    Sucesso " . $usuario . "! Sua pontuação foi: " . $pt . " de 1000";
                echo 
                "</div><br><br>";

                echo "<center><input class='recomeco' type='submit' name='recomeco' value='Recomeçar'>
                    <input type='text' name='passar' hidden value='0'></center>";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Quiz</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="style1.css">
    <script src='main.js'></script>
</head>
<body>
<div class="container-fluid">

    <form action="arquivo1.php" method="post">
    <input type="text" name="usuario" hidden value="<?php echo $usuario?>"/>
        <input type="text" name="passar" hidden value="<?php echo $pq?>"/>
        <input type="text" name="pontos" hidden value="<?php echo $pt?>"/>
        <?php perguntas($pq) ?>
    </form>

</div>
</body>
</html>