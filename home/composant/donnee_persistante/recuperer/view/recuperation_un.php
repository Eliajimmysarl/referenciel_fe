<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
	<a href="?page=recuperes_donnee_persistantes">Donnée persistante</a>
	</li>
	<li class="active">
		<strong>Recuperer</strong>
	</li>
</ol>


<br />
		
		<div class="row">
			<div class="col-md-12">
				
				<table class="table table-bordered responsive">
					
					<tbody>
						<tr>
							<?php
							
								
										echo"
										<tr>
										
											<tr><td>Donnee persistante :</td><td>". $nom ." </td></tr>
											<tr><td>Fonction : </td><td> ". $application_nom." </td></tr>
											<tr><td>Entite : </td><td> ". $entite_nom." </td></tr>
											<tr><td>Type : </td><td> " . $types." </td></tr>
											<tr><td>Valeur : </td><td> ". $valeur." </td></tr>
											<tr><td>Description : </td><td> ". $descriptions." </td></tr>
											<tr><td>Index : </td><td> ". $indexe." </td></tr>
											<tr><td>Taille : </td><td> ". $taille." </td></tr>
											<tr><td>Defaut: </td><td> ". $defaut." </td></tr>
											<tr><td>Cle primaire: </td><td> ". $cle_primaire." </td></tr>
										
										</tr>
										";
								
							?>
						
					
						
					</tbody>
				</table>
				
			</div>
		</div>
