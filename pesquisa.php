<?php
    include_once('acao.php'); // incluir para usar a função de carregar os dados 

    $busca = isset($_POST['busca'])?$_POST['busca']:''; // captura a variável enviada pelo formulário

    if ($busca != ''){ 
        $LISTADETAREFA = carregaDoArquivoParaVetor(); // carrega os LISTADETAREFA do arquivo para a variável LISTADETAREFA
        $cont = []; // vetor para armazenar os resultados da pesquisa
        foreach($LISTADETAREFA as $LISTADETAREFA){ // percorre todos os elementos do vetor LISTADETAREFA
            if ($LISTADETAREFA['nome'] == $busca || $LISTADETAREFA['sobrenome'] == $busca){ // verifica se as informações conferem com a pesquisa
                $cont[] = $LISTADETAREFA; // ai acrescenta aos resultados
                
            }
        }
        echo json_encode($cont); // retorna as informações codificadas no formato JSON
    }
    
    

?>