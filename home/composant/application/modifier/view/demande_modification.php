<hr /><ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>

		<a href="?page=recuperes_applications">Application</a>
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
			
				<form method="POST" action="index.php?demande=modification_app"   id="theForm"  role="form" class="form-horizontal form-groups-bordered">
						
					<input type="HIDDEN" name="id" value=<?php echo $_GET['id'];?>>	

					<div class="form-group">		
						<label class="col-sm-3 control-label">Nom<abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>

									<input type="text" name="nom" value="<?php echo $nom;?>"  class="form-control">
									
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

					

					<div class="form-group">		
						<label class="col-sm-3 control-label">Lien web<abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>

									<input type="text" name="lien_web" value="<?php echo $lien_web;?>"  class="form-control">
									
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label">Lien android<abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>

									<input type="text" name="lien_android" value="<?php echo $lien_android;?>"  class="form-control">
									
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label">Lien ios<abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>

									<input type="text" name="lien_ios" value="<?php echo $lien_ios;?>"  class="form-control">
									
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label">Ussd vodacom<abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>

									<input type="text" name="ussd_vodacom" value="<?php echo $ussd_vodacom;?>"  class="form-control">
									
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label">Ussd africell<abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>

									<input type="text" name="ussd_africell" value="<?php echo $ussd_africell;?>"  class="form-control">
									
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label">Ussd orange<abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>

									<input type="text" name="ussd_orange" value="<?php echo $ussd_orange;?>"  class="form-control">
									
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>

					<div class="form-group">		
						<label class="col-sm-3 control-label">Description<abbr style="color:green; font-size:15px;">**</abbr></label>
							<div class="col-sm-5">
								<div class="input-group">
									<span class="input-group-addon"><i class="entypo-user"></i></span>
 
									<textarea class="form-control" name="description" value="<?php echo $descriptions;?>" id="textAreaExample6" rows="3"></textarea>
									
									<span class="input-group-addon"><i class=""></i></span>
								</div>
							</div>
					</div>
				
					
                        

					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-5">
							<button type="submit" onclick="validate()" class="btn btn-success btn-block btn-login">
					<i class="entypo-right-open-mini">Modifier</i>
					</div>
					</div>
							
				</form>
						
			</div>
					
		</div>
			
	</div>
		
</div>	

