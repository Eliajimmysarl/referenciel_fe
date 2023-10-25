<hr />
<ol class="breadcrumb bc-3" >
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
	<a href="?page=recuperes_donnee_persistantes">Donnée persistante</a>
	</li>
	<li class="active">
		<strong>Recuperer</strong>
	</li>
</ol>

								
		
		<br/>
		
	
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
					<TH>Types</TH>
					<TH>Application</TH>
					<TH>Entite</TH>
					<TH>Valeur</TH>
					<TH>index</TH>
					<TH>Cle primaire</TH>
					<TH>Description</TH>
				</tr>
			</thead>
			<tbody>
				
				<?php
								
				for($i=0; $i < count($donnee_persistantes); $i++)
				{ 
					$j = $i + 1;
				echo"                         
					<tr class='odd gradeX'>

						<td>$j</td>

						<td > " . $donnee_persistantes[$i]->nom ."</td>

						<td>". $donnee_persistantes[$i]->types ."</td>

						<td>". $donnee_persistantes[$i]->application_nom ."</td>

						<td>". $donnee_persistantes[$i]->entite_nom ."</td>

						<td>". $donnee_persistantes[$i]->valeur ."</td>

						<td>". $donnee_persistantes[$i]->indexe ."</td>

						<td>". $donnee_persistantes[$i]->cle_primaire ."</td>

						<td>". $donnee_persistantes[$i]->descriptions ."</td>
		
					
						</tr>";
						         
				}
				?>
			</tbody>
               <thead>
				<tr>
					<TH>#</TH>
					<TH>Nom</TH>
					<TH>Types</TH>
					<TH>Application</TH>
					<TH>Entite</TH>
					<TH>Valeur</TH>
					<TH>index</TH>
					<TH>Cle primaire</TH>
					<TH>Description</TH>
				</tr>
			</thead>
		</table>
		
		<br/>
		
	

		
	
			
		
	





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
