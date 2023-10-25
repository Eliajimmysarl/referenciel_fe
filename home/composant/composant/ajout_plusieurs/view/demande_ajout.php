<hr/>
	<ol class="breadcrumb bc-3" >
	
		<li>
			<a href="?home"><i class="fa fa-home"></i>Home</a>
		</li>
	
		<li>
			<a href="?page=recuperes_composants">Composant</a>
		</li>
	
		<li class="active">
			<strong>Ajouter</strong>
		</li>
	</ol>

<div class="row">
			
	<div class="col-md-12">
				
		<div class="panel panel-primary" data-collapsed="0">
				
			<div class="panel-heading">

				<div class="panel-title" style="text-align: center;v">
									
				</div>
							       

			</div>
					
			<div class="panel-body">
						
				<form method="POST" action="index.php?demande=ajout_plusieurs"  id="theForm"  role="form" class="form-horizontal form-groups-bordered" enctype='multipart/form-data'>
					
					<?php
							$nombreLigne=$_POST['nombre_ligne'];

							echo "<input type='hidden' name='nombre_ligne' value=$nombreLigne>";

							for($i=0; $i < $nombreLigne; $i++)
								{         
									echo"

									<div class='form-group' style='border-color:#BDBDBB'>		
												<label class='col-sm-3 control-label'>Select <abbr style='color:green; font-size:15px;'>*</abbr></label>			
													<div class='col-sm-5'>
														<div class='input-group'>
															<span class='input-group-addon'><i class='entypo-pencil'></i></span>
															<select  name='application_$i' id='application_$i'  class='form-control' required='required'>
															<option value='' selected>Application</option>
															",
															

															?>
															<?php for($i=0; $i < count($applications); $i++)
																{         
																	echo'  
																			<option value=". $applications[$i]->id ."> ". $applications[$i]->nom ."</option>                       
																			
																	';
																				
																}
														?>
														<?php
														 echo"
															</select>
															<span class='input-group-addon'><i class=''></i></span>
														</div>
													</div>
											</div>

											<div class='form-group' style='border-color:#BDBDBB'>		
												<label class='col-sm-3 control-label'>Entite <abbr style='color:green; font-size:15px;'>*</abbr></label>			
													<div class='col-sm-5'>
														<div class='input-group'>
															<span class='input-group-addon'><i class='entypo-pencil'></i></span>
															<select  name='entite_$i' id='entite_$i'  class='form-control' required='required'>
															<option value='' selected>Couche</option>
															";
															?><?php
															
															for($i=0; $i < count($entites); $i++)
																{         
																	echo"  
																			<option value=". $entites[$i]->id ."> ". $entites[$i]->nom ."</option>                       
																			
																	";
																				
																}
													
																?><?php
														echo"
															</select>
															<span class='input-group-addon'><i class=''></i></span>
														</div>
													</div>
											</div>


											<div class='form-group'>		
												<label class='col-sm-3 control-label' >Nom <abbr style='color:green; font-size:15px;'>*</abbr></label>
													<div class='col-sm-5'>
														<div class='input-group'>
															<span class='input-group-addon'><i class='entypo-pencil'></i></span>
															<input type='text' name='nom_$i' class='form-control' placeholder='Text' required='required'>
															<span class='input-group-addon'><i class='r'></i></span>
														</div>
													</div>
											</div>
								
											<div class='form-group' style='border-color:#BDBDBB'>		
												<label class='col-sm-3 control-label'>Couche <abbr style='color:green; font-size:15px;'>*</abbr></label>			
													<div class='col-sm-5'>
														<div class='input-group'>
															<span class='input-group-addon'><i class='entypo-pencil'></i></span>
															<select  name='couche_$i' id='couche_$i'  class='form-control' required='required'>
															<option value='' selected>Couche</option>
																<option value=entite>Entite</option>
																<option value=interaction>Interaction</option>
																<option value=processus>Processus</option>
															</select>
															<span class='input-group-addon'><i class=''></i></span>
														</div>
													</div>
											</div>
                                             
											<div class='form-group' style='border-color:#BDBDBB'>		
												<label class='col-sm-3 control-label'>Plateforme <abbr style='color:green; font-size:15px;'>*</abbr></label>			
													<div class='col-sm-5'>
														<div class='input-group'>
															<span class='input-group-addon'><i class='entypo-pencil'></i></span>
															<select  name='plateforme_$i' id='plateforme_$i'  class='form-control' required='required'>
															<option value='' selected>Plateforme</option>
																<option value=endroid>Endroid</option>
																<option value=ios>IOS</option>
																<option value=web>Web</option>
															</select>
															<span class='input-group-addon'><i class=''></i></span>
														</div>
													</div>
											</div>

											";
								}
								
					?>

					<div class="form-group">
						
						<div class="col-sm-offset-3 col-sm-5">
							
							<button type="submit" onclick="validate()" class="btn btn-success btn-block btn-login">
						
							<i class="entypo-right-open-mini">Ajouter</i>
						
						</div>
					
					</div>
							
				</form>
						
			</div>
					
		</div>
			
	</div>
		
</div>	