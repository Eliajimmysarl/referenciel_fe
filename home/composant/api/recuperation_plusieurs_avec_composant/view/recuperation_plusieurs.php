<hr/>

	<ol class="breadcrumb bc-3" >

		<li>
			<a href="?home"><i class="fa fa-home"></i>Home</a>
		</li>

		<li>
			<a href="?page=recuperer_modeles">Api</a>
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
					<TH>Application</TH>
					<TH>Composant</TH>
					<TH>Couche</TH>
					<TH>Methode</TH>
					<TH>Uri</TH>
					
					<TH></TH>
				</tr>
			</thead>
			<tbody>
				
				<?php
								
				for($i=0; $i < count($apis); $i++)
				{ 
					$j = $i + 1;
				echo"                         
					<tr class='odd gradeX'>

						<td>$j</td>

						<td > " . $apiss[$i]->application_id ."</td>

						<td>". $apis[$i]->composant_id ."</td>

						<td>". $apis[$i]->entite_id ."</td>

						<td>". $apis[$i]->methode ."</td>

						<td>". $apis[$i]->uri ."</td>

						
		
									
					<td> <a href='?page=recuperation_un&id=". $apis[$i]->id ."'  class='btn btn-default btn-sm btn-icon icon-left'><i class='entypo-info'></i>Detail</a></td>
			
					</tr>";
						         
				}
				?>
            </tbody>
            <thead>
				<tr>
                    <TH>#</TH>
					<TH>Application</TH>
					<TH>Composant</TH>
					<TH>Couche</TH>
					<TH>Methode</TH>
					<TH>Uri</TH>
				
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
