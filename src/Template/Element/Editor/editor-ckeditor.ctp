<?= $this->Html->script('../lib/ckeditor/ckeditor', ['block' => 'script-bottom']); ?>
<?= $this->Html->scriptBlock("CKEDITOR.replaceAll('editor');", ['block' => 'script-bottom']); ?>