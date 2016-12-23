<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>
                Minha lista favoritos
                <?= $this->Html->link('<i class="fa fa-plus fa-lg" aria-hidden="true"></i> Novo', ['controller' => 'Bookmarks', 'action' => 'add'], ['class' => 'btn btn-primary pull-right', 'escape' => false]); ?>
            </h2>
        </div>
        <ul class="list-group">
            <?php foreach ($bookmarks as $bookmark): ?>
                <li class="list-group-item">
                    <h4 class="list-group-item-heading"><?= h($bookmark->title) ?></h4>
                    <p>
                        <strong class="text-info">
                            <small>
                                <?= $this->Html->link($bookmark->url, null, ['target' => '_blank']) ?>
                            </small>
                        </strong>
                    </p>
                    <p class="list-group-item-text">
                        <?= $bookmark->description ?>
                    </p>
                    <br>
                    <?= $this->Html->link('<i class="fa fa-pencil fa-lg" aria-hidden="true"></i> Editar', ['controller' => 'Bookmarks', 'action' => 'edit', $bookmark->id], ['class' => 'btn btn-sm btn-primary', 'escape' => false]) ?>
                    <?= $this->Form->postLink('<i class="fa fa-trash fa-lg" aria-hidden="true"></i> Remover', ['controller' => 'Bookmarks', 'action' => 'delete', $bookmark->id], ['confirm' => 'Remover link ?', 'class' => 'btn btn-sm btn-danger', 'escape' => false]) ?>
                </li>
            <?php endforeach ?>
        </ul>

        <?= $this->element('pagination'); ?>
    </div>
</div>
