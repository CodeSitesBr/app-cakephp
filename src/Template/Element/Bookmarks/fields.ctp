<?php

echo $this->Form->input('title', ['label' => 'Título']);
echo $this->Form->input('url', ['type' => 'text', 'label' => 'Link']);
echo $this->Form->input('description', ['label' => 'Descrição', 'class' => 'editor']);
?>