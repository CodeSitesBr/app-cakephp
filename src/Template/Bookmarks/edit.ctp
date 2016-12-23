<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Editar link</h2>
        </div>
        <?= $this->Form->create($bookmark, ['novalidate']) ?>
        <fieldset>
            <?= $this->element('Bookmarks/fields') ?>
        </fieldset>
        <?= $this->Form->button('<i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i> Editar', ['class' => 'btn btn-success']) ?>
        <?= $this->Html->link('<i class="fa fa-undo fa-lg" aria-hidden="true"></i> Voltar', ['controller' => 'Bookmarks', 'action' => 'index'], ['class' => 'btn btn-default', 'escape' => false]) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

<?= $this->element('Editor/editor-tinymce'); ?>