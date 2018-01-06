<?php

use yii\helpers\Html;

$this->title = 'Profile';
// $this->params['breadcrumbs'][] = $this->title;

$assets = $this->theme->baseUrl.'/assets';
?>


$assets = $this->theme->baseUrl.'/assets';
<?php foreach ($model as $model): ?>
<!-- Page content -->
      <div class="row">
        <h1>My Profile</h1>
        <h4>Your Rocket account information.</h4>
      </div>
      <div class="profile-header">
        <div class="row">
          <div class="header-l col-sm-7 col-xs-12">
            <?php echo ('<img src ='.'../../cedinfo/admin/uploads/' . $model->photo .'>'); ?>
            <div class="header-l-info">
              <h3><?=$model->fullname ?> <a href="#" title="Verified"><i class="fa fa-check-square-o" aria-hidden="true"></i></a></h3>
              <h5><?=$model->position->position_name ?></h5>
              <span><i class="fa fa-rocket" aria-hidden="true"></i> Elite Coder</span>
            </div>
          </div>
          <div class="header-r col-sm-5 col-xs-12">
            <h5 class="availability">English: <span><?=$model->teacher_en?></span></h5>
            <h5 class="location">Rest room: <span><?=$model->room->room_name ?></span></h5>
            <h5 class="age">E-mail: <span><?=$model->teacher_email ?></span></h5>
            <h5 class="phone">Phone number: <span><?=$model->teacher_tel ?></span></h5>
            <a href="#" title="Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            <a href="#" title="YouTube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <div class="profile-body">
        <div class="row">
          <div class="col-sm-8 col-xs-12">
            <ul class="nav nav-tabs" role="tablist">
              <li class="active"><a href="#profile" role="tab" data-toggle="tab">Profile</a></li>
              <li><a href="#reviews" role="tab" data-toggle="tab">Reviews</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="profile">
                <div class="profile-content">
                  <h4>About</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dolor doloremque in odio id neque.Quis obcaecati eum nam distinctio alias iure temporibus a accusantium! <br><br>Minus sapiente impedit expedita, sequi.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dolor doloremque in odio id neque. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.ui.</p>
                  <hr>
                  <h4>Skills</h4>
                  <div class="skills">
                    <span>HTML5</span><span>CSS3</span><span>javascript</span><span>jQuery</span>
                    <span>php</span><span>node.js</span><span>python</span><span>JAVA</span><span>photoshop</span><span>UI</span><span>UX</span><span>MySQL</span><span>wordpress</span><span>Android</span><span>iOS</span><span>C#</span>
                  </div>
                  <hr>
                  <h4>Education</h4>
                  <a class="languages" href="javascript:;">
                    <img src="<?=$assets?>/img/flags/TH.png" alt="English flag" style="width: 30px; height: 25px"> English
                  </a>
                  <a class="languages" href="javascript:;">
                    <img src="<?=$assets?>/img/flags/DE.png" alt="German flag"> German
                  </a>
                  <a class="languages" href="javascript:;">
                    <img src="<?=$assets?>/img/flags/FR.png" alt="French flag"> French
                  </a>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="reviews">
                <div class="reviews-content">
                  <h3>Reviews <span>(27)</span></h3>
                  <ul id="review">
                    <li class="reviews-item">
                      <img src="img/users/user02.jpg" alt="User image">
                      <div class="reviews-info">
                        <h4><a href="user-profile.html">John Doe</a></h4>
                        <h5>Web Developer</h5>
                        <span class="pull-right">1h ago</span>
                      </div>
                      <div class="reviews-body">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quisquam officia rem quas, adipisci nisi. Dolorem fugit nostrum, cum beatae, totam, consequuntur aut perspiciatis iure nesciunt iusto, quo eveniet in.
                      </div>
                      <hr>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12">
            <div class="profiles">
              <h2 id="profiles-header">Similar Profiles </h2>
                  <!-- Find teacher right box -->
                <ul id="similarProfile" class="animated zoomIn">
                  <li>
                    <a class="profiles-item" href="user-profile.html">
                      <span class="profiles-item-img">
                        <img src="img/users/user02.jpg" alt="User image">
                      </span>
                      <div class="profiles-block">
                        <div class="profiles-name">John Doe</div>
                        <div class="profiles-desc">Full stack web developer</div>
                        <span class="elite"><i class="fa fa-rocket" aria-hidden="true"></i> Elite Coder</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="profiles-item" href="user-profile.html">
                      <span class="profiles-item-img">
                        <img src="img/users/user11.jpg" alt="User image">
                      </span>
                      <div class="profiles-block">
                        <div class="profiles-name">Carolina Reigle</div>
                        <div class="profiles-desc">UI Developer</div>
                        <span class="elite"><i class="fa fa-rocket" aria-hidden="true"></i> Elite Coder</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="profiles-item" href="user-profile.html">
                      <span class="profiles-item-img">
                        <img src="img/users/user10.jpg" alt="User image">
                      </span>
                      <div class="profiles-block">
                        <div class="profiles-name">Jae Clore</div>
                        <div class="profiles-desc">Full stack web developer</div>
                        <span class="elite"><i class="fa fa-rocket" aria-hidden="true"></i> Elite Coder</span>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="profiles-item" href="user-profile.html">
                      <span class="profiles-item-img">
                        <img src="img/users/user07.jpg" alt="User image">
                      </span>
                      <div class="profiles-block">
                        <div class="profiles-name">Ricardo Jarrard</div>
                        <div class="profiles-desc">UI Developer</div>
                        <span class="freelaner"><i class="fa fa-user" aria-hidden="true"></i> Freelaner</span>
                      </div>
                    </a>
                  </li>
                </ul>
                <!-- End !!! -->

            </div>
          </div><!-- col-sm-4 -->
        </div>
      </div>
    <!-- end .contentWrapper -->
    <?php endforeach; ?>
