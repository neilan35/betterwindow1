<div id="page-wrapper">
<h2 class="sub-header">New Door Open Type</h2>
<div class="dooropentypes form large-10 medium-9 columns">
    <?= $this->Form->create($dooropentype); ?>
    <fieldset>
        
            <div class="form-group">
            <?= $this->Form->input('type', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group">
            <?= $this->Form->input('price', ['class' => 'form-control']) ?>
            </div>        
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>