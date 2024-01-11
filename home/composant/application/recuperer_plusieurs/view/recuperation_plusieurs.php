<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
		<a href="?page=recuperes_applications">Fonction</a>
	</li>
	<li class="active">
		<strong>Recuperer</strong>
	</li>
</ol>

								
		
		<br />
		
		<script type="text/javascript">
		jQuery( document ).ready( function( $ ) {
			var $table1 = jQuery( '#table-1' );
			
			// Initialize DataTable
			$table1.DataTable( {
				"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"bStateSave": true
			});
			
			// Initalize Select Dropdown after DataTables is created
			$table1.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
				minimumResultsForSearch: -1
			});
		} );
		</script>
		
		<table class="table table-bordered datatable" id="table-1">
			<thead>
				<tr>

				     <TH>#</TH>
					<TH>Nom</TH>
					<TH>Description</TH>
					<TH>Web</TH>
					<TH>Android</TH>
					<TH>Ios</TH>
					<TH>Vodacom</TH>
					<TH>Africell</TH>
					<TH>Orange</TH>
					<TH>Action</TH>
				
				</tr>
			</thead>
			<tbody>
				
			<?php
							
			for($i=0; $i <   count($applications); $i++)
				{    

					$j = $i + 1;
					echo"                         
               			 <tr class='odd gradeX'>

							<td>$j</td>

							<td > " . $applications[$i]->nom ."</td>
	
							<td>". $applications[$i]->descriptions ."</td>
	
							<td> <a href='". $applications[$i]->lien_web ."' target='_blank' >". $applications[$i]->lien_web ."</a></td>
	
							<td>". $applications[$i]->lien_android ."</td>
	
							<td>". $applications[$i]->lien_ios ."</td>
	
							<td>". $applications[$i]->ussd_vodacom ."</td>
	
							<td>". $applications[$i]->ussd_africell ."</td>
	
							<td>". $applications[$i]->ussd_orange ."</td>

							<td class='row'>  <form  method='POST' action='index.php?demande=recuperation_avec_entite_application' class='form'>
							<input type='hidden' name='application_id'  value='". $applications[$i]->id ."' class='form-control'>
							<input type='submit' class='btn btn-default'  value='Entite'> </form>

							<form  method='POST' action='index.php?demande=recuperation_avec_application_role' class='form'>
							<input type='hidden' name='application_id'  value='". $applications[$i]->id ."' class='form-control'>
							<input type='submit' class='btn btn-danger' value='Role'> </form>

							<form  method='POST' action='index.php?demande=recuperation_avec_application_acteur' class='form'>
							<input type='hidden' name='application_id'  value='". $applications[$i]->id ."' class='form-control'>
							<input type='submit' class='btn btn-info' value='Acteur'> </form>
							
							</td>
					
						</tr>";
						         
				}
				?>

               <thead>
				<tr>

                    <TH>#</TH>
					<TH>Nom </TH>
					<TH>Description</TH>
					<TH>Web</TH>
					<TH>Android</TH>
					<TH>Ios</TH>
					<TH>Vodacom</TH>
					<TH>Africell</TH>
					<TH>Orange</TH>
	                <TH>Action</TH>
				</tr>
			</thead>
		</table>
		
		<br />
		
	

		
	
			
		
	





	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/datatables/datatables.css">
	<link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css">
	<link rel="stylesheet" href="assets/js/select2/select2.css">

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/datatables/datatables.js"></script>
	<script src="assets/js/select2/select2.min.js"></script>
	<script src="assets/js/neon-chat.js"></script>
