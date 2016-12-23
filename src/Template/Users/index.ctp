<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>
                Lista usuários
                <?= $this->Html->link('<i class="fa fa-plus fa-lg" aria-hidden="true"></i> Novo', ['controller' => 'Users', 'action' => 'add'], ['class' => 'btn btn-primary pull-right', 'escape' => false]); ?>
            </h2>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('first_name', ['Nome']) ?></th>
                        <th><?= $this->Paginator->sort('last_name', ['Sobrenome']) ?></th>
                        <th><?= $this->Paginator->sort('email', ['E-mail']) ?></th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $this->Number->format($user->id) ?></td>
                            <td><?= h($user->first_name) ?></td>
                            <td><?= h($user->last_name) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td>
                                <?= $this->Html->link('<i class="fa fa-eye fa-lg" aria-hidden="true"></i> Ver', ['action' => 'view', $user->id], ['class' => 'btn btn-sm btn-info', 'escape' => false]); ?>
                                <?= $this->Html->link('<i class="fa fa-pencil fa-lg" aria-hidden="true"></i> Editar', ['action' => 'edit', $user->id], ['class' => 'btn btn-sm btn-primary', 'escape' => false]); ?>
                                <?= $this->Form->postLink('<i class="fa fa-trash fa-lg" aria-hidden="true"></i> Remover', ['action' => 'delete', $user->id], ['confirm' => 'Remover usuário ?', 'class' => 'btn btn-sm btn-danger', 'escape' => false]); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <?= $this->element('pagination'); ?>
    </div>
</div>
