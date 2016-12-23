<nav class="navbar navbar-inverse nav-users">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?= $this->Html->link('CodeSites', ['controller' => 'Users', 'action' => 'index'], ['class' => 'navbar-brand']) ?>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
            <?php if (isset($current_user)): ?>
                <ul class="nav navbar-nav">
                    <?php if ($current_user['role'] == 'admin'): ?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuarios <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <?= $this->Html->link('Listar usuários', ['controller' => 'Users', 'action' => 'index']) ?>
                                </li>
                                <li>
                                    <?= $this->Html->link('Criar usuário', ['controller' => 'Users', 'action' => 'add']) ?>
                                </li>
                            </ul>
                        </li>
                    <?php endif; ?>
                    <li>
                        <?= $this->Html->link('Minha lista', ['controller' => 'bookmarks', 'action' => 'index']) ?>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?= $this->Html->link('<i class="fa fa-power-off" aria-hidden="true"></i> Sair', ['controller' => 'Users', 'action' => 'logout'], ['escape' => false]) ?>
                    </li>
                </ul>
            <?php else: ?>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?= $this->Html->link('<i class="fa fa-user-plus" aria-hidden="true"></i> Registrar-se', ['controller' => 'Users', 'action' => 'add'], ['escape' => false]) ?>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>