

    
    <!-- ADMIN HEADER -->

    <header class="headerMenu сlearfix sb-page-header">   
        <div class="header">
            <a class="navbar-brand" href="">
                Admin Panel
            </a> 
        </div>

  
    </header>

    <!-- VERTICAL NAVBAR -->

    <aside class="vertical-menu" id="vertical-menu">
        <div>
            <ul class="menu-bar">
                <div class="sidenav-menu-heading">
                    Core
                </div>

                <div class="dropdown-divider"></div>

                <li>
                    <a href="dashboard.php" class="a-verMenu dashboard_link">
                        <i class="fas fa-tachometer-alt icon-ver"></i>
                        <span style="padding-left:6px;">Dashboard</span>
                    </a>
                </li>

                <div class="dropdown-divider"></div> 

                <div class="sidenav-menu-heading">
                    Menus
                </div>

                <div class="dropdown-divider"></div>

                <li>
                    <a href="menu_categories.php" class="a-verMenu menu_categories_link">
                        <i class="fas fa-list icon-ver"></i>
                        <span style="padding-left:6px;">Menu Categories</span>
                    </a>
                </li>
                <li>
                    <a href="menus.php" class="a-verMenu menus_link">
                        <i class="fas fa-utensils icon-ver"></i>
                        <span style="padding-left:6px;">Menus</span>
                    </a>
                </li>
                <li>
                    <a href="gallery.php" class="a-verMenu gallery_link">
                        <i class="far fa-image icon-ver"></i>
                        <span style="padding-left:6px;">Gallery</span>
                    </a>
                </li>
                
                <div class="dropdown-divider"></div>
                
                <div class="sidenav-menu-heading">
                    Clients & Staff
                </div>
                
                <div class="dropdown-divider"></div>
                
                <li>
                    <a href="clients.php" class="a-verMenu clients_link">
                        <i class="far fa-address-card icon-ver"></i>
                        <span style="padding-left:6px;">Clients</span>
                    </a>
                </li>
                <li>
                    <a href="users.php" class="a-verMenu users_link">
                        <i class="far fa-user icon-ver"></i>
                        <span style="padding-left:6px;">Users</span>
                    </a>
                </li>
                

                <div class="dropdown-divider"></div>

            </ul>
        </div>
    </aside>

    <!-- START BODY CONTENT  -->

    <div id="content" style="margin-left:240px;"> 
        <section class="content-wrapper" style="width: 100%;padding: 70px 0 0;">
            <div class="inside-page" style="padding:20px">
                <div class="page_title_top" style="margin-bottom: 1.5rem!important;">
                    <h1 style="color: #5a5c69!important;font-size: 1.75rem;font-weight: 400;line-height: 1.2;">
                        <?php echo $pageTitle; ?>
                    </h1>
                </div>