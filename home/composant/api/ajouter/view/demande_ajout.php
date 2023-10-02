<hr/>
	<ol class="breadcrumb bc-3" >
	
		<li>
			<a href="?home"><i class="fa fa-home"></i>Home</a>
		</li>
	
		<li>
			<a href="?page=recuperer_modeles">Api</a>
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
						
				<form method="POST" action="index.php?demande=ajouter_un_avec_dependance"  id="theForm"  role="form" class="form-horizontal form-groups-bordered" enctype='multipart/form-data'>
	
				<div class="form-group">		
						<label class="col-sm-3 control-label">Application <abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<select  name="application_id" id="monselect"  class="form-control" required="required">
									<option value="" selected>Application</option>
									
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
						<label class="col-sm-3 control-label">Composant <abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<select  name="composant_id" id="monselect"  class="form-control" required="required">
									<option value="" selected>Composant</option>
									
										<?php
											for($i=0; $i < count($composants); $i++)
												{         
													echo"  
															<option value=". $composants[$i]->id ."> ". $composants[$i]->nom ."</option>                       
															
													";
																
												}
										?>

                                    </select>
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

				
					<div class="form-group">		
						<label class="col-sm-3 control-label">Couche <abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<select  name="couche" id="selec"  class="form-control" required="required">
									<option value="" selected>couche</option>
										<option value="interration">Interration</option>
										<option value="processus">Processus</option>
										<option value="entite">Entite</option>
                                    </select>
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label" >Methode <abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<input type="text" name="methode" class="form-control" placeholder="Methode" required="required">
									<span class="input-group-addon"><i class="r"></i></span>
								</div>
							</div>
					</div>
			

					<div class="form-group">		
						<label class="col-sm-3 control-label" >Uri <abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<input type="text" name="url_code" class="form-control" placeholder="Url code" required="required">
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
