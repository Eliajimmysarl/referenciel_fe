<hr/>
	<ol class="breadcrumb bc-3" >
	
		<li>
			<a href="?home"><i class="fa fa-home"></i>Home</a>
		</li>
	
		<li>
			<a href="?page=recuperer_modeles">Donnee persistante</a>
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
									<select  name="selec" id="selec"  class="form-control" required="required">
									<option value="" selected>Applicatin</option>
									
										<?php
											for($i=0; $i < count($selections); $i++)
												{         
													echo"  
															<option value=". $Applications[$i]->id ."> ". $applications[$i]->nom ."</option>                       
															
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
									<select  name="composant_id" id="selec"  class="form-control" required="required">
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
						<label class="col-sm-3 control-label" >Taille <abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<input type="number" name="taille" class="form-control" placeholder="Taille" required="required">
									<span class="input-group-addon"><i class="r"></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label" >Description <abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-pencil"></i></span>
									<textarea class="form-control" name="description" id="textAreaExample6" rows="3"></textarea>
									<span class="input-group-addon"><i class="r"></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label" >Valeur par defaut <abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<input type="number" name="valeur_par_defaut" class="form-control" placeholder="valeur par defaut" required="required">
									<span class="input-group-addon"><i class="r"></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label">Type <abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<select  name="type" id="selec"  class="form-control" required="required">
									<option value="" selected>Type</option>
										<option value="date">date</option>
										<option value="INT">INT</option>
                                    </select>
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

					
                    <div class="form-group"> 

					<label class="col-sm-3 control-label">Cle primaire <abbr style="color:green; font-size:15px;">**</abbr></label>			

						<div class="col-sm-offset-3 col-sm-5"> 
                        
							<div class="radio"> 
								<label> 
									<input type="radio" name="oui" id="optionsRadios1" value="1" checked="">Oui
								</label> 
							</div>

							<div class="radio">
								<label> 
									<input type="radio" name="optionsRadios" id="optionsRadios2" value="2">Non
								</label>   
							</div> 
                         
						</div>
                         
					</div>

					<div class="form-group"> 

					<label class="col-sm-3 control-label">Index <abbr style="color:green; font-size:15px;">**</abbr></label>			

						<div class="col-sm-offset-3 col-sm-5"> 
                        
							<div class="radio"> 
								<label> 
									<input type="radio" name="etrangere" id="optionsRadios1" value="1" checked="">Etrangere
								</label> 
							</div>

							<div class="radio">
								<label> 
									<input type="radio" name="unique" id="optionsRadios2" value="2">Unique
								</label>   
							</div> 

							<div class="radio">
								<label> 
									<input type="radio" name="index" id="optionsRadios3" value="2">Index
								</label>   
							</div> 
                         
						</div>
                         
					</div>

					<div class="form-group"> 

<label class="col-sm-3 control-label">Null <abbr style="color:green; font-size:15px;">**</abbr></label>			

	<div class="col-sm-offset-3 col-sm-5"> 
	
		<div class="radio"> 
			<label> 
				<input type="radio" name="yes" id="optionsRadios1" value="1" checked="">YES
			</label> 
		</div>

		<div class="radio">
			<label> 
				<input type="radio" name="no" id="optionsRadios2" value="2">No
			</label>   
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


				