<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $data->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $data->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Datas'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="datas form large-10 medium-9 columns">
    <?= $this->Form->create($data) ?>
    <fieldset>
        <legend><?= __('Edit Data') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('body');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
