
<!-- < ?php include "header_navbar_footer/header_if_login.php"?> -->
<?php include "header_navbar_footer/Get_usernameProfile.php"?>
<title>Profile-edit</title>
<?php include "header_navbar_footer/header.php"?>


      <section class="content-header">
        <div class="row mb-2">
          <div class="col-4">
            <h1><i class="fa fa-setting"></i>Settings</h1>
          </div>
          <div class="col-8">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://localhost:80/Blog_nyarwanda_CMS/home.php">Home</a></li>
              <li class="breadcrumb-item active"><a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo">User profile
                </a></li>
            </ol>
          </div>
        </div>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">

          <div class="col-md-3 mb-3">
            <!-- Profile Image -->
            <div class="info-box mb-3">
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
            </div><!-- info box -->
          </div>

          <div class="col-md-3 mb-3">
            <div class="card mb-3">
              <div class="card-body p-0">
                <div class="list-group " id="list-tab" role="tablist">
                  <a class="list-group-item list-group-item-action active show" id="list-Account-list" data-toggle="tab"
                    href="#list-Account" role="tab" aria-controls="list-Account" aria-selected="true"><i
                      class="fa fa-lock"></i> Account</a>
                  <a class="list-group-item list-group-item-action" id="list-Password-list" data-toggle="tab"
                    href="#list-Password" role="tab" aria-controls="list-Password" aria-selected="false"><i
                      class="fa fa-key"></i> Password</a>

                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade active show" id="list-Account" role="tabpanel" aria-labelledby="list-home-list">
                <div class="card ">
                  <div class="card-body">
                    <form method="post">
                      <span id="response_settings"></span>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon2"><i class="fa fa-user"></i></span>
                        </div>
                        <input type="hidden" name="id_userSetting" id="id_userSetting" value="61" style="display:none">
                        <input type="text" class="form-control" id="username" value="fayzo" placeholder="UserName">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon2">@ </span>
                        </div>
                        <input type="text" class="form-control" name="email" id="email" value="shemafaysal@gmail.com"
                          aria-describedby="helpId" placeholder="Email">
                      </div>

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="button" onclick="settingsUsername('userchangename');"
                            class="btn btn-danger">Save Changes</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div> <!-- END-OF A LINK OF inbox ID=#  -->

              <div class="tab-pane fade" id="list-Password" role="tabpanel" aria-labelledby="list-Password-list">
                <div class="card ">
                  <div class="card-body">
                    <form>
                      <span id="response_settingpass"></span>
                      <input type="hidden" name="id_userSettingPass" id="id_userSettingPass" value="61"
                        style="display:none">

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon2"><i class="fa fa-lock"></i></span>
                        </div>
                        <input type="password" class="form-control" id="currentPassword" placeholder="Current Password">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon2"><i class="fa fa-lock"></i> </span>
                        </div>
                        <input type="text" class="form-control" name="newPassword" id="newpassword"
                          aria-describedby="helpId" placeholder="New Password">
                      </div>

                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon2"><i class="fa fa-key"></i> </span>
                        </div>
                        <input type="text" class="form-control" name="verifypassword" id="verifypassword"
                          aria-describedby="helpId" placeholder="Verify Password">
                      </div>

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="clearfix">
                          <a href="http://localhost:80/Blog_nyarwanda_CMS/profile.php" class="float-left"
                            style="padding: 8px; text-decoration: none; background: darkgray;color:white;border: none; border-radius: 4px;">Cancel</a>
                          <button type="button" onclick="settingsUsernamepass('settingspassword');"
                            class="btn btn-danger float-right">Save Changes</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div> <!-- END-OF A LINK OF sent ID=#  -->

            </div>
          </div>
        </div>

      </section>
      <!-- /.content -->
      
      
<?php include "header_navbar_footer/footer.php"?>
