<?php
session_start();
require_once '../lib/biblioteca.php';
?>

<!DOCTYPE html>
<html>
<head>
<?php require_once 'cabecalho.php';?>
</head>
<body>
<?php require_once 'menu.php';?>
<div class="main">
		<h1 class="titulo">Dados Pessoais</h1>		
		<form action="../controller/dadospessoais.php">
			<table class="tabela" align="center">
				<tr>
					<td>
						<label for="nome">NOME</label>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="nome" maxlength="50" size="70" value="<?=isset($_POST['nome'])?$_POST['nome']:''?>" >
					</td>
				</tr>
				<tr>
					<td>
						<label for="data_nascimento">DATA DE MASCIMENTO</label>
					</td>
				</tr>
				<tr>
					<td><input type="text" name="data_nascimento" maxlength="50" size="70" value="Doe"></td>
				</tr>
				<tr>
					<td><label for="lname">CELULAR</label></td>
				</tr>
				<tr>						
					<td><input type="text" name="lname" maxlength="50" size="70" value="Doe"></td>
				</tr>					
				<tr>
					<td><label for="lname">SEXO</label></td>
				</tr>
				<tr>
					<td>
						<select id="cars">
						<?php
						foreach ($sexo_array as $indice => $sexo) {
							$indice = Html::configurar($indice);
							echo "<option value=$indice>$sexo</option>";
						}
						?>
						</select>
					</td>
				</td>
				</tr>
				<tr>
					<td><label for="lname">ESCOLARIDADE</label></td>
				</tr>
				<tr>
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">ESTADO CIVIL</label></td>
				</tr>
				<tr>	
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">NACIONALIDADE</label></td>
				</tr>
				<tr>	
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>					
				<tr>
					<td><label for="lname">POSSUI FILHOS</label></td>
				</tr>
				<tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">POSSUI DEFICIÊNCIA</label></td>
				</tr>
				<tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">PAÍS</label></td>
				</tr>
				<tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">ESTADO</label></td>
				</tr>
				<tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				<tr>
				</tr>
					<td><label for="lname">CIDADE</label></td>
				<tr>
				</tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				<tr>
				</tr>
					<td><label for="lname">CNH</label></td>
				<tr>
				</tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				<tr>
				</tr>
					<td><label for="lname">ÚLTIMO SALÁRIO MENSAL (R$)</label></td>
				<tr>
				</tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				<tr>
				</tr>
					<td><label for="lname">EMPREGADO ATUALMENTE</label></td>
				<tr>
				</tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">DISPONÍVEL PARA VIAGEM</label></td>
				</tr>
				<tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">PODE TRABALHAR EM OUTRAS CIDADES</label></td>
				<tr>
				</tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				<tr>
				</tr>
					<td><label for="lname">PODE TRABALHAR EM OUTROS PAÍSES</label></td>
				<tr>
				</tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">PODE TRABALHAR HOME OFFICE</label></td>
				</tr>
				<tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">POSSUI CARRO</label></td>
				</tr>
				<tr>						
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label for="lname">POSSUI MOTO</label></td>
				</tr>
				<tr>
					<td>
						<select id="cars">
							<option value="volvo">Volvo</option>
							<option value="saab">Saab</option>
							<option value="mercedes">Mercedes</option>
							<option value="audi">Audi</option>
						</select>
					</td>
				</tr>
				<tr>
				<td>&nbsp;</td>
				</tr>
				<tr>
				<td><input type="submit" value="Salvar"></td>						
				</tr>
			</table>
		</form>
	</div>
</div> 
</body>
</html>