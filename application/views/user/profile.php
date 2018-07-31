<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	<div class="row panel">
		<div class="col-md-4 bg_blur ">
            
		</div>
        <div class="col-md-8  col-xs-12">
           <img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="img-thumbnail picture hidden-xs" />
           <img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="img-thumbnail visible-xs picture_mob" />
           <div class="header">
                <h1><?php echo $user['first_name'].' '.$user['last_name']; ?></h1>
                <h4><?php echo $user['institution']; ?></h4>
                <p>
                <span><?php echo $user['short_bio']; ?></span>
                </p>
                <p>
                <?php if($this->user['id'] == $user['id']): ?>
                    <a class="btn btn-primary" href="<?php echo base_url('profile/edit'); ?>" role="button">Edit Profile</a>
                <?php endif; ?>
                </p>
                <?php if($user['relation']) : ?>
                <a class="btn btn-success" href="#" role="button">Following</a>
                <?php else: ?>
                <a class="btn btn-primary" href="<?php echo base_url('follow?rid='.$user['id']); ?>" role="button">Follow</a>
                <?php endif;  ?>
            </div>
           
        </div>
    </div>   
    
	<div class="row nav">    
        <div class="col-md-4"></div>
        <div class="col-md-8 col-xs-12" style="margin: 0px;padding: 0px;">
        <!--
            <div class="col-md-4 col-xs-4 well"><i class="fa fa-weixin fa-lg"></i> 16</div>
            <div class="col-md-4 col-xs-4 well"><i class="fa fa-heart-o fa-lg"></i> 14</div>
            <div class="col-md-4 col-xs-4 well"><i class="fa fa-thumbs-o-up fa-lg"></i> 26</div>
        -->
        </div>
    </div>
</div>
