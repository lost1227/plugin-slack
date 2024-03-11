<h3><i class="fa fa-slack fa-fw"></i>Slack</h3>
<div class="panel">
    <?= $this->form->label(t('Bot token'), 'slack_bot_token') ?>
    <?= $this->form->text('slack_bot_token', $values) ?>

    <p class="form-help"><a href="https://github.com/kanboard/plugin-slack#configuration" target="_blank"><?= t('Help on Slack integration') ?></a></p>

    <div class="form-actions">
        <input type="submit" value="<?= t('Save') ?>" class="btn btn-blue"/>
    </div>
</div>
