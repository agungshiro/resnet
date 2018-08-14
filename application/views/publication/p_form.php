<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php echo form_open('', array('role'=>'form')); ?>

    <div class="row">
        <?php // username ?>
        <div class="form-group col-sm-4<?php echo form_error('title') ? ' has-error' : ''; ?>">
            <?php echo form_label('Title', 'title', array('class'=>'control-label')); ?>
            <span class="required">*</span>
            <?php echo form_input(array('name'=>'title', 'value'=>set_value('title', (isset($user['title']) ? $user['title'] : '')), 'class'=>'form-control')); ?>
        </div>
    </div>

    <div class="row">
        <?php // username ?>
        <div class="form-group col-sm-4<?php echo form_error('link') ? ' has-error' : ''; ?>">
            <?php echo form_label('Link', 'link', array('class'=>'control-label')); ?>
            <span class="required">*</span>
            <?php echo form_input(array('name'=>'link', 'value'=>set_value('link', (isset($user['link']) ? $user['link'] : '')), 'class'=>'form-control')); ?>
        </div>
    </div>

    <div class="row">
        <?php // institution ?>
        <div class="form-group col-sm-6<?php echo form_error('abstract') ? ' has-error' : ''; ?>">
            <?php echo form_label('Abstract', 'abstract', array('class'=>'control-label')); ?>
            <span class="required">*</span>
            <?php echo form_textarea(array('name'=>'abstract', 'value'=>set_value('abstract', (isset($user['abstract']) ? $user['abstract'] : '')), 'class'=>'form-control', 'type'=>'abstract')); ?>
        </div>
    </div>

    <?php // buttons ?>
    <div class="row pull-right">
        <a class="btn btn-link" href="<?php echo $cancel_url; ?>"><?php echo lang('core button cancel'); ?></a>
        <?php if ($this->session->userdata('logged_in')) : ?>
            <button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-save"></span> <?php echo lang('core button save'); ?></button>
        <?php else : ?>
            <button type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> <?php echo lang('users button register'); ?></button>
        <?php endif; ?>
    </div>

<?php echo form_close(); ?>
