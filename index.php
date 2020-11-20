
<!-- < ?php include "header_navbar_footer/header_if_login.php"?> -->
<?php include "header_navbar_footer/Get_usernameProfile.php"?>
<title>Profile</title>
<?php include "header_navbar_footer/header.php"?>

      <!-- Content Header (Page header) -->
      <section class="content-header">

        <div id="exampleModalCenter" class="modal fade" tabindex="-1" role="dialog"
          aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- /.login-logo -->
                <div class="login-box-body">
                  <p class="login-box-msg">Sign in to start your session</p>

                  <form action="../../index2.html" method="post">
                    <div class="form-group has-feedback">
                      <input type="email" class="form-control" placeholder="Email">
                      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                      <input type="password" class="form-control" placeholder="Password">
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>
                    <div class="row">
                      <div class="col-xs-8">
                        <div class="checkbox icheck">
                          <label>
                            <input type="checkbox"> Remember Me
                          </label>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                      </div>
                      <!-- /.col -->
                    </div>
                  </form>

                  <a href="#">I forgot my password</a><br>
                  <a href="register.html" class="text-center">Register a new membership</a>

                </div>
                <!-- /.login-box-body -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>

        <div class="bd-example">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Launch demo modal
          </button>
        </div>

        <h1>
          Sidebar Collapsed
          <small>Layout with collapsed sidebar on load</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Layout</a></li>
          <li class="active">Collapsed Sidebar</li>
        </ol>
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
            <div id="response-posts"></div>
            <div class="card  borders-tops mb-4">
              <div class="card-body message-color" style="padding-bottom: 0rem;">
                <form method="post" id="post_form" enctype="multipart/form-data">
                  <input type="hidden" name="id_posts" id="id_posts" value="61">
                  <div class="user-block">
                    <div class="user-blockImgBorder">
                      <div class="user-blockImg">
                        <img src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/112baby3.png"
                          alt="User Image">
                      </div>
                    </div>
                    <span class="username">
                      <textarea class="status" name="status" id="status" placeholder="Type Something here!" rows="4"
                        cols="50"></textarea>
                      <div class="hash-box">
                        <ul>
                        </ul>
                      </div>
                    </span>
                  </div>

                  <div class="message-footer text-muted">
                    <div class="t-fo-left">
                      <ul>
                        <input type="file" name="files[]" id="file" multiple="">
                        <li><label for="file"><i class="fa fa-camera" aria-hidden="true"></i></label>
                          <span class="tweet-error">
                            <span style="color: red;" id="empty-posts"></span>

                          </span>
                        </li>
                      </ul>
                    </div>
                    <div class="t-fo-right">
                      <span id="count">200</span>
                      <input type="submit" class="btn main-active" name="tweet" value="Post">
                    </div>
                    <!--  progress-xs -->
                    <span class="progress progress-hide" style="display: none;">
                      <span class="progress-bar bg-danger" role="progressbar" style="width:0%;" id="pro"
                        aria-valuenow="" aria-valuemin="0" aria-valuemax="100"><span> completed <span
                            class="fa fa-check"></span></span></span>
                    </span>
                  </div>
                </form>
              </div>
              <!-- card-body -->
            </div>
            <!-- card -->
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
