<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Criar link</h2>
        </div>
        <?= $this->Form->create($bookmark) ?>
        <fieldset>
            <?= $this->element('Bookmarks/fields') ?>
        </fieldset>
        <?= $this->Form->button('<i class="fa fa-plus fa-lg" aria-hidden="true"></i> Criar', ['class' => 'btn btn-success']) ?>
        <?= $this->Html->link('<i class="fa fa-undo fa-lg" aria-hidden="true"></i> Voltar', ['controller' => 'Bookmarks', 'action' => 'index'], ['class' => 'btn btn-default', 'escape' => false]) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

<?= $this->Html->script('../lib/ckeditor/ckeditor', ['block' => 'script-bottom']); ?>

<?php
//$myscript = $this->Url->script('../lib/ckeditor/config_basic.js');
$myscript = $this->Url->script('../lib/ckeditor/config_standard.js');
//$myscript = $this->Url->script('../lib/ckeditor/config_full.js');

echo $this->Html->scriptBlock(
        "CKEDITOR.replace(
            'description', {
                customConfig: '$myscript'
            });", ['block' => 'script-bottom']);
?>
