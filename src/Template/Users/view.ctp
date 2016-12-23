<div class="well">
    <h2><?= $user->first_name . ' ' . $user->last_name ?></h2>
    <br>
    <dl>
        <dt>Nome</dt>
        <dd>
            <?= $user->first_name ?>
            &nbsp;
        </dd>
        <br>

        <dt>Sobrenome</dt>
        <dd>
            <?= $user->last_name ?>
            &nbsp;
        </dd>
        <br>

        <dt>E-mail</dt>
        <dd>
            <?= $user->email ?>
            &nbsp;
        </dd>
        <br>

        <dt>Ativo</dt>
        <dd>
            <?= $user->active ? 'SIM' : 'NÃO' ?>
            &nbsp;
        </dd>
        <br>

        <dt>Criado</dt>
        <dd>
            <?= $user->created->nice() ?>
            &nbsp;
        </dd>
        <br>

        <dt>Modificado</dt>
        <dd>
            <?= $user->modified->nice() ?>
            &nbsp;
        </dd>
    </dl>
</div>