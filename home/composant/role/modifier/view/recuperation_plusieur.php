<hr/>

	<ol class="breadcrumb bc-3" >

		<li>
			<a href="?home"><i class="fa fa-home"></i>Home</a>
		</li>

		<li>
			<a href="?page=recuperes_apis">Role</a>
		</li>

		<li class="active">
			<strong>Recuperer</strong>
		</li>

	</ol>
								
	<br/>
	<a href='?page=ajouter_role'  class='btn btn-success btn-sm btn-icon icon-left'><i class='entypo-plus'></i>Ajouter</a>/<a href='?page=recuperes_role_application'  class='btn btn-primary btn-sm btn-icon icon-left'><i class='entypo-pencil'></i>Recuperer par fonction</a> /<a href='?page=recuperes_role_unite_organisation'  class='btn btn-info btn-sm btn-icon icon-left'><i class='entypo-pencil'></i>Recuperer par Organisation</a>   /<a href='?page=recuperes_role_acteur'  class='btn btn-info btn-sm btn-icon icon-left'><i class='entypo-pencil'></i>Recuperer par acteur</a>		
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
					<TH>Role</TH>
					<TH>Fonction</TH>
					<TH>Acteur</TH>
					
					<TH>Organisation</TH>
				
					<TH>Description</TH>
					<TH></TH>
				</tr>
			</thead>
			<tbody>
				
				<?php
								
				for($i=0; $i < count($roles); $i++)
				{ 
					$j = $i + 1;
				echo"                         
					<tr class='odd gradeX'>

						<td>$j</td>

						<td > " . $roles[$i]->nom ."</td>
					
						<td > " . $roles[$i]->application_nom ."</td>
						<td > " . $roles[$i]->acteur_nom ."</td>

						<td>". $roles[$i]->unite_organisation_nom ."</td>

					

						<td>". $roles[$i]->descriptions ."</td>

		
						
					<td> <a href='?page=modification_role&id=". $roles[$i]->id_roles ."' class='btn btn-info btn-sm btn-icon icon-left'><i class='entypo-pencil'></i>Modifier</a> 
					<a href='?page=demande_supprimer_role&id=". $roles[$i]->id_roles ."' class='btn btn-danger btn-sm btn-icon icon-left'><i class='entypo-cancel'></i>Supprimer</a>
					<a href='?page=recuperation_un_role&id=". $roles[$i]->id_roles."'  class='btn btn-default btn-sm btn-icon icon-left'><i class='entypo-info'></i>Detail</a></td>
				</tr>";
						         
				}
				?>

               <thead>
				<tr>
				<TH>#</TH>
				<TH>Role</TH>
					<TH>Fonction</TH>
					<TH>Acteur</TH>
					<TH>Organisation</TH>
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
