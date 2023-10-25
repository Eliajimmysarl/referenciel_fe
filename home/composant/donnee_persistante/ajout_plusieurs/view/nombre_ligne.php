<hr/>
	<ol class="breadcrumb bc-3" >
	
		<li>
			<a href="?home"><i class="fa fa-home"></i>Home</a>
		</li>
	
		<li>
		<a href="?page=recuperes_donnee_persistantes">Donnée persistante</a>
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
						
				<form method="POST" action="index.php?page=ajouter_plusieurs"  id="theForm"  role="form" class="form-horizontal form-groups-bordered" enctype='multipart/form-data'>
						
					<div class="form-group">		
						<label class="col-sm-6 control-label" >Veuillez preciser le nombre de lignes à ajouter <abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-2">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-pencil"></i></span>
									<input type="textnumber" name="nombre_ligne" class="form-control" placeholder="" required="required">
									<span class="input-group-addon"><i class="r"></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">
						
						<div class="col-sm-offset-3 col-sm-5">
							
							<button type="submit" onclick="validate()" class="btn btn-success btn-block btn-login">
						
							<i class="entypo-right-open-mini">Ouvrir</i>
						
						</div>
					
					</div>
							
				</form>
						
			</div>
					
		</div>
			
	</div>
		
</div>	