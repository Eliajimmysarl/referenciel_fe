<hr/>
	<ol class="breadcrumb bc-3" >
	
		<li>
			<a href="?home"><i class="fa fa-home"></i>Home</a>
		</li>
	
		<li>
			<a href="?page=recuperes_apis">Acteur</a>
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
						
				<form method="POST" action="index.php?demande=ajouter_un_acteur"  id="theForm"  role="form" class="form-horizontal form-groups-bordered" enctype='multipart/form-data'>
	
				<div class="form-group">		
						<label class="col-sm-3 control-label">Fonction <abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<select  name="application_id" id="monselect"  class="form-control" required="required">
									<option value="" selected>Fonction</option>
									
										<?php
											for($i=0; $i < count($applications); $i++)
												{         
													echo"  
															<option value=". $applications[$i]->id ."> ". $applications[$i]->nom ."</option>                       
															
													";
																
												}
										?>

                                    </select>
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>
					
					
				<div class="form-group">		
						<label class="col-sm-3 control-label">Unite organisation <abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<select  name="unite_organisation_id" id="monselect"  class="form-control" required="required">
									<option value="" selected>Unite organisation</option>
									
										<?php
											for($i=0; $i < count($unite_organisations); $i++)
												{         
													echo"  
															<option value=". $unite_organisations[$i]->id ."> ". $unite_organisations[$i]->unite_organisation_nom ." </option>                       
															
													";
																
												}
										?>

                                    </select>
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

				
			
					<div class="form-group">		
						<label class="col-sm-3 control-label" >Acteur <abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<input type="text" name="nom" class="form-control" placeholder="Nom" required="required">
									<span class="input-group-addon"><i class="r"></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label">Types<abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<select  name="types" id="selec"  class="form-control" >
									<option value="" selected>Types</option>
										
										<option value="Interne">Interne</option>
										<option value="Externe">Externe</option>
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
