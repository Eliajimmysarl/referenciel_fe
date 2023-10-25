<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperes_apis">Api</a>
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
										
										<td>Application :</td><td>". $application_nom ." </td>
										<tr><td>Composant : </td><td> " . $composant_nom." </td>
										<tr><td>Couche : </td><td> ". $entite_nom." </td>
										<tr><td>Methode : </td><td> ". $methode." </td>
										<tr><td>Uri : </td><td> <a href='". $uri ."' target=_blank>Voir le code</a> </td>
										
										
										
										
										</tr>
										";
								
							?>
						
					
						
					</tbody>
				</table>
				
			</div>
		</div>
