
<!-- < ?php include "header_navbar_footer/header_if_login.php"?> -->
<?php include "header_navbar_footer/Get_usernameProfile.php"?>
<title>Profile-edit</title>
<?php include "header_navbar_footer/header.php"?>


      <section class="content">
        <div class="container-fuild">
          <div class="row">
              <div class="col-12">
                  <div class="card-widget widget-user">
                      <!-- Background-cover image -->
                      <div class="img-cover-profileEdit  text-white" style="background: url('http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/702caus.jpg')no-repeat center center;background-size:cover;">
                          <div class="profile-upload">
                              <!-- Hidden upload form -->
                              <form method="post" action="http://localhost:80/Blog_nyarwanda_CMS/core/ajax_db/profileEdit.php" enctype="multipart/form-data" id="cover_picUploadForm" target="cover_uploadTarget">
      
                                  <input type="hidden" name="edit_cover" id="edit_cover" value="61" style="display:none">
                                  <input type="file" name="cover_picture" id="cover_fileInput" style="display:none">
                              </form>
                              <iframe id="cover_uploadTarget" name="cover_uploadTarget" src="#" style="width:0;height:0;border:0px solid black;"></iframe>
                              <!-- Image update link -->
                              <!-- Profile image -->
                              <div class="text-center img-placeholders">
                                  <h1>Update Cover image</h1>
                              </div>
                              <!-- Image update link -->
                              <a href="javascript:void(0);" class="img-cover-iconLinks" id="edit_linkCoverUpload">
                                  <i class="fa fa-camera" aria-hidden="true"></i> </a>
                              <!-- Profile image -->
                              <!-- <img id="cover_imagePreview" class="cover_imagePreview" src="assets/image/users_profile_cover/<br />
                              <b>Notice</b>:  Undefined variable: row in <b>C:\xampp\htdocs\Blog_nyarwanda_CMS\profileEdit.php</b> on line <b>36</b><br />
                              "> -->
                              <img id="cover_imagePreview" class="cover_imagePreview">
                              <!-- src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/img/photo1.png" -->
                          </div>
      
                          <h3 class="widget-user-usernames">Elizabeth Pierce</h3>
                          <h5 class="widget-user-descs">Web Designer</h5>
                      </div>
                      <!-- END OF Background-cover image -->
      
                      <!-- START OF PROFILE EDIT IMAGE CONTENT -->
                      <div class="img-relative">
                          <div class="profile-upload">
                              <!-- Hidden upload form -->
                              <form method="post" action="http://localhost:80/Blog_nyarwanda_CMS/core/ajax_db/profileEdit.php" enctype="multipart/form-data" id="picUploadForm" target="uploadTarget">
      
                                  <input type="hidden" name="edit_profile" id="edit_profile" value="61" style="display:none">
                                  <input type="file" name="picture" id="fileInput" style="display:none">
                              </form>
      
                              <iframe id="uploadTarget" name="uploadTarget" src="#" style="width:0;height:0;border:0px solid black;"></iframe>
                              <!-- Profile image -->
                              <div class="text-center img-placeholder">
                                  <h4>Update image</h4>
                              </div>
                              <!-- Image update link -->
                              <a href="javascript:void(0);" class="img-upload-iconLinks" id="edit_linkUpload">
                                  <i class="fa fa-camera" aria-hidden="true"></i> </a>
                                                                       <img class="rounded-circle" id="imagePreview" src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/112baby3.png">
                                                           <!-- <img class="rounded-circle" src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/img/user3-128x128.jpg"
                                  alt="User Avatar"> -->
                          </div>
                      </div>
                      <!-- END OF PROFILE EDIT IMAGE CONTENT -->
      
                      <!-- <div class="widget-user-image">
                          <img class="rounded-circle" src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/img/user3-128x128.jpg"
                              alt="User Avatar">
                      </div> -->
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
        <div class="row">
            <div class="col-3">
                <h1><i> Profile Edit</i></h1>
            </div>
            <div class="col-9">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active"><i>
                    <button type="button" class="btn btn-primary btn-sm" onclick="location.href='http://localhost:80/Blog_nyarwanda_CMS/fayzo'">Profile</button>
                    </i></li>
                </ol>
            </div>
          </div>
      </section>

      <!-- Main content -->
      <section class="content">

        <div class="row">
          <div class="col-md-3 mb-3 ">
            <div class="card card-primary card-outline borders-tops mb-3">
              <div class="card-body box-profile">
                  <div class="text-center">
                      <img class="profile-user-img img-fluid rounded-circle" src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/112baby3.png" alt="User profile picture">
                  </div>
                  <h3 class="profile-username text-center">faysal shema</h3>
                  <p class="text-muted text-center">engineering</p>
                  <hr>
                  <form method="post">
                      <div class="form-group">

                          <label for="firstname">Firstname :</label>
                          <input type="hidden" name="id_career" id="id_career" value="61" style="display:none">
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon2"><i class="fa fa-user"></i>
                                  </span>
                              </div>
                              <input type="text" class="form-control" name="firstname" id="firstname" aria-describedby="helpId" value="faysal" placeholder="Firstname">
                                  <span id="response"></span>
                          </div>

                          <label for="lastname">Lastname :</label>
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon2"><i class="fa fa-user"></i>
                                  </span>
                              </div>
                              <input type="text" class="form-control" name="lastname" id="lastname" aria-describedby="helpId" value="shema" placeholder="Lastname">
                                  <span id="response"></span>
                          </div>

                          <label for="specialize">Career :</label>
                          <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon2"><i class="fa fa-star"></i>
                                  </span>
                              </div>
                              <input type="text" class="form-control" name="career" id="career" aria-describedby="helpId" value="engineering" placeholder="Specialize">
                                  <span id="response"></span>
                              </div>
                          </div>
                          <a href="javascript:void(0);" data-user="61" class="profile-edit-more float-right">Edit more</a>
                          <button type="button" onclick="careers('career');" class="btn main-active btn-block"><b>Submit</b></button>
                          <span id="respone-success"></span>
                  </form>

                  <!-- btn-primary -->
              </div>
              <!-- /.card-body -->
          </div>
          <div class="card card-primary mb-3 sticky-top" style="top: 52px;">
            <div class="card-header main-active p-1">
                <h5 class="card-title text-center"><i> About Me</i></h5>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form method="post">
                    <div class="form-group">
                         <input type="hidden" name="id_aboutMe" id="id_aboutMe" value="61" style="display:none">
                        <label for="education"><strong><i class="fa fa-book mr-1"></i> Education</strong>
                            :</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2"><i class="fa fa-book"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="education" id="education" aria-describedby="helpId" value="lycee" placeholder="High school , College or University ">
                        </div>
                        <hr>

                        <label for="education"><strong><i class="fa fa-book mr-1"></i> Diploma/Degree/PhD</strong>
                            :</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2"><i class="fa fa-book"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="diploma" id="diploma" aria-describedby="helpId" value="project" placeholder="B.S. in Computer Science from the University of Tennessee at Knoxville">
                        </div>
                        <hr>

                        <label for="location"><strong><i class="fa fa-map-marker mr-1"></i>
                                Location</strong> :</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2"><i class="fa fa-map-marker"></i></span>
                            </div>
                            <input type="text" class="form-control" name="location" id="location" aria-describedby="helpId" value="BR" placeholder="Kigali, Rwanda">
                        </div>
                        <hr>

                        <label for="password"><strong><i class="fa fa-pencil mr-1"></i> Skills</strong>
                        </label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2"><i class="fa fa-pencil"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="skills" id="skills" aria-describedby="helpId" value="web" placeholder="UI Design ,Coding ,Javascript ,PHP ,Node.js">
                        </div>
                        <hr>
                        <label for="password"><strong><i class="fa fa-file-text-o mr-1"></i>
                                Hobby</strong></label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon2"><i class="fa fa-file-text-o"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" name="hobbys" id="hobbys" aria-describedby="helpId" value="styuding" placeholder="studying ,played ,Dance ,Read.....">
                        </div>
                        <a href="javascript:void(0);" data-user="61" class="profile-edit-more float-right">Edit more</a>
                        <hr>
                    </div> <!-- FORM-GROUP -->
                    <button type="button" onclick="aboutMe('aboutme');" class="btn main-active btn-block"><b>Submit</b></button>
                       <span id="responses"></span>
                </form>
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
