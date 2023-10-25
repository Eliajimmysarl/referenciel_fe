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
										
											<td>Nom :</td><td>". $nom ." </td>
											<tr><td>Type : </td><td> " . $types." </td>
											<tr><td>Entite : </td><td> ". $entite_nom." </td>
											<tr><td>Application : </td><td> ". $application_nom." </td>
											<tr><td>Valeur : </td><td> ". $valeur." </td>
											<tr><td>Description : </td><td> ". $descriptions." </td>
											<tr><td>Index : </td><td> ". $indexe." </td>
											<tr><td>Taille : </td><td> ". $taille." </td>
											<tr><td>Defaut: </td><td> ". $defaut." </td>
											<tr><td>Cle primaire: </td><td> ". $cle_primaire." </td>
										
										</tr>
										";
								
							?>
						
					
						
					</tbody>
				</table>
				
			</div>
		</div>
