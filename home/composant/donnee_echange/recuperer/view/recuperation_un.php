<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperes_donnee_echanges">TDE</a>
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
										<tr><td>Donne echange : </td><td> ". $nom." </td></tr>
										<td>Fonction :</td><td>". $application_nom ." </td></tr>
										<tr><td>Composant : </td><td> " . $composant_nom." </td></tr>
		
										<tr><td>Entite: </td><td> ". $entite_nom." </td></tr>
										<tr><td>Types : </td><td> ". $types." </td></tr>
										
										<tr><td>Description: </td><td> ". $descriptions." </td></tr>
										
										
										</tr>
										";
								
							?>
						
					
						
					</tbody>
				</table>
				
			</div>
		</div>
