<hr /><ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
	<a href="?page=recuperes_donnee_persistantes">Donnée persistante</a>
	</li>
	<li class="active">
		<strong>Modifier</strong>
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
			
				<form method="POST" action="index.php?demande=modification_un_donnee_persistance"   id="theForm"  role="form" class="form-horizontal form-groups-bordered">
						
					<input type="HIDDEN" name="id" value=<?php echo $_GET['id'];?>>	

					
					<div class="form-group">		
						<label class="col-sm-3 control-label" >Nom <abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<input type="text" name="nom" class="form-control" value="<?php echo $nom;?>" required="required">
									<span class="input-group-addon"><i class="r"></i></span>
								</div>
							</div>
					</div>


					<div class="form-group">		
						<label class="col-sm-3 control-label">Application <abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<select  name="application_id" id="selec" value="<?php echo $application_id;?>"  class="form-control" required="required">
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
						<label class="col-sm-3 control-label">Entite <abbr style="color:green; font-size:15px;">**</abbr></label>			
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<select  name="entite_id" id="selec" value="<?php echo $entite_id;?>" class="form-control" >
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
						<label class="col-sm-3 control-label" >Taille <abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<input type="number" name="taille" class="form-control" value="<?php echo $taille;?>" >
									<span class="input-group-addon"><i class="r"></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label" >Description <abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-pencil"></i></span>
									<textarea class="form-control" name="descriptions" value="<?php echo $descriptions;?>" id="textAreaExample6" rows="3"></textarea>
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
										<option value="string">String</option>
										<option value="int">Int</option>
                                    </select>
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>


					<div class="form-group">		
						<label class="col-sm-3 control-label" >Valeur  <abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<input type="text" name="valeur" class="form-control" value="<?php echo $valeur;?>" >
									<span class="input-group-addon"><i class="r"></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label" >Defaut <abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
									<input type="number" name="defaut" class="form-control" value="<?php echo $defaut;?>" >
									<span class="input-group-addon"><i class="r"></i></span>
								</div>
							</div>
					</div>

					
                    <div class="form-group"> 

					<label class="col-sm-3 control-label">Cle primaire <abbr style="color:green; font-size:15px;">**</abbr></label>			

						<div class="col-sm-offset-3 col-sm-5"> 
                        
							<div class="radio"> 
								<label> 
									<input type="radio" name="cle_primaire" id="cle_primaire" value="1" >Oui
								</label> 
							</div>

							<div class="radio">
								<label> 
									<input type="radio" name="cle_primaire" id="cle_primaire" value="2">Non
								</label>   
							</div> 
                         
						</div>
                         
					</div>

					<div class="form-group"> 

					<label class="col-sm-3 control-label">Index <abbr style="color:green; font-size:15px;">**</abbr></label>			

						<div class="col-sm-offset-3 col-sm-5"> 
                        
							<div class="radio"> 
								<label> 
									<input type="radio" name="indexe" id="Index1" value="1" >Etrangere
								</label> 
							</div>

							<div class="radio">
								<label> 
									<input type="radio" name="indexe" id="Index2" value="2">Unique
								</label>   
							</div> 

							<div class="radio">
								<label> 
									<input type="radio" name="indexe" id="Index3" value="3">index
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


				