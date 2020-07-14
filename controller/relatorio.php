<?php
require_once '../database/sql.php';

//echo gettype($value), "\n";
//echo $value, "\n";
?>

<table style="border:1px solid black;" bgcolor="#CCC" width="100%">

<?php
$contador = 0;
foreach($pdo->query( 'exec stpSecurity_Checklist' ) as $key => $value)
{
    $contador++;
    if($contador % 2 == 0) {
        echo('<tr><td style="color:gray;""><b>CÓDIGO:</b> '.$value['Código']); echo "</td></tr>";
        echo('<tr><td style="color:gray;"><b>CATEGORIA:</b> '.$value['Categoria']); echo "</td></tr>";
        echo('<tr><td style="color:gray;"><b>O QUE É VERIFICADO:</b> '.$value['O que é verificado']); echo "</td></tr>";
        echo('<tr><td style="color:gray;"><b>AVALIAÇÃO:</b> '.$value['Avaliação']); echo "</td></tr>";
        echo('<tr><td style="color:gray;"><b>DESCRIÇÃO DO PROBLEMA:</b> '.$value['Descrição do Problema']); echo "</td></tr>";
        echo('<tr><td style="color:gray;"><b>DETALHAMENTO DA VERIFICAÇÃO:</b> '.$value['Detalhamento da Verificação']); echo "</td></tr>";
        echo('<tr><td style="color:gray;"><b>SUGESTÃO DE CORREÇÃO:</b> '.$value['Sugestão de Correção']); echo "</td></tr>";
        echo('<tr><td style="color:gray;"><b>RESULTADOS DA VALIDAÇÃO:</b> '.$value['Resultados da Validação']); echo "</td></tr>";
        echo('<tr><td style="color:gray;"><b>URL DE REFERÊNCIA:</b> '.$value['URL de Referência']); echo "</td></tr>";
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