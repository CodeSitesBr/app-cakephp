<div class="paginator text-center">
    <ul class="pagination">
        <?= $this->Paginator->first('<i class="fa fa-chevron-left" aria-hidden="true"></i><i class="fa fa-chevron-left" aria-hidden="true"></i> Primeiro', ['escape' => false]); ?>
        <?= $this->Paginator->prev('<i class="fa fa-chevron-left" aria-hidden="true"></i> Anterior', ['escape' => false]); ?>
        <?= $this->Paginator->numbers(['before' => '', 'after' => '']); ?>
        <?= $this->Paginator->next('Próximo <i class="fa fa-chevron-right" aria-hidden="true"></i>', ['escape' => false]); ?>
        <?= $this->Paginator->last('Último <i class="fa fa-chevron-right" aria-hidden="true"></i><i class="fa fa-chevron-right" aria-hidden="true"></i>', ['escape' => false]); ?>
    </ul>
    <p><?= $this->Paginator->counter('{{start}} - {{end}} de {{count}} | Página {{page}} de {{pages}}'); ?></p>
</div>