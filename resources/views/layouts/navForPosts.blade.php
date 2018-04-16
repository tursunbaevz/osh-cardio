<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-blue fixed-top nav-posts">
    <div class="container"> 
        <div class="navbar-translate">
            <a href="{{'/'}}" style="text-decoration: none;">
                <img src="/img/logo_text.svg" alt="logo" class="logo white-shadow">
            </a>  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" data-nav-image="../assets/img/blurred-image-1.jpg" data-color="orange">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenu" href="" data-toggle="dropdown">
                        <i class="now-ui-icons design_app"></i>
                        <p>О компании</p>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="./index.html">
                            <i class="now-ui-icons travel_info"></i>
                            О нас
                        </a>
                        <a class="dropdown-item" href="{{'/contacts'}}">
                            <i class="now-ui-icons tech_mobile"></i>
                            Контакты
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{'/services'}}" class="nav-link">
                        <i class="now-ui-icons health_ambulance" aria-hidden="true"></i>
                        <p>Услуги</p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{'/doctors'}}" class="nav-link">
                        <i class="now-ui-icons users_single-02" aria-hidden="true"></i>
                        <p>Врачи</p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{'/albums'}}" class="nav-link">
                        <i class="now-ui-icons design_image" aria-hidden="true"></i>
                        <p>Галерея</p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="{{'/posts'}}" class="nav-link">
                        <i class="now-ui-icons files_paper" aria-hidden="true"></i>
                        <p>Новости</p>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
<!-- End Navbar -->
