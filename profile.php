
<!-- < ?php include "header_navbar_footer/header_if_login.php"?> -->
<?php include "header_navbar_footer/Get_usernameProfile.php"?>
<title>Profile</title>
<?php include "header_navbar_footer/header.php"?>


      <!-- Main content -->
      <section class="content">
        <div class="container-fuild">
          <div class="row">
              <div class="col-12">
                  <div class="card card-widget widget-user">
                      <!-- Add the bg color to the header using any of the bg-* classes -->
                                           <div class="widget-user-header text-white" style="background: url('http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/702caus.jpg')no-repeat center center;background-size:cover;">
                                          <h3 class="widget-user-username">fayzo</h3> <!-- Elizabeth Pierce -->
                          <h5 class="widget-user-desc">Web Designer</h5>
                      </div>
                      <div class="widget-user-image">
                                              <img class="rounded-circle" src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/112baby3.png" alt="User Avatar">
                                          </div>
      
                      <div class="widget-user-image-under">
                      </div>
                      <div class="card-footer">
                          <div class="description">
                              <h5 class="description-header count-followers">9</h5>
                              <span class="description-text"><a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo.followers">FOLLOWERS</a></span>
                          </div>
                          <!-- /.description-block -->
                          <div class="description ">
                              <h5 class="description-header count-following">7</h5>
                              <span class="description-text"><a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo.following"> FOLLOWING</a></span>
                          </div>
                          <!-- /.description-block -->
                          <div class="description">
                              <h5 class="description-header"> 40</h5>
                              <span class="description-text"><a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo.posts"> POSTS</a></span>
                          </div>
                          <!-- /.description-block -->
                          <!-- /.description-block -->
                          <div class="description">
                              <h5 class="description-header"> 7</h5>
                              <span class="description-text">LIKES</span>
                          </div>
                          <!-- /.description-block -->
                          <div class="description">
                              <h5 class="description-header">35</h5>
                              <span class="description-text">VIEWS</span>
                          </div>
                          <!-- /.description-block -->
                      </div>
                      <!-- /.footer -->
                  </div>
                  <!-- /. card widget-user -->
              </div>
              <!-- column -->
          </div>
          <!-- row -->
      </div>
      </section>
      <section class="content-header">
        <div class="row mb-2">
            <div class="col-3">
                <h1><i>Profile</i></h1>
            </div>
            <div class="col-9">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="http://localhost:80/Blog_nyarwanda_CMS/home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo.album">Photo</a></li>
                                                              <li class="breadcrumb-item active"><i>  
                </i><button type="button" class="btn btn-primary btn-sm" onclick="location.href='http://localhost:80/Blog_nyarwanda_CMS/profileEdit.php&quot;'"><i>Edit Profile</i></button>
                </li>
                </ol>
            </div>
          </div>
      </section>
      <!-- Main content -->
      <section class="content">

        <div class="row">
          <div class="col-md-3 mb-3 ">
            <div class="info-box">
              <div class="info-inner message-color">
                <div class="info-in-head">
                  <!-- PROFILE-COVER-IMAGE -->
                  <img src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/702caus.jpg"
                    alt="User Image">
                </div>
                <!-- info in head end -->
                <div class="info-in-body">
                  <div class="in-b-box">
                    <div class="in-b-img">
                      <!-- PROFILE-IMAGE -->
                      <img src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/112baby3.png"
                        alt="User Image">
                    </div>
                  </div><!--  in b box end-->
                  <div class="info-body-name">
                    <div class="in-b-name">
                      <div><a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo">faysal shema</a></div>
                      <!-- Nina Mcintire -->
                      <span><small><a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo">engineering</a></small></span>
                    </div><!-- in b name end-->
                  </div><!-- info body name end-->
                </div><!-- info in body end-->
                <div class="info-in-footer">
                  <div class="number-wrapper">
                    <div class="num-box">
                      <div class="num-head">
                        <a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo.posts"> POSTS</a>
                      </div>
                      <div class="num-body">
                        40 </div>
                    </div>
                    <div class="num-box">
                      <div class="num-head">
                        <a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo.following"> FOLLOWING</a>
                      </div>
                      <div class="num-body">
                        <span class="count-following">7</span>
                      </div>
                    </div>
                    <div class="num-box">
                      <div class="num-head">
                        <a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo.followers">FOLLOWERS</a>
                      </div>
                      <div class="num-body">
                        <span class="count-followers">9</span>
                      </div>
                    </div>
                  </div><!-- mumber wrapper-->
                </div><!-- info in footer -->
              </div><!-- info inner end -->
            </div>
            
            <div class="card card-primary mb-3">
              <div class="card-header main-active p-1">
                  <h5 class="card-title text-center"><i> About Me</i></h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <strong><i class="fa fa-book mr-1"></i> Education</strong>

                  <p class="text-muted">
                      lycee                                </p>

                  <strong><i class="fa fa-book mr-1"></i> Diploma</strong>

                  <p class="text-muted">
                      project                                </p>

                  <strong><i class="fa fa-map-marker mr-1"></i> Location</strong>

                  <p class="text-muted"> BR</p>

                  <strong><i class="fa fa-pencil mr-1"></i> Skills</strong>

                  <p class="text-muted">
                      <span class="badge badge-danger"> web</span>
                      <span class="badge badge-success">Coding</span>
                      <span class="badge badge-info">Javascript</span>
                      <span class="badge badge-warning">PHP</span>
                      <span class="badge badge-primary">Node.js</span>
                  </p>

                  <strong><i class="fa fa-file-text-o mr-1"></i> Hobbys</strong>

                  <p class="text-muted"> styuding</p>
              </div>
              <!-- /.card-body -->
          </div>

            <div class="card card2 mb-3">
              <div class="card-header text-center main-active">
                 <h5><span class="badge badge-danger">7</span> Following</h5>
                 <!-- <div class="card-tools">
                  <span><span class="badge badge-danger">< ?php echo $row['following'] ;?></span>Following</span>
                   <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                   </button>
                   <button type="button" class="btn btn-tool" onclick='remove2();'><i class="fa fa-times"></i>
                   </button>
                 </div> -->
               </div>
               <!-- /.card-header -->
               <div class="card-body p-0">
                 <ul class="users-list clearfix">
  
        
                  <li>
                        <img class="rounded-circle" src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/258plots.jpg">
                       <a class="users-list-name" href="http://localhost:80/Blog_nyarwanda_CMS/BOSS">KABOSI</a>
                       <!-- <span class="users-list-date">Today</span> -->
                  </li> 
                  <li>
                        <img class="rounded-circle" src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultprofileimage.png">
                       <a class="users-list-name" href="http://localhost:80/Blog_nyarwanda_CMS/antonia">griezman</a>
                       <!-- <span class="users-list-date">Today</span> -->
                  </li> 
                  <li>
                        <img class="rounded-circle" src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/855fays.gif">
                       <a class="users-list-name" href="http://localhost:80/Blog_nyarwanda_CMS/zidanii">zidani</a>
                       <!-- <span class="users-list-date">Today</span> -->
                  </li> 
                  <li>
                        <img class="rounded-circle" src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultprofileimage.png">
                       <a class="users-list-name" href="http://localhost:80/Blog_nyarwanda_CMS/rihana">rihana</a>
                       <!-- <span class="users-list-date">Today</span> -->
                  </li> 
                  <li>
                        <img class="rounded-circle" src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultprofileimage.png">
                       <a class="users-list-name" href="http://localhost:80/Blog_nyarwanda_CMS/bosco">bosco</a>
                       <!-- <span class="users-list-date">Today</span> -->
                  </li> 
                  <li>
                        <img class="rounded-circle" src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultprofileimage.png">
                       <a class="users-list-name" href="http://localhost:80/Blog_nyarwanda_CMS/patrick">patrick</a>
                       <!-- <span class="users-list-date">Today</span> -->
                  </li> 
                  <li>
                        <img class="rounded-circle" src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/710head.jpg">
                       <a class="users-list-name" href="http://localhost:80/Blog_nyarwanda_CMS/karim">karim</a>
                       <!-- <span class="users-list-date">Today</span> -->
                  </li>                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                  <a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo.following">View All Following</a>
                </div>
                <!-- /.card-footer -->
              </div>

            <div class="card card-primary mb-3">
              <div class="card-header main-active p-1">
                <h5 class="card-title text-center"><i> HashTags</i></h5>
              </div>
              <div class="card-body text-center message-color">
                <!-- /.card-header -->
                <strong><a href="http://localhost:80/Blog_nyarwanda_CMS/amakuru.hashtag">#amakuru</a></strong>

                <p class="text-muted">
                  4 Posts </p>

                <!-- <hr> -->
                <!-- /.card-header -->
                <strong><a href="http://localhost:80/Blog_nyarwanda_CMS/bite.hashtag">#bite</a></strong>

                <p class="text-muted">
                  4 Posts </p>

                <!-- <hr> -->
              </div> <!-- /.card-body -->
            </div>

            <div class="sticky-top" style="top: 52px;z-index:1000;">
              <div class="card card-primary mb-3 ">
                <div class="card-header main-active p-1">
                  <h5 class="card-title text-center"><i> Jobs</i></h5>
                </div>
                <!-- /.card-header -->
                <div class="card-body message-color pt-0 pb-0">
                  <div class="row">

                    <div class="col-12 px-0 border-bottom jobHovers mt-2 more" data-job="34" data-business="61">
                      <div class="user-block mb-2 jobHover">
                        <div class="user-jobImgBorder">
                          <div class="user-jobImg">
                            <img
                              src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/112baby3.png"
                              alt="User Image">
                          </div>
                        </div>
                        <span class="username">
                          <!-- Job Title:  -->
                          <a style="padding-right:3px;" href="#">Clinical Data Analyst</a>
                        </span>
                        <span class="description">publish - Sep 12, 2019</span>
                        <span class="description">Deadline - 2019-09-12</span>
                      </div>
                    </div>
                    <hr>

                  </div>
                </div> <!-- /.card-body -->
                <div class="card-footer text-center">
                  <a href="http://localhost:80/Blog_nyarwanda_CMS/jobs0.php">View all Jobs</a>
                </div> <!-- /.card-footer -->
              </div>
              <!-- /.card -->

            </div>
          </div>
          <div class="col-md-6 mb-4">
           
            <div class="card borders-tops mb-3" id="userComment_441">
              <div class="card-header pb-0 border-bottom-0">
                <div class="user-block">
                  <div class="card-tools">
                    <!-- <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                          <i class="fa fa-circle"></i></button> -->
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->

                  <div class="user-blockImgBorder">
                    <div class="user-blockImg">
                      <img src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/112baby3.png"
                        alt="User Image">
                    </div>
                  </div>
                  <span class="username tooltips">
                    <a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo">faysal shema</a>
                  </span>
                  <span class="description">Shared publicly - Sep 13, 2019</span>
                </div>
                <!-- /.user-block -->
              </div>
              <!-- /.card-header -->
              <div class="card-body message-color">

                <div class="post">
                  <div class="row mb-1">
                    <div class="col-sm-12 more">
                      <img class="img-fluid imagePopup"
                        src="http://localhost:80/Blog_nyarwanda_CMS/uploads/posts/2019_69maxr.jpg" alt="Photo"
                        data-tweet="441">
                    </div>
                  </div>
                  <p id="link_">
                    single
                  </p>

                  <ul class="mt-2 list-inline" style="list-style-type: none; margin-bottom:10px;">

                    <li class=" list-inline-item"> <button class="share-btn retweet text-sm mr-2" data-tweet="441"
                        data-user="61">
                        <i class="fa fa-share mr-1"> <span class="retweetcounter"></span></i> Share</button></li>

                    <li class="list-inline-item"> <button class="like-btn text-sm" data-tweet="441" data-user="61">
                        <i class="fa fa-thumbs-o-up mr-1"> <span class="likescounter"></span></i>
                        Like</button></li>

                    <span style="float:right">

                      <li class=" list-inline-item"><button class="comments-btn text-sm" data-target="#a441"
                          data-toggle="collapse">
                          <i class="fa fa-comments-o mr-1"></i> Comments (0)
                        </button></li>


                      <li class=" list-inline-item">
                        <ul class="deleteButt" style="list-style-type: none; margin:0px;">
                          <li>
                            <a href="javascript:void(0)" class="more"><i class="fa fa-ellipsis-h"
                                aria-hidden="true"></i></a>
                            <ul style="list-style-type: none; margin:0px;">
                              <li style="list-style-type: none; margin:0px;">
                                <label class="deleteTweet" data-tweet="441" data-user="61">Delete </label>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </span>
                  </ul>

                  <div class="input-group">
                    <input class="form-control form-control-sm" id="commentHome441" type="text" name="comment"
                      placeholder="Reply to  fayzo">
                    <div class="input-group-append">
                      <span class="input-group-text btn" style="padding: 0px 10px;" aria-label="Username"
                        aria-describedby="basic-addon1" id="post_HomeComment" data-tweet="441">
                        <span class="fa fa-arrow-right text-muted"></span>
                      </span>
                    </div>
                  </div> <!-- input-group -->

                  <div class="card collapse hide" id="a441">
                    <div class="card-body" style="padding-right:0">
                    </div> <!-- /.card-body-->
                  </div> <!-- /.card collapse -->

                </div>
                <!-- /.post -->
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card borders-tops mb-3" id="userComment_441">
              <div class="card-header pb-0 border-bottom-0">
                <div class="user-block">
                  <div class="card-tools">
                    <!-- <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Mark as read">
                          <i class="fa fa-circle"></i></button> -->
                    <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->

                  <div class="user-blockImgBorder">
                    <div class="user-blockImg">
                      <img src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/112baby3.png"
                        alt="User Image">
                    </div>
                  </div>
                  <span class="username tooltips">
                    <a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo">faysal shema</a>
                  </span>
                  <span class="description">Shared publicly - Sep 13, 2019</span>
                </div>
                <!-- /.user-block -->
              </div>
              <!-- /.card-header -->
              <div class="card-body message-color">

                <div class="post">
                  <div class="row mb-1">
                    <div class="col-sm-12 more">
                      <img class="img-fluid imagePopup"
                        src="http://localhost:80/Blog_nyarwanda_CMS/uploads/posts/2019_69maxr.jpg" alt="Photo"
                        data-tweet="441">
                    </div>
                  </div>
                  <p id="link_">
                    single
                  </p>

                  <ul class="mt-2 list-inline" style="list-style-type: none; margin-bottom:10px;">

                    <li class=" list-inline-item"> <button class="share-btn retweet text-sm mr-2" data-tweet="441"
                        data-user="61">
                        <i class="fa fa-share mr-1"> <span class="retweetcounter"></span></i> Share</button></li>

                    <li class="list-inline-item"> <button class="like-btn text-sm" data-tweet="441" data-user="61">
                        <i class="fa fa-thumbs-o-up mr-1"> <span class="likescounter"></span></i>
                        Like</button></li>

                    <span style="float:right">

                      <li class=" list-inline-item"><button class="comments-btn text-sm" data-target="#a441"
                          data-toggle="collapse">
                          <i class="fa fa-comments-o mr-1"></i> Comments (0)
                        </button></li>


                      <li class=" list-inline-item">
                        <ul class="deleteButt" style="list-style-type: none; margin:0px;">
                          <li>
                            <a href="javascript:void(0)" class="more"><i class="fa fa-ellipsis-h"
                                aria-hidden="true"></i></a>
                            <ul style="list-style-type: none; margin:0px;">
                              <li style="list-style-type: none; margin:0px;">
                                <label class="deleteTweet" data-tweet="441" data-user="61">Delete </label>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </span>
                  </ul>

                  <div class="input-group">
                    <input class="form-control form-control-sm" id="commentHome441" type="text" name="comment"
                      placeholder="Reply to  fayzo">
                    <div class="input-group-append">
                      <span class="input-group-text btn" style="padding: 0px 10px;" aria-label="Username"
                        aria-describedby="basic-addon1" id="post_HomeComment" data-tweet="441">
                        <span class="fa fa-arrow-right text-muted"></span>
                      </span>
                    </div>
                  </div> <!-- input-group -->

                  <div class="card collapse hide" id="a441">
                    <div class="card-body" style="padding-right:0">
                    </div> <!-- /.card-body-->
                  </div> <!-- /.card collapse -->

                </div>
                <!-- /.post -->
              </div>
              <!-- /.card-body -->
            </div>
          </div>

          <div class="col-md-3">
            <div class="card mb-3">
              <div class="card-header main-active text-center">
                <i> WHO TO FOLLOW </i>
              </div>
              <div class="card-body message-color pt-0 pb-0">
                <div class="row">
                  <div class="col-12 px-0 border-bottom jobHovers mt-2 more" data-job="33" data-business="61">
                    <div class="user-block mb-2 jobHover">
                      <div class="user-jobImgBorder">
                        <div class="user-jobImg">
                          <img
                            src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/112baby3.png"
                            alt="User Image">
                        </div>
                      </div>
                      <span class="username">
                        <!-- Job Title:  -->
                        <a href="http://localhost:80/Blog_nyarwanda_CMS/shema" id="80">shema shema</a>
                      </span>
                      <div class="my-0 ml-2"><small style="font-size: 12px;">no career</small>
                      </div>

                      <div class="my-0 ml-2">
                        <button type="button" class="btn btn-secondary btn-sm follow-btn" data-follow="80"
                          data-profile="61"><span class="fa fa-user-plus"></span> Follow</button>
                      </div>
                    </div>
                  </div><!-- END OF EACH WHOTOFOLLOW -->
                </div><!-- ROW -->
              </div><!-- CARD-BODY -->
              <div class="card-footer text-center">
                <a href="http://localhost:80/Blog_nyarwanda_CMS/network.php">View more &gt;&gt;&gt;</a>
              </div>
            </div> <!-- CARD -->

            <div class="sticky-top " style="top: 52px;z-index:1000;">
              <div class="card text-center">
                <div class="card-header main-active p-1">
                  <h5 class="card-title"><i> Options</i></h5>
                </div>
                <div class="card-body options-list message-color">
                  <ul>
                    <li>
                      <h5 class="card-title"><a href="crowfund.php">GushoraStartUp</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="fundraising.php"> Fundraising</a></h5>
                    </li>
                    <li>
                      <h5><a href="Unemployment.php"> Unemployment</a></h5>
                    </li>
                    <li>
                      <h5><a href="career_profession.php">Professional</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="sale.php">Sale</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="gurisha.php">Gurisha</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="blog.php">Blog</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="jobs0.php">Jobs</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="events.php">Events</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="movies.php">Movies</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="sports.php">Sports</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="news.php">news</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="entertainment.php">Entertainment</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="rwandaPhotos.php">Rwanda-Landscape</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="Tembera.php">Tembera-ltd</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="hotelbooking.php">Hotel-booking</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="motel.php">motel</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="house.php">House</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="car.php">Car</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="icyamunara.php">Cyamunara</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="food.php">Foodzana</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="domestic.php">domestic Helpers</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="school.php">school</a></h5>
                    </li>
                    <li>
                      <h5 class="card-title"><a href="members_earning.php">members earning</a></h5>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- col -->
        </div>
        <!-- row -->

      </section>
      <!-- /.content -->

<?php include "header_navbar_footer/footer.php"?>