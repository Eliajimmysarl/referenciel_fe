<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperes_applications">Fonction</a>
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
										
										<td>Nom application :</td><td>". $nom ." </td>
										<tr><td>Description : </td><td> " . $descriptions." </td>
										<tr><td>Site web: </td><td> <a href='". $lien_web."' target='_blank'> ". $lien_web."</a> </td>

										<tr><td>Entite: </td><td>  <form  method='POST' action='index.php?demande=recuperation_avec_entite_application' class='form'>
										<input type='hidden' name='application_id'  value='". $id ."' class='form-control'>
										<input type='submit' class='btn btn-info' value='Voir'> </form></td>

										<tr><td>composant : </td><td><form  method='POST' action='index.php?demande=recuperation_avec_composant_application' class='form'>
										<input type='hidden' name='application_id'  value='". $id ."' class='form-control'>
										<input type='submit' class='btn btn-info' value='Voir'> </form></td>

										<tr><td>Tde: </td><td><form  method='POST' action='index.php?demande=recuperation_avec_tde' class='form'>
										<input type='hidden' name='application_id'  value='". $id ."' class='form-control'>
										<input type='submit' class='btn btn-info' value='Voir'> </form></td>

										<tr><td>Donnée persitante: </td><td> <form  method='POST' action='index.php?demande=recuperation_avec_dp_application' class='form'>
										<input type='hidden' name='application_id'  value='". $id ."' class='form-control'>
										<input type='submit' class='btn btn-info' value='Voir'> </form></td>

										<tr><td>Api: </td><td><form  method='POST' action='index.php?demande=recuperation_avec_application_api' class='form'>
										<input type='hidden' name='application_id'  value='". $id ."' class='form-control'>
										<input type='submit' class='btn btn-info' value='Voir'> </form></td>
										
										
										</tr>
										";
								
							?>
						
					
						
					</tbody>
				</table>
				
			</div>
		</div>
