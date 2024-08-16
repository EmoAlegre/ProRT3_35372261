<?php
   $session = session();
   $nombre = $session->get('nombre');
   $perfil = $session->get('perfil_id');
?>

<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url('principal'); ?>">  
            <img src="assets/img/genericologo.jpg" alt="Logo" width="100" height="100" class="img-fluid"/>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- Enlaces comunes -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('quienes_somos'); ?>">Quienes somos</a>
                </li>

                <?php if ($session->get('logged_in')): ?>
                    <!-- Usuario logueado -->
                    <?php if ($perfil == 1): ?>
                        <!-- Usuario administrador -->
                        <li class="nav-item">
                            <div class="btn btn-secondary active btnUser btn-sm">
                                ADMIN: <?php echo $nombre; ?>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('/logout'); ?>">Cerrar Sesión</a>
                        </li>
                    <?php else: ?>
                        <!-- Usuario normal -->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('/logout'); ?>">Cerrar Sesión</a>
                        </li>
                    <?php endif; ?>
                <?php else: ?>
                    <!-- Usuario no logueado -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('registro'); ?>">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('login'); ?>">Login</a>
                    </li>
                <?php endif; ?>
            </ul>

            <!-- Formulario de búsqueda -->
            <form class="d-flex ms-auto" role="search" action="<?php echo base_url('/search'); ?>" method="get">
                <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="query">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>
