<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperes_entites">Entite</a>
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
					<TH>Entite</TH>
					<TH>Fonction</TH>
					<td>Description:</td>
					<td>Composant: </td>
					<td>Donnée persistante: </td>
					
					</tr>
							<?php
							
								
									echo"
										   <tr>
										   <td> " . $nom." </td>
										   <td>". $application_nom." </td>
											
										<td> ". $descriptions." </td>
										   <td><form  method='POST' action='index.php?demande=recuperation_avec_composant_entite' class='form'>
										   <input type='hidden' name='entite_id'  value='". $id ."' class='form-control'>
										   <input type='submit' class='btn btn-info' value='Voir'> </form>
										   </td>

										   <td>
										   <form  method='POST' action='index.php?demande=recuperation_avec_dp_entite' class='form'>
										   <input type='hidden' name='entite_id'  value='". $id ."' class='form-control'>
										   <input type='submit' class='btn btn-info' value='Voir'> </form>
										   </td>
								   
										
										 </tr>
									";
								
							?>
							
					</tbody>
				</table>
				
			</div>
		</div>
