<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">
		<li class="active">

<a href="inicio">

	<i class="fa fa-home"></i>
	<span>Inicio</span>

</a>

</li>
		<?php

		if($_SESSION["perfil"] == "Administrador"){

		echo '

			<li>

				<a href="usuarios">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Docente"){

			echo '<li>

				<a href="cursos">

					<i class="fa fa-university"></i>
					<span>Cursos</span>

				</a>

			</li>

			<li>

				<a href="asignaturas">

					<i class="fa fa-book fa-fw"></i>
					<span>Asignaturas</span>

				</a>

			</li>

			<li>

				<a href="crear-clases">
				<i class="fa fa-pencil-square-o"></i>
				<span>Crear Clases</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Estudiante"){

			echo '<li>

				<a href="estudiantes">

					<i class="fa fa-users"></i>
					<span>Estudiantes</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Estudiante"){

		echo '<li class="treeview">

				<a href="#">

					<i class="fa fa-list-ul"></i>
					
					<span>Clases</span>
					
					<span class="pull-right-container">
					
						<i class="fa fa-angle-left pull-right"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="clases">
							
							<i class="fa fa-circle-o"></i>
							<span>Administrar clases</span>

						</a>

					</li>';

					if($_SESSION["perfil"] == "Administrador"){

					echo '<li>

						<a href="reportes">
							
							<i class="fa fa-circle-o"></i>
							<span>Reporte de clases</span>

						</a>

					</li>';

				}

				echo '</ul>

			</li>';
			}
			?>
		</ul>

	 </section>

</aside>