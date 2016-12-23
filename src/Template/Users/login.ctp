<?= $this->Html->css('login') ?>

<div class="container">

    <div class="row" style="margin-top:20px">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
            <?= $this->Flash->render('auth') ?>
            <?= $this->Form->create() ?>
            <fieldset>
                <h2>Inserir seus dados de acesso</h2>
                <hr class="colorgraph">
                <div class="form-group">
                    <?= $this->Form->input('email', ['class' => 'form-control input-lg', 'placeholder' => 'E-mail', 'label' => false, 'required']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('password', ['class' => 'form-control input-lg', 'placeholder' => 'Senha', 'label' => false, 'required']) ?>
                </div>
                <hr class="colorgraph">
                <div class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <?= $this->Form->button('<i class="fa fa-sign-in" aria-hidden="true"></i> Acessar', ['class' => 'btn btn-lg btn-success btn-block']) ?>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <?= $this->Html->link('<i class="fa fa-user-plus" aria-hidden="true"></i> Registrar-se', ['controller' => 'Users', 'action' => 'add'], ['class' => 'btn btn-lg btn-primary btn-block', 'escape' => false]) ?>
                    </div>
                </div>
            </fieldset>
            <?= $this->Form->end() ?>
        </div>
    </div>

</div>