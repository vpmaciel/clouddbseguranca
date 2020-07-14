<?php
require_once '../database/sql.php';
//$values = $pdo->query('exec stpSecurity_Checklist');
//echo gettype($value), "\n";
//echo $value, "\n";


foreach($pdo->query( 'exec stpSecurity_Checklist' ) as $row)
{
    print_r($row);
    echo "<br>";
}


/*
while ($row = sqlsrv_fetch_array($stmt)or die(print_r(sqlsrv_errors()))) {
    $coluna = array();
    $coluna['Id_Verificacao'] = $row['Id_Verificacao'];
    $coluna['Ds_Categoria'] = $row['Ds_Categoria'];
    $coluna['Ds_Titulo'] = $row['Ds_Titulo'];
    $coluna['Ds_Resultado'] = $row['Ds_Resultado'];
    $coluna['Ds_Descricao'] = $row['Ds_Descricao'];
    $coluna['Ds_Verificacao'] = $row['Ds_Verificacao'];
    $coluna['Ds_Sugestao'] = $row['Ds_Sugestao'];
    $coluna['Ds_Detalhes'] = $row['Ds_Detalhes'];
    array_push( $lista, $coluna);
}

$stmt = null;
echo json_encode($coluna);
echo "<br>";

if (count($lista) > 0) {
    print_r($lista);
    //header('Location: ../view/sucesso.php');
} else {
    //header('Location: ../view/erro.php');
}
*/
?>