<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>
<div class="container">
    <?php foreach($result as $item): ?>
  <div class="well">
      <div class="media">
      	<a class="pull-left" href="#">
    		<img class="media-object" src="http://placekitten.com/150/150">
  		</a>
  		<div class="media-body">
            <h4 class="media-heading">
              <a href="<?php echo base_url('profile/user/'.$item['id']); ?>">
              <?php echo $item['first_name'].' '.$item['last_name']; ?>
              </a>
            </h4>
            <p><?php echo $item['institution'] ?></p>
          <p><?php echo $item['short_bio'] ?></p>
            <!--
          <ul class="list-inline list-unstyled">
  			<li><span><i class="glyphicon glyphicon-calendar"></i> 2 days, 8 hours </span></li>
            <li>|</li>
            <span><i class="glyphicon glyphicon-comment"></i> 2 comments</span>
            <li>|</li>
            <li>
               <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
            </li>
            <li>|</li>
            <li>
            
              <span><i class="fa fa-facebook-square"></i></span>
              <span><i class="fa fa-twitter-square"></i></span>
              <span><i class="fa fa-google-plus-square"></i></span>
            </li>
			</ul>
            -->
            <?php if($item['relation']) : ?>
              <a class="btn btn-success" href="#" role="button">Following</a>
            <?php else: ?>
              <a class="btn btn-primary" href="<?php echo base_url('follow?rid='.$item['id']); ?>" role="button">Follow</a>
            <?php endif;  ?>
       </div>
    </div>
  </div>
<?php endforeach; ?>
  <?php echo $pagination; ?>
</div>