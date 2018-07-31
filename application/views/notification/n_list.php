<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-6 text-left">
                <h3 class="panel-title"><?php echo lang('contact title messages_list'); ?></h3>
            </div>
            <div class="col-md-6 text-right">
            </div>
        </div>
    </div>

    <table class="table table-striped table-hover-warning">
        <thead>

            <?php // sortable headers ?>
            <tr>
                <td>
                    <h3>Notification</h3>
                </td>
                <td>
                    
                </td>
                
            </tr>

        </thead>
        <tbody>

            <?php // data rows ?>
            <?php if ($total) : ?>
                <?php foreach ($messages as $message) : ?>
                    <tr>
                        <td>
                            <?php echo $message['message']; ?>
                        </td>
                        <td>
                            
                        </td>
                        
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="6">
                        <?php echo lang('core error no_results'); ?>
                    </td>
                </tr>
            <?php endif; ?>

        </tbody>
    </table>

    <?php // list tools ?>
    <div class="panel-footer">
        <div class="row">
            <div class="col-md-2 text-left">
                <label><?php echo sprintf(lang('admin label rows'), $total); ?></label>
            </div>
            <div class="col-md-2 text-left">
                <?php if ($total > 10) : ?>
                    <select id="limit" class="form-control">
                        <option value="10"<?php echo ($limit == 10 || ($limit != 10 && $limit != 25 && $limit != 50 && $limit != 75 && $limit != 100)) ? ' selected' : ''; ?>>10 <?php echo lang('admin input items_per_page'); ?></option>
                        <option value="25"<?php echo ($limit == 25) ? ' selected' : ''; ?>>25 <?php echo lang('admin input items_per_page'); ?></option>
                        <option value="50"<?php echo ($limit == 50) ? ' selected' : ''; ?>>50 <?php echo lang('admin input items_per_page'); ?></option>
                        <option value="75"<?php echo ($limit == 75) ? ' selected' : ''; ?>>75 <?php echo lang('admin input items_per_page'); ?></option>
                        <option value="100"<?php echo ($limit == 100) ? ' selected' : ''; ?>>100 <?php echo lang('admin input items_per_page'); ?></option>
                    </select>
                <?php endif; ?>
            </div>
            <div class="col-md-6">
                <?php echo $pagination; ?>
            </div>
            <div class="col-md-2 text-right">
               
            </div>
        </div>
    </div>

</div>

<?php // messages modal ?>
<?php if ($total) : ?>
    <?php foreach ($messages as $message) : ?>
        <div class="modal fade" id="modal-<?php echo $message['id']; ?>" data-id="<?php echo $message['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-label-<?php echo $message['id']; ?>" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="modal-label-<?php echo $message['id']; ?>"><?php echo $message['title']; ?></h4>
                    </div>
                    <div class="modal-body">
                        <p><?php echo $message['message']; ?></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-inverse" data-dismiss="modal"><?php echo lang('core button close'); ?></button>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
