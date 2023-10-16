<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperer">Planification</a>
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
										
											<td>User :</td><td>". $user_id ." </td>

											<td>Composant :</td><td>". $nom ." </td>

											<td>Remarque :</td><td>". $remarque ." </td>

											<tr><td>Statut : </td><td> " . $statut." </td>
			
											<tr><td>Date debut : </td><td> ". $date_debut." </td>

											<tr><td>Date fin : </td><td> ". $date_fin." </td>
										
										
										
										</tr>
									";
								
							?>
							
					</tbody>
				</table>
				
			</div>
		</div>
