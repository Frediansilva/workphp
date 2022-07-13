<?php
    error_reporting(E_ERROR | E_PARSE);
    $lnk = mysqli_connect('localhost','esferate_root','Fr79461279') or die(mysqli_error()) or die ('Nao foi possível conectar ao MySql: ' . mysqli_error($lnk));
    mysqli_select_db($lnk,'sky_sirius') or die ('Nao foi possível ao banco de dados selecionado no MySql: ' . mysqli_error($lnk));

    $sql = 'SELECT * FROM upfotos ORDER BY nome ASC';
    $nome = @$_POST['NOME'];

    if(!is_null($nome) && !empty($nome)) 
        $sql = "SELECT * FROM $upfotos WHERE nome LIKE '".$nome."' ORDER BY nome ASC";

    $qry = mysqli_query($lnk, $sql) or die(mysqli_error($lnk));
    $count = mysqli_num_rows($qry);
    $num_fields = @mysqli_num_fields($qry);//Obtém o número de campos do resultado
    $fields[] = array();
    if($num_fields > 0) {
        for($i = 0;$i<$num_fields; $i++){//Pega o nome dos campos
            $fields[] = mysqli_fetch_field_direct($qry,$i)->name;
        }
    }
?>

<h1 style="
    text-align: center;
    height: 7;
    margin-top: 150;
    margin-bottom:70;
"> Consulta de formações </h1>

<body>
<form method="post" >
    <div class="col-lg-3">
        <div class="form-group">
            <label for="NOME">Nome: </label>
            <input class="form-control" id="NOME" placeholder="Nome do colaborador" name="NOME">
        </div>
    </div>
    <button type="submit" class="btn btn-primary" style="margin-top: 24;">Buscar</button>
</form>
<!--Filtro de busca-->

<?php
    if(!is_null($nome) && !empty($nome)) {
        if($count > 0) {
            echo 'Encontrado registros com o nome ' . $nome;
        } else {
            echo 'Nenhum registro foi encontrado com o nome ' . $nome;
        }
    }
?>

<!--Tabela com as buscas-->
<?php
//Montando o cabeçalho da tabela
$table = '<table class="table table-hover table-inverse" style="margin-top:50;background-color: #37444a; color:lightgrey;"> <tr>';

for($i = 0;$i < $num_fields; $i++){
    $table .= '<th>'.$fields[$i].'</th>';
}

//Montando o corpo da tabela
$table .= '<tbody style="
    background-color: #86979e;
    color: #37444a;    
">';
while($r = mysqli_fetch_array($qry)){
    $table .= '<tr>';
    for($i = 0;$i < $num_fields; $i++){
        $table .= '<td>'.$r[$fields[$i]].'</td>';
    }

    // Adicionando botão de exclusão
    $table .= '<td><form action="banco/deleteF.php" method="post">'; 
    $table .= '<input type="hidden" name="ID" value="'.$r['ID'].'">';
    $table .= '<button  class="btn btn-danger">Excluir</button>'; 
    $table .= '</form></td>';
}

//Finalizando a tabela
$table .= '</tbody></table>';

//Imprimindo a tabela
echo $table;

?>