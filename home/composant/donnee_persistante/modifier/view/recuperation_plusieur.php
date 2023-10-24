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
	<a href='?page=ajouter_donnee_persistante'  class='btn btn-success btn-sm btn-icon icon-left'><i class='entypo-plus'></i>Ajouter</a>/<a href='?page=recuperes_donnee_persistantes_application'  class='btn btn-primary btn-sm btn-icon icon-left'><i class='entypo-pencil'></i>Recuperer par application</a> /<a href='?page=recuperes_donnee_persistantes_entite'  class='btn btn-info btn-sm btn-icon icon-left'><i class='entypo-pencil'></i>Recuperer par entite</a>									
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

				<td>". $donnee_persistantes[$i]->types ."</td>

				<td>". $donnee_persistantes[$i]->application_nom ."</td>

				<td>". $donnee_persistantes[$i]->entite_nom ."</td>

				<td>". $donnee_persistantes[$i]->valeur ."</td>

				<td>". $donnee_persistantes[$i]->indexe ."</td>

				<td>". $donnee_persistantes[$i]->cle_primaire ."</td>

				<td>". $donnee_persistantes[$i]->descriptions ."</td>
		
									
				<td> <a href='?page=modification_donnee_persistante&id=". $donnee_persistantes[$i]->id_donnee_persistante ."' class='btn btn-info btn-sm btn-icon icon-left'><i class='entypo-pencil'></i>Modifier</a> 
				<a href='?page=demande_supprimer_donnee_persistante&id=". $donnee_persistantes[$i]->id_donnee_persistante ."' class='btn btn-danger btn-sm btn-icon icon-left'><i class='entypo-cancel'></i>Supprimer</a>
				<a href='?page=recuperation_un_donnee_persistante&id=". $donnee_persistantes[$i]->id_donnee_persistante ."' class='btn btn-default btn-sm btn-icon icon-left'><i class='entypo-info'></i>Detail</a>
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
					<TH></TH>
	
				</tr>
			</thead>
		</table>
		
		<br />
		