<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https:/www.unicatolica.edu.co/" target="_blank" class="brand-link">
        <img src="img\3x3LOGOTIPOSOLO.png" alt="UNICATÓLICA" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">UNICATÓLICA</span>
    </a>

    <!-- Brand Logo 2-->
    <a href="<?=\yii\helpers\Url::home()?>" class="brand-link">
        <img src="img\audi-removebg.png"  class="brand-image img-fluid elevation-3" >
        <span class="brand-text font-weight-light">INICIO</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <?php if (Yii::$app->user->isGuest) { ?>
                    <img src="img\INCOGNITO3x3.jpg" class="img-circle elevation-2" alt="User Image">
                <?php } else { ?>
                    <img src="img\login3x3.jpg" class="img-circle elevation-2" alt="User Image">
                <?php } ?>
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <?php 
                        if (Yii::$app->user->isGuest) {
                            echo 'Invitado';
                        } else {
                            echo Yii::$app->user->identity->username; 
                        }
                    ?>
                </a>                
            </div>
        </div>

        

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'Menú principal', 'visible' => !Yii::$app->user->isGuest,
                        'icon' => 'list-alt',
                        'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            
                           
                            ['label' => 'Categoria Procedimiento', 'url' => ['/categoria/index']],
                            ['label' => 'Procedimiento', 'url' => ['/procedimientos/index']],
                            ['label' => 'Clinicas', 'url' => ['/clinicas/index']],
                            ['label' => 'Colaborador', 'url' => ['/colaborador/index']],
                            ['label' => 'Pacientes', 'url' => ['/pacientes/index']],
                            ['label' => 'Informaciòn de cirugia', 'url' => ['/infocirugia/index']], 
                        ]
                    ],
                    
                    
                    ['label' => 'Sistema', 'header' => true],
                    ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    
                   // ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                  //  ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                    
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>