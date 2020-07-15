<!DOCTYPE html>
<html>
<head>
<?php require_once 'cabecalho.php';?>
</head>
<body>
<?php require_once 'menu.php';?>
<div class="main">
	<h1 class="titulo">Checklist de Segurança</h1>
   Os resultados das verificações estão organizados da seguinte forma:
   <br><br><b>Código:</b> Apenas um número único para facilitar a identificação do item de verificação, inclusive quando eu liberar a versão em inglês (spoiler!!)
   <br><br><b>Categoria:</b> Uma forma de agrupar as verificações de acordo com uma categoria lógica que imaginei para essas validações
   <br><br><b>O que é verificado:</b> Título da verificação, que é um resumo do que esse item está validando no banco de dados
   <br><br><b>Avaliação:</b> É o resultado da validação. Ela informa se o item passou na validação (OK), se é apenas um item informativo ou se identificou um POSSÍVEL problema
   <br><br><b>Descrição do Problema:</b> Uma breve explicação sobre o motivo desse item estar sendo verificado e qual o risco de segurança que ele pode nos trazer
   <br><br><b>Detalhamento da Verificação:</b> Detalhes mais técnicos e específicos do que está sendo verificado na instância
   <br><br><b>Sugestão de Correção:</b> Algumas orientações de como corrigir ou contornar o possível problema identificado pela Stored Procedure
   <br><br><b>Resultados da Validação:</b> XML que retorna os registros que causaram a falha da validação e os artefatos identificados (alguns itens são limitados a TOP(N) registros, pois podem tem muitos registros retornados no XML)
   <br><br><b>URL de Referência:</b> Link de algum artigo ou documentação que possa agregar ou ajudar no entendimento desse item de verificação
	</p>
</div> 
</body>
</html>