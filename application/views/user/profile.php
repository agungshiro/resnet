<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	<div class="row panel">
		<div class="col-md-2 bg_blur ">
            
		</div>
        <div class="col-md-8  col-xs-12">
           <img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="img-thumbnail picture hidden-xs" />
           <img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="img-thumbnail visible-xs picture_mob" />
           <div class="header">
                <h1><?php echo $user['first_name'].' '.$user['last_name']; ?></h1>
                <h4><?php echo $user['institution']; ?></h4>
                <p>
                <?php echo $user['short_bio']; ?>
                </p>
                <p>
                <?php if($this->user['id'] == $user['id']): ?>
                    <a class="btn btn-primary" href="<?php echo base_url('profile/edit'); ?>" role="button">Edit Profile</a>
                <?php endif; ?>
                </p>

                <?php if($this->user['id'] != $user['id']): ?>
                    <?php if($user['relation']) : ?>
                        <a class="btn btn-success" href="#" role="button">Following</a>
                    <?php else: ?>
                        <a class="btn btn-primary" href="<?php echo base_url('follow?rid='.$user['id']); ?>" role="button">Follow</a>
                    <?php endif;  ?>
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

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
<div class="container">
	<div class="row">
        <?php echo form_open('activity/post',array('id'=>'contact-form','role'=>'form')); ?>
        <!--
		<form role="form" id="contact-form" class="contact-form" method="post" action="<?php base_url('activity/post'); ?>">
        -->        
                  	<div class="row">
                  		<div class="col-md-12">
                  		<div class="form-group">
                            <textarea class="form-control textarea" rows="3" name="Message" id="Message" placeholder="Share your idea"></textarea>
                  		</div>
                  	</div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                  <button type="submit" class="btn main-btn pull-right">Send to the world</button>
                  </div>
                  </div>
                </form>
	</div>
</div>

<gcloud components updatediv class="container">
	<div class="row">
    
        <div class="timeline-centered">

        <article class="timeline-entry">

            <div class="timeline-entry-inner">

                <div class="timeline-icon bg-success">
                    <i class="entypo-feather"></i>
                </div>

                <div class="timeline-label">
                    <h2><a href="#">Art Ramadani</a> <span>posted a status update</span></h2>
                    <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                </div>
            </div>

        </article>


        


        <article class="timeline-entry begin">

            <div class="timeline-entry-inner">

                <div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
                    <i class="entypo-flight"></i> +
                </div>

            </div>

        </article>

    </div>

    
	</div>
</div>
