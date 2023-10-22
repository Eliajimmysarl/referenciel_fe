<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer">Composant</a>
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
										<tr><td>Entite : </td><td> ". $entite_nom." </td>
										<td>Application :</td><td>". $application_nom ." </td>
										<tr><td>Couche : </td><td> " . $couche." </td>
		                            	<tr><td>Platforme : </td><td> ". $plateforme." </td>
										<tr><td>Nom : </td><td> ". $nom." </td>
										<tr><td>Description : </td><td> ". $descriptions." </td>
										<tr><td>Url code: </td><td> <a href='". $url_code ."' target=_blank>Voir le code</a></td>

										<tr><td>Tde: </td><td><form  method='POST' action='index.php?demande=recuperation_avec_composant_tde' class='form'>
										<input type='hidden' name='composant_id'  value='". $id ."' class='form-control'>
										<input type='submit' class='btn btn-info' value='Voir'> </form> </td>

										<tr><td>Api: </td><td><form  method='POST' action='index.php?demande=recuperation_avec_composant_api' class='form'>
										<input type='hidden' name='composant_id'  value='". $id ."' class='form-control'>
										<input type='submit' class='btn btn-info' value='Voir'> </form></td>
									
										</tr>
										";
								
							?>
							
					</tbody>
				</table>
				
			</div>
		</div>
