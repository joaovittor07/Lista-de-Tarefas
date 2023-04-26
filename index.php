<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTATO</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
<body>
<div class="container">
    <div class="row">

        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <img src="https://www.prog.uema.br/wp-content/uploads/2017/10/Phone-Icon.png" height="100" width="100">
                    <h1>LISTA DE CONTATOS</h1>
    <p>
    <form>

        <table border="1">

        <thead><tr>

            <td>

                <label for="nome">1. Nome</label>
                <input type="text" id="nome" name="nome"> <p>
        
                <label for="data1">2. Data</label>
                <input type="date" id="data1" name="data1"> <p>
        
                <label for="prioridades">3. Prioridades</label><p>
        
                <label for="estado">4. Estados</label>
                    <select id="estado" name="estado">
                        <option value="">Selecione um estado</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select><p>
        
                <label for="observacao">5. Observação</label> <p>
                <textarea name="observacao" id="observacao" cols="50" rows="4"></textarea> <p>
        
                <label for="categorias">6. Categorias</label>
                    <select id="categorias" name="categoria">
                        <option value="">Selecione uma categoria</option>
                        <option value="Trabalho">Trabalho</option>
                        <option value="Casa">Casa</option>
                        <option value="Pessoal">Pessoal</option>
                        <option value="Finanças">Finanças</option>
                        <option value="Saúde">Saúde</option>
                        <option value="Projetos">Projetos</option>
                        <option value="Educação">Educação</option>
                    </select>
                    <p>
        
                <label for="Recorrência">7. Recorrência</label>
                    <select id="Recorrência" name="recorrencia">
                        <option value="">Selecione uma recorrência</option>
                        <option value="Pagar">Pagar</option>
                        <option value="Limpeza">Limpeza</option>
                        <option value="Reuniões Regulares">Reuniões Regulares</option>
                        <option value="Atividades">Atividades</option>
                        <option value="Planejamento Financeiro">Planejamento Financeiro</option>
                    </select>
                    <p>

            </td>

        </thead></tr>

        </table> 

        <p>
        <br>
        <input type="submit" value="Enviar">
        <br>

         
    
    </form> 
    
</center>

<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<SCript src="js/popper.min.js"></SCript>
<script src="js/formulario.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
</body>
</html>