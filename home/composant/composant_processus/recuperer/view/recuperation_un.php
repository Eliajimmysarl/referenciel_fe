<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperes_apis">Composant processus</a>
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
										
										<tr><td>Activite : </td><td> " . $activite." </td></tr>
										<tr><td>Processus :</td><td>". $processus_nom ." </td></tr>
										<tr><td>Description : </td><td> ". $descriptions." </td></tr>
										<tr><td>Lien code: </td><td> <a href='". $lien_code."' target=_blank>Voir le code</a> </td></tr>
										
										
										
										
										</tr>
										";
								
							?>
						
					
						
					</tbody>
				</table>
				
			</div>
		</div>
