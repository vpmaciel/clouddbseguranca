<?php
require_once 'sql.php';
?>

<!DOCTYPE html>
<html>
<head>
<?php require_once 'cabecalho.php';?>
</head>
<body>
<?php require_once 'menu.php';?>
<div class="main">
<br>
<table style="border:none;opacity: 1;" width="100%">

<?php
$contador = 0;
foreach($pdo->query( 'exec stpSecurity_Checklist' ) as $key => $value)
{
    $contador++;
    if($contador % 2 == 0) {
        echo('<tr><td style="color:DimGray;""><b>CÓDIGO:</b> '.$value['Código']); echo "</td></tr>";
        echo('<tr><td style="color:DimGray;"><b>CATEGORIA:</b> '.$value['Categoria']); echo "</td></tr>";
        echo('<tr><td style="color:DimGray;"><b>O QUE É VERIFICADO:</b> '.$value['O que é verificado']); echo "</td></tr>";
        echo('<tr><td style="color:DimGray;"><b>AVALIAÇÃO:</b> '.$value['Avaliação']); echo "</td></tr>";
        echo('<tr><td style="color:DimGray;"><b>DESCRIÇÃO DO PROBLEMA:</b> '.$value['Descrição do Problema']); echo "</td></tr>";
        echo('<tr><td style="color:DimGray;"><b>DETALHAMENTO DA VERIFICAÇÃO:</b> '.$value['Detalhamento da Verificação']); echo "</td></tr>";
        echo('<tr><td style="color:DimGray;"><b>SUGESTÃO DE CORREÇÃO:</b> '.$value['Sugestão de Correção']); echo "</td></tr>";
        echo('<tr><td style="color:DimGray;"><b>RESULTADOS DA VALIDAÇÃO:</b> '.$value['Resultados da Validação']); echo "</td></tr>";
        echo('<tr><td style="color:DimGray;"><b>URL DE REFERÊNCIA:</b> '.$value['URL de Referência']); echo "</td></tr>";
    } else {
        echo('<tr><td style="color:black;"><b>CÓDIGO:</b> '.$value['Código']); echo "</td></tr>";
        echo('<tr><td style="color:black;"><b>CATEGORIA:</b> '.$value['Categoria']); echo "</td></tr>";
        echo('<tr><td style="color:black;"><b>O QUE É VERIFICADO:</b> '.$value['O que é verificado']); echo "</td></tr>";
        echo('<tr><td style="color:black;"><b>AVALIAÇÃO:</b> '.$value['Avaliação']); echo "</td></tr>";
        echo('<tr><td style="color:black;"><b>DESCRIÇÃO DO PROBLEMA:</b> '.$value['Descrição do Problema']); echo "</td></tr>";
        echo('<tr><td style="color:black;"><b>DETALHAMENTO DA VERIFICAÇÃO:</b> '.$value['Detalhamento da Verificação']); echo "</td></tr>";
        echo('<tr><td style="color:black;"><b>SUGESTÃO DE CORREÇÃO:</b> '.$value['Sugestão de Correção']); echo "</td></tr>";
        echo('<tr><td style="color:black;"><b>RESULTADOS DA VALIDAÇÃO:</b> '.$value['Resultados da Validação']); echo "</td></tr>";
        echo('<tr><td style="color:black;"><b>URL DE REFERÊNCIA:</b> '.$value['URL de Referência']); echo "</td></tr>";
        
    }
    echo'<tr><td>&nbsp;</td></tr>';
}
?>
</table>
</div> 
</body>
</html>