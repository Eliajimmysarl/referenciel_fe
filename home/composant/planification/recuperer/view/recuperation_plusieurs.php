<hr/>

<ol class="breadcrumb bc-3">
	<li>
		<a href="?home"><i class="fa fa-home"></i>Home</a>
	</li>
	<li>
	<a href="?page=modifier_planification">Planification</a>
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
					<TH>User</TH>
					<TH>Composant</TH>
					<TH>Remarque</TH>
					<TH>Statut</TH>
					<TH>Date debut</TH>
					<TH>Date fin</TH>
					<TH></TH>

				</tr>
			</thead>
			<tbody>
				
			<?php
							
			for($i=0; $i < count($planifications); $i++)
				{ 
					
					$j = $i + 1;
					echo"                         
               			 <tr class='odd gradeX'>

							<td>$j</td>

							<td > " . $planifications[$i]->user_id ."</td>

							<td > " . $planifications[$i]->nom ."</td>

							<td>". $planifications[$i]->remarque ."</td>

							<td>". $planifications[$i]->statut ."</td>

							<td>". $planifications[$i]->date_debut ."</td>

							<td>". $planifications[$i]->date_fin ."</td>
		
							
							<td><a href='?page=recuperation_un_planification&id=". $planifications[$i]->id ."'  class='btn btn-default btn-sm btn-icon icon-left'><i class='entypo-info'></i>Profile</a></td>
				 		
						</tr>";
						         
				}
				?>

               <thead>
				<tr>
					<TH>#</TH>
					<TH>User</TH>
					<TH>Composant</TH>
					<TH>Remarque</TH>
					<TH>Status</TH>
					<TH>Date debut</TH>
					<TH>Date fin</TH>
					<TH></TH>

				</tr>
			</thead>
		</table>
		
		<br />