<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Criar usuário</h2>
        </div>
        <?= $this->Form->create($user) ?>
        <fieldset>
            <?= $this->element('Users/fields') ?>
        </fieldset>
        <?= $this->Form->button('<i class="fa fa-user-plus fa-lg" aria-hidden="true"></i> Criar', ['class' => 'btn btn-success']) ?>
        <?= $this->Html->link('<i class="fa fa-undo fa-lg" aria-hidden="true"></i> Voltar', ['controller' => 'Users', 'action' => 'index'], ['class' => 'btn btn-default', 'escape' => false]) ?>
        <?= $this->Form->end() ?>
    </div>
</div>