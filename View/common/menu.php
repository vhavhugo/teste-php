<nav class="navbar navbar-default" style="background-color: #8a1818; font-size: large; ">
    <div class="container-fluid">
        <div class="container">
            <div class="navbar navbar-inverse" style="background-color: #8a1818; border-color: #8a1818;">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="menu-top">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle text-uppercase" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #fff; font-size: 0.8em;"><i class="fa fa-th-list"></i> Produtos</a>
                        <ul class="dropdown-menu">                            
                            <li><a id="menu-home" href="<?= Router::base(); ?>"><i class="fa fa-home"></i> Home</a></li>
                            <li><a id="menu-produtos" href="<?= Router::base(); ?>/produtos/"><i class="fa fa-tags"></i> Todos os produtos cadastrados no sistema</a></li>
                        </ul>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </div><!-- /.container-fluid -->
</nav>