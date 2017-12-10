<?php ?>
    <div class="sidebar" data-color="red" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.php" class="simple-text">
                    SISTEMA WEB
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>PANEL</p>
                    </a>
                </li>
                <li>
                <!--    <a href="user.html">
                    -->
                           <a href="usuario.php?idusuario=<?php echo $idusuario; ?>">
                            <i class="pe-7s-user"></i>
                        <p>PERFIL</p>
                    </a>
                </li>
                <li>
                    <a href="albums.php">
                        <i class="pe-7s-album"></i>
                        <p>ALBUMS</p>
                    </a>
                </li>
                 <li>
                    <a href="canciones.php">
                        <i class="pe-7s-volume"></i>
                        <p>CANCIONES</p>
                    </a>
                </li>
                
                
                <li>
                    <a href="artistas.php">
                        <i class="pe-7s-star"></i>
                        <p>ARTISTAS</p>
                    </a>
                </li>
                
                <li>
                    <a href="eventos.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>EVENTOS</p>
                    </a>
                </li>
              
				<li class="active-pro">
                   <!-- <a href="upgrade.html">
                       -->
                        <a href="reporte.php">
                         <i class="pe-7s-rocket"></i>
                        <p>REPORTE</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>
