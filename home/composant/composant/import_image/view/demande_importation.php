<hr/>
	<ol class="breadcrumb bc-3" >
		<li>
			<a href="?home"><i class="fa fa-home"></i>Home</a>
		</li>

		<li>
			<a href="?page=recuperer_agents">Image</a>
		</li>

		<li class="active">
			<strong>Importer</strong>
		</li>
	</ol>

	<div class="row">
				
		<div class="col-md-12">
					
			<div class="panel panel-primary" data-collapsed="0">
					
				<div class="panel-heading">

					<div class="panel-title" style="text-align: center;">
										
					</div>

				</div>
				
				<?php 
					//A supprimer avant l'implementation
					$id=11; 
				?>						
				<div class="panel-body">
							
					<form method="POST" action="index.php?demande=import_image"  id="theForm"  role="form" class="form-horizontal form-groups-bordered" enctype='multipart/form-data'>
						
						<input type="hidden" name="id" value=<?php echo $id; ?>>

						<div class="form-group">		
							<label class="col-sm-3 control-label">Image</label>
								<div class="col-sm-5">
									<div class="input-group">
										<span class="input-group-addon"><i class="entypo-pencil"></i></span>
											
										<input type="file" name="image" class="form-control" required="required">
											
										<span class="input-group-addon"><i class="r"></i></span>
									</div>
								</div>
						</div>

						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-5">

								<button type="submit" class="btn btn-success btn-block btn-login">

								<i class="entypo-right-open-mini">Importer</i>
							</div>

					</form>
						
				</div>
										
			</div>
					
		</div>
			
	</div>
