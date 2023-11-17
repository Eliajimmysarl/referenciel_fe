<hr/>

	<ol class="breadcrumb bc-3" >

		<li>
			<a href="?home"><i class="fa fa-home"></i>Home</a>
		</li>

		<li>
			<a href="?page=recuperes_apis">Unité organisation</a>
		</li>

		<li class="active">
			<strong>Recuperer</strong>
		</li>

	</ol>
								
	<br/>
	<a href='?page=ajouter_unite_organisation'  class='btn btn-success btn-sm btn-icon icon-left'><i class='entypo-plus'></i>Ajouter</a>/<a href='?page=recuperes_plusieurs_unite_organisation_application'  class='btn btn-primary btn-sm btn-icon icon-left'><i class='entypo-pencil'></i>Recuperer par Fonction</a> /<a href='?page=recuperes_plusieurs_unite_organisation_nom'  class='btn btn-info btn-sm btn-icon icon-left'><i class='entypo-pencil'></i>Recuperer par organisation</a>	
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
					<TH>Unite organisation</TH>
					<TH>Fonction</TH>
					
					<TH>Description</TH>
				
					<TH></TH>
				</tr>
			</thead>
			<tbody>
				
				<?php
								
				for($i=0; $i < count($unite_organisations); $i++)
				{ 
					$j = $i + 1;
				echo"                         
					<tr class='odd gradeX'>

						<td>$j</td>

						<td>". $unite_organisations[$i]->unite_organisation_nom ."</td>

						<td > " . $unite_organisations[$i]->applications_nom ."</td>

						

						<td>". $unite_organisations[$i]->descriptions."</td>

					<td> <a href='?page=modification_un_unite_organisation&id=". $unite_organisations[$i]->id ."' class='btn btn-info btn-sm btn-icon icon-left'><i class='entypo-pencil'></i>Modifier</a> 
					<a href='?page=demande_supprimer_unite_organisation&id=". $unite_organisations[$i]->id ."' class='btn btn-danger btn-sm btn-icon icon-left'><i class='entypo-cancel'></i>Supprimer</a>
					<a href='?page=recuperation_un_unite_organisation&id=". $unite_organisations[$i]->id ."'  class='btn btn-default btn-sm btn-icon icon-left'><i class='entypo-info'></i>Detail</a></td>
				</tr>";
						         
				}
				?>

               <thead>
				<tr>
				<TH>#</TH>
				<TH>Unite organisation</TH>
					<TH>Fonction</TH>
					
					<TH>Description</TH>
					
					<TH></TH>
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
