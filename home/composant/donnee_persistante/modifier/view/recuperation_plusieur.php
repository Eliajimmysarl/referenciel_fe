<hr/>

	<ol class="breadcrumb bc-3" >

		<li>
			<a href="?home"><i class="fa fa-home"></i>Home</a>
		</li>

		<li>
			<a href="?page=recuperer_modeles">Donnee persistante</a>
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
					<TH>Type</TH>
					<TH>Couche</TH>
					<TH>Plate-forme</TH>
					<TH>Application</TH>
					<TH>Entite</TH>
					<TH>Description</TH>
					<TH></TH>
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

						<td>". $donnee_persistantes[$i]->type ."</td>

						<td>". $donnee_persistantes[$i]->couche ."</td>

						<td>". $donnee_persistantes[$i]->plateforme ."</td>

						<td>". $donnee_persistantes[$i]->description ."</td>

						<td>". $donnee_persistantes[$i]->application_id ."</td>

						<td>". $donnee_persistantes[$i]->entite_id ."</td>
		
									
					<td> <a href='?page=recuperation_un&id=". $donnee_persistantes[$i]->id ."'  class='btn btn-default btn-sm btn-icon icon-left'><i class='entypo-info'></i>Detail</a></td>
			
					</tr>";
						         
				}
				?>
            </tbody>
            <thead>
				<tr>
				    <TH>#</TH>
					<TH>Nom</TH>
					<TH>Type</TH>
					<TH>Couche</TH>
					<TH>Plate-forme</TH>
					<TH>Application</TH>
					<TH>Entite</TH>
					<TH>Description</TH>
					<TH></TH>
	
				</tr>
			</thead>
		</table>
		
		<br />
		