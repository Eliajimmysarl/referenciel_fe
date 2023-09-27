<!-- Active menu dans les entites -->
<?php  require_once('active_menu.php'); ?>

<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="?home">
						<img src="assets/images/logo_m.png" width="120" alt="" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>      
			<ul id="main-menu" class="main-menu">
							
				<li class="has-sub">
					<a href="?page=ajouter_un">
					<i class="fa fa-users"></i>
						<span class="title">Application</span>
					</a>
					<ul >
						<li>
							<a href="?page=ajouter_application">
								<span class="title">Ajouter </span>
							</a>
						</li>

						<li>
							<a href="?page=modifier_application">
								<span class="title">Modifier</span>
							</a>
						</li>

						
						<li>
							<a href="?page=supprimer_application">
								<span class="title">Supprimer</span>
							</a>
						</li>

						<li>
							<a href="?page=recuperes_applications">
								<span class="title">Recuperer</span>
							</a>
						</li>
												
					</ul>
				</li>

				<li class="has-sub">
					<a href="?page=ajouter_un">
					<i class="fa fa-users"></i>
						<span class="title">Composant</span>
					</a>
					<ul >
						<li>
							<a href="?page=ajouter_composant">
								<span class="title">Ajouter </span>
							</a>
						</li>

						<li>
							<a href="?page=modifier_composant">
								<span class="title">Modifier</span>
							</a>
						</li>

						
						<li>
							<a href="?page=supprimer_composant">
								<span class="title">Supprimer</span>
							</a>
						</li>

						<li>
							<a href="?page=recuperes_composants">
								<span class="title">Recuperer</span>
							</a>
						</li>
												
					</ul>
				</li>

				<li class="has-sub">
					<a href="?page=ajouter_un">
					<i class="fa fa-users"></i>
						<span class="title">Service</span>
					</a>
					<ul >
						<li>
							<a href="?page=ajouter_service">
								<span class="title">Ajouter </span>
							</a>
						</li>

						<li>
							<a href="?page=modifier_service">
								<span class="title">Modifier</span>
							</a>
						</li>

						
						<li>
							<a href="?page=supprimer_service">
								<span class="title">Supprimer</span>
							</a>
						</li>

						<li>
							<a href="?page=recuperes_services">
								<span class="title">Recuperer</span>
							</a>
						</li>
												
					</ul>
				</li>

				<li class="has-sub">
					<a href="?page=ajouter_un">
					<i class="fa fa-users"></i>
						<span class="title">Donnee Echange</span>
					</a>
					<ul >
						<li>
							<a href="?page=ajouter_donnee_echange">
								<span class="title">Ajouter </span>
							</a>
						</li>

						<li>
							<a href="?page=modifier_donnee_echange">
								<span class="title">Modifier</span>
							</a>
						</li>

						
						<li>
							<a href="?page=supprimer_donnee_echange">
								<span class="title">Supprimer</span>
							</a>
						</li>

						<li>
							<a href="?page=recuperes_donnee_echanges">
								<span class="title">Recuperer</span>
							</a>
						</li>
												
					</ul>
				</li>

				<li class="has-sub">
					<a href="?page=ajouter_un">
					<i class="fa fa-users"></i>
						<span class="title">Donnee Persistante</span>
					</a>
					<ul >
						<li>
							<a href="?page=ajouter_donnee_persistante">
								<span class="title">Ajouter </span>
							</a>
						</li>

						<li>
							<a href="?page=modifier_donnee_persistante">
								<span class="title">Modifier</span>
							</a>
						</li>

						
						<li>
							<a href="?page=supprimer_donnee_persistante">
								<span class="title">Supprimer</span>
							</a>
						</li>

						<li>
							<a href="?page=recuperes_donnee_persistantes">
								<span class="title">Recuperer</span>
							</a>
						</li>
												
					</ul>
				</li><li class="has-sub">
					<a href="?page=ajouter_un">
					<i class="fa fa-users"></i>
						<span class="title">Api</span>
					</a>
					<ul >
						<li>
							<a href="?page=ajouter_api">
								<span class="title">Ajouter </span>
							</a>
						</li>

						<li>
							<a href="?page=modifier_api">
								<span class="title">Modifier</span>
							</a>
						</li>

						
						<li>
							<a href="?page=supprimer_api">
								<span class="title">Supprimer</span>
							</a>
						</li>

						<li>
							<a href="?page=recuperes_apis">
								<span class="title">Recuperer</span>
							</a>
						</li>
												
					</ul>
				</li>

									
				<li>
						<a href="/smaas/kill.php">
						<i class="entypo-logout right"></i>	Log Out 
						</a>
					</li>
					



			</ul>
	</div>

	</div>
