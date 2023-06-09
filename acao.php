<?php
// verificar dados enviados
// echo 'Dados enviados:<br>';
// echo '<pre>';
// var_dump($_POST);
// echo '</pre>';

define('JSON',$_SERVER['DOCUMENT_ROOT'].'/LISTADETAREFA.json');

function carregaDadosFormParaVetor(){
    $destino = '';
    if (isset($_FILES['foto'])){
        // define a pasta destino do arquivo feito upload
        $destino = '../imagens/'.$_FILES['foto']['name'];
        // move o arquivo para a pasta destino
        move_uploaded_file($_FILES['foto']['tmp_name'],$destino);
    }

    // pega informação enviada via post e guarda no vetor dados   
    $dados = array( 'id' => isset($_POST['id'])?$_POST['id']:0,  // teste ISSET é para verificar se os dados foram enviados
                    'nome' => isset($_POST['nome'])?$_POST['nome']:'',
                    'sexo' => isset($_POST['sexo'])?$_POST['sexo']:'',
                    'parente' => isset($_POST['parente'])?$_POST['parente']:'',
                    'origem' => isset($_POST['origem'])?$_POST['origem']:'',
                    'rede' => isset($_POST['rede'])?$_POST['rede']:'',
                    'estado' => isset($_POST['estado'])?$_POST['estado']:'',
                    'cidade' => isset($_POST['cidade'])?$_POST['cidade']:'',
                ); 
    return $dados; 

}


function inserir($lISTADETAREFA){ // atualiza arquivo com todos os dados
    $dados = carregaDoArquivoParaVetor();
    $LISTADETAREFA['id'] = nextID($dados);
    if (validaDados($LISTADETAREFA)){
        if ($dados){ 
            array_push($dados,$LISTADETAREFA);
        }else{
            $dados[] = $LISTADETAREFA;
        }
        salvaDadosNoArquivo($dados);
        return true;
    }
    return false;
}

function salvaDadosNoArquivo($dados){
    file_put_contents(JSON,json_encode($dados));    
}

function nextID($dados){
    $id = 0;
    if ($dados)
        $id = intval($dados[count($dados)-1]['id']);
    return ++$id;
}

function carregaDoArquivoParaVetor(){
    if (file_exists(JSON)){
        $conteudo = file_get_contents(JSON);
        $LISTADETAREFA = json_decode($conteudo,true);
        return $LISTADETAREFA;
    }
 
    return null;

}

function validaDados($dados){

    foreach($dados as $campo){  // apenas verifica se tem algum campo em branco
        if ($campo == '')
            return false;
    }
    return true;
}

function excluir($id){
    $dados = carregaDoArquivoParaVetor();
    $i = 0;
    foreach($dados as $LISTADETAREFA){
        if ($LISTADETAREFA['id'] == $id)
            break;
        else
        $i++;
    }
    array_splice($dados,$i,1);
    salvaDadosNoArquivo($dados);
}

function buscaLISTADETAREFA($id){
    $dados = carregaDoArquivoParaVetor();
    foreach($dados as $LISTADETAREFA){
        if ($LISTADETAREFA['id'] == $id)
            return $LISTADETAREFA;
    }
}

function alterar($alterado){
    $dados = carregaDoArquivoParaVetor();
    $i = 0;
    foreach($dados as $LISTADETAREFA){
        if ($LISTADETAREFA['id'] == $alterado['id'])
            break;
        else
        $i++;
    }
    array_splice($dados,$i,1,array($alterado));
    salvaDadosNoArquivo($dados);  
}


$acao = isset($_POST['acao'])?$_POST['acao']:'';

if ($acao =='salvar'){

    $LISTADETAREFA = carregaDadosFormParaVetor();
    if ($LISTADETAREFA['id'] == 0){
        if (inserir($LISTADETAREFA))
            header('location: ../index.php');
    }else{    
        alterar($LISTADETAREFA);
        header('location: ../index.php');

    }
}
else{

    $acao = isset($_GET['acao'])?$_GET['acao']:'';
    $id = isset($_GET['id'])?$_GET['id']:'';
    
    if ($acao == 'excluir'){
        excluir($id);
    }else if($acao == 'editar'){
        $LISTADETAREFA = buscaLISTADETAREFA($id);
        
        
    }
}
?> 