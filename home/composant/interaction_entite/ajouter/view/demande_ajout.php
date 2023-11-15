<hr/>
	<ol class="breadcrumb bc-3" >
	
		<li>
			<a href="?home"><i class="fa fa-home"></i>Home</a>
		</li>
	
		<li>
			<a href="?page=recuperes_apis">Interaction entite</a>
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
						
				<form method="POST" action="index.php?demande=ajouter_un_interaction_entite"  id="theForm"  role="form" class="form-horizontal form-groups-bordered" enctype='multipart/form-data'>
	
				<div class="form-group">		
						<label class="col-sm-3 control-label">Entite<abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<select  name="entite_id" id="monselect"  class="form-control" required="required">
									<option value="" selected>Entite</option>
									
										<?php
											for($i=0; $i < count($entites); $i++)
												{         
													echo"  
															<option value=". $entites[$i]->id ."> ". $entites[$i]->entite_nom ."</option>                       
															
													";
																
												}
										?>

                                    </select>
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>
					
					
				<div class="form-group">		
						<label class="col-sm-3 control-label">Composant entite <abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<select  name="composant_entite_id" id="monselect"  class="form-control" required="required">
									<option value="" selected>Composant entite</option>
									
										<?php
											for($i=0; $i < count($composant_entites); $i++)
												{         
													echo"  
															<option value=". $composant_entites[$i]->id_composant ."> ". $composant_entites[$i]->nom ."  </option>                       
															
													";
																
												}
										?>

                                    </select>
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

				
						
				
					<div class="form-group">		
						<label class="col-sm-3 control-label" >Description </label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-pencil"></i></span>
									<textarea class="form-control" name="descriptions" id="textAreaExample6" rows="3"></textarea>
									<span class="input-group-addon"><i class="r"></i></span>
								</div>
							</div>
					</div>
			


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
