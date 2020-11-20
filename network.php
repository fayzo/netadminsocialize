
<!-- < ?php include "header_navbar_footer/header_if_login.php"?> -->
<?php include "header_navbar_footer/Get_usernameProfile.php"?>
<title>Profile</title>
<?php include "header_navbar_footer/header.php"?>


            <!-- Main content -->
            <section class="content-header">
                <div class="row mb-2">
                    <div class="col-3">
                        <h3>Network</h3>
                    </div>
                    <div class="col-9">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a
                                    href="http://localhost:80/Blog_nyarwanda_CMS/home.php">Home</a></li>
                            <li class="breadcrumb-item active"><a
                                    href="http://localhost:80/Blog_nyarwanda_CMS/fayzo">User profile
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
                                            <div><a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo">faysal shema</a>
                                            </div>
                                            <!-- Nina Mcintire -->
                                            <span><small><a
                                                        href="http://localhost:80/Blog_nyarwanda_CMS/fayzo">engineering</a></small></span>
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
                                                <a href="http://localhost:80/Blog_nyarwanda_CMS/fayzo.following">
                                                    FOLLOWING</a>
                                            </div>
                                            <div class="num-body">
                                                <span class="count-following">7</span>
                                            </div>
                                        </div>
                                        <div class="num-box">
                                            <div class="num-head">
                                                <a
                                                    href="http://localhost:80/Blog_nyarwanda_CMS/fayzo.followers">FOLLOWERS</a>
                                            </div>
                                            <div class="num-body">
                                                <span class="count-followers">9</span>
                                            </div>
                                        </div>
                                    </div><!-- mumber wrapper-->
                                </div><!-- info in footer -->
                            </div><!-- info inner end -->
                        </div><!-- info box -->

                        <div class="card card-primary mb-3">
                            <div class="card-header main-active p-1">
                                <h5 class="card-title text-center"><i> HashTags</i></h5>
                            </div>
                            <div class="card-body text-center message-color">
                                <!-- /.card-header -->
                                <strong><a
                                        href="http://localhost:80/Blog_nyarwanda_CMS/amakuru.hashtag">#amakuru</a></strong>

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

                                        <div class="col-12 px-0 border-bottom jobHovers mt-2 more" data-job="34"
                                            data-business="61">
                                            <div class="user-block mb-2 jobHover">
                                                <div class="user-jobImgBorder">
                                                    <div class="user-jobImg">
                                                        <img src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/112baby3.png"
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

                    <div class="col-md-9" id="Follow-view">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5>More suggestions for you</h5>
                                <hr>
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active show" href="#people"
                                            data-toggle="tab">people</a> </li>
                                    <li class="nav-item"><a class="nav-link" href="#groups" data-toggle="tab">Groups</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#pages" data-toggle="tab">Pages</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="#business"
                                            data-toggle="tab">Firms</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#hashtag"
                                            data-toggle="tab">#hashtag</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="tab-content">
                            <div class="tab-pane active show" id="people">
                                <div class="row mb-3">

                                    <div class="col-md-3 mb-2">
                                        <!-- Widget: user widget style 1 -->
                                        <div class="card card-follow user-follow">
                                            <!-- Add the bg color to the header using any of the bg-* classes -->
                                            <div class="user-header-follow text-white"
                                                style="background: url(http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultCoverImage.png) center center;background-size: cover; overflow: hidden; width: 100%;">
                                            </div>
                                            <div class="user-image-follow">
                                                <img class="rounded-circle elevation-2"
                                                    src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultprofileimage.png">
                                                <span> </span>
                                            </div>
                                            <div class="card-footer">
                                                <h5 class="user-username-follow m-1 "><a
                                                        href="http://localhost:80/Blog_nyarwanda_CMS/kiki">kiki</a></h5>
                                                <h5 class="user-username-follow m-1"><small>no career</small></h5>
                                                <span>
                                                    <button type="button" class="btn btn-secondary btn-sm follow-btn"
                                                        data-follow="82" data-profile="61"><span
                                                            class="fa fa-user-plus"></span> Follow</button>
                                                </span>
                                            </div>
                                            <!-- /.footer -->
                                        </div>
                                        <!-- /. card widget-user -->
                                    </div>
                                    <!-- col -->
                                    <div class="col-md-3 mb-2">
                                        <!-- Widget: user widget style 1 -->
                                        <div class="card card-follow user-follow">
                                            <!-- Add the bg color to the header using any of the bg-* classes -->
                                            <div class="user-header-follow text-white"
                                                style="background: url(http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultCoverImage.png) center center;background-size: cover; overflow: hidden; width: 100%;">
                                            </div>
                                            <div class="user-image-follow">
                                                <img class="rounded-circle elevation-2"
                                                    src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultprofileimage.png">
                                                <span> </span>
                                            </div>
                                            <div class="card-footer">
                                                <h5 class="user-username-follow m-1 "><a
                                                        href="http://localhost:80/Blog_nyarwanda_CMS/aline">aline</a>
                                                </h5>
                                                <h5 class="user-username-follow m-1"><small>no career</small></h5>
                                                <span>
                                                    <button type="button" class="btn btn-secondary btn-sm follow-btn"
                                                        data-follow="72" data-profile="61"><span
                                                            class="fa fa-user-plus"></span> Follow</button>
                                                </span>
                                            </div>
                                            <!-- /.footer -->
                                        </div>
                                        <!-- /. card widget-user -->
                                    </div>
                                    <!-- col -->
                                    <div class="col-md-3 mb-2">
                                        <!-- Widget: user widget style 1 -->
                                        <div class="card card-follow user-follow">
                                            <!-- Add the bg color to the header using any of the bg-* classes -->
                                            <div class="user-header-follow text-white"
                                                style="background: url(http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultCoverImage.png) center center;background-size: cover; overflow: hidden; width: 100%;">
                                            </div>
                                            <div class="user-image-follow">
                                                <img class="rounded-circle elevation-2"
                                                    src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultprofileimage.png">
                                                <span> </span>
                                            </div>
                                            <div class="card-footer">
                                                <h5 class="user-username-follow m-1 "><a
                                                        href="http://localhost:80/Blog_nyarwanda_CMS/eric">eric</a></h5>
                                                <h5 class="user-username-follow m-1"><small>no career</small></h5>
                                                <span>
                                                    <button type="button" class="btn btn-secondary btn-sm follow-btn"
                                                        data-follow="78" data-profile="61"><span
                                                            class="fa fa-user-plus"></span> Follow</button>
                                                </span>
                                            </div>
                                            <!-- /.footer -->
                                        </div>
                                        <!-- /. card widget-user -->
                                    </div>
                                    <!-- col -->
                                    <div class="col-md-3 mb-2">
                                        <!-- Widget: user widget style 1 -->
                                        <div class="card card-follow user-follow">
                                            <!-- Add the bg color to the header using any of the bg-* classes -->
                                            <div class="user-header-follow text-white"
                                                style="background: url(http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultCoverImage.png) center center;background-size: cover; overflow: hidden; width: 100%;">
                                            </div>
                                            <div class="user-image-follow">
                                                <img class="rounded-circle elevation-2"
                                                    src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultprofileimage.png">
                                                <span> </span>
                                            </div>
                                            <div class="card-footer">
                                                <h5 class="user-username-follow m-1 "><a
                                                        href="http://localhost:80/Blog_nyarwanda_CMS/riri">riri</a></h5>
                                                <h5 class="user-username-follow m-1"><small>no career</small></h5>
                                                <span>
                                                    <button type="button" class="btn btn-secondary btn-sm follow-btn"
                                                        data-follow="76" data-profile="61"><span
                                                            class="fa fa-user-plus"></span> Follow</button>
                                                </span>
                                            </div>
                                            <!-- /.footer -->
                                        </div>
                                        <!-- /. card widget-user -->
                                    </div>
                                    <!-- col -->
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3 mb-2">
                                        <!-- Widget: user widget style 1 -->
                                        <div class="card card-follow user-follow">
                                            <!-- Add the bg color to the header using any of the bg-* classes -->
                                            <div class="user-header-follow text-white"
                                                style="background: url(http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultCoverImage.png) center center;background-size: cover; overflow: hidden; width: 100%;">
                                            </div>
                                            <div class="user-image-follow">
                                                <img class="rounded-circle elevation-2"
                                                    src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultprofileimage.png">
                                                <span> </span>
                                            </div>
                                            <div class="card-footer">
                                                <h5 class="user-username-follow m-1 "><a
                                                        href="http://localhost:80/Blog_nyarwanda_CMS/FAFA">FAFA</a></h5>
                                                <h5 class="user-username-follow m-1"><small>no career</small></h5>
                                                <span>
                                                    <button type="button" class="btn btn-secondary btn-sm follow-btn"
                                                        data-follow="75" data-profile="61"><span
                                                            class="fa fa-user-plus"></span> Follow</button>
                                                </span>
                                            </div>
                                            <!-- /.footer -->
                                        </div>
                                        <!-- /. card widget-user -->
                                    </div>
                                    <!-- col -->
                                    <div class="col-md-3 mb-2">
                                        <!-- Widget: user widget style 1 -->
                                        <div class="card card-follow user-follow">
                                            <!-- Add the bg color to the header using any of the bg-* classes -->
                                            <div class="user-header-follow text-white"
                                                style="background: url(http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultCoverImage.png) center center;background-size: cover; overflow: hidden; width: 100%;">
                                            </div>
                                            <div class="user-image-follow">
                                                <img class="rounded-circle elevation-2"
                                                    src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultprofileimage.png">
                                                <span> </span>
                                            </div>
                                            <div class="card-footer">
                                                <h5 class="user-username-follow m-1 "><a
                                                        href="http://localhost:80/Blog_nyarwanda_CMS/saleh">saleh</a>
                                                </h5>
                                                <h5 class="user-username-follow m-1"><small>no career</small></h5>
                                                <span>
                                                    <button type="button" class="btn btn-secondary btn-sm follow-btn"
                                                        data-follow="71" data-profile="61"><span
                                                            class="fa fa-user-plus"></span> Follow</button>
                                                </span>
                                            </div>
                                            <!-- /.footer -->
                                        </div>
                                        <!-- /. card widget-user -->
                                    </div>
                                    <!-- col -->
                                    <div class="col-md-3 mb-2">
                                        <!-- Widget: user widget style 1 -->
                                        <div class="card card-follow user-follow">
                                            <!-- Add the bg color to the header using any of the bg-* classes -->
                                            <div class="user-header-follow text-white"
                                                style="background: url(http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultCoverImage.png) center center;background-size: cover; overflow: hidden; width: 100%;">
                                            </div>
                                            <div class="user-image-follow">
                                                <img class="rounded-circle elevation-2"
                                                    src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultprofileimage.png">
                                                <span> </span>
                                            </div>
                                            <div class="card-footer">
                                                <h5 class="user-username-follow m-1 "><a
                                                        href="http://localhost:80/Blog_nyarwanda_CMS/mani">mani</a></h5>
                                                <h5 class="user-username-follow m-1"><small>no career</small></h5>
                                                <span>
                                                    <button type="button" class="btn btn-secondary btn-sm follow-btn"
                                                        data-follow="77" data-profile="61"><span
                                                            class="fa fa-user-plus"></span> Follow</button>
                                                </span>
                                            </div>
                                            <!-- /.footer -->
                                        </div>
                                        <!-- /. card widget-user -->
                                    </div>
                                    <!-- col -->
                                    <div class="col-md-3 mb-2">
                                        <!-- Widget: user widget style 1 -->
                                        <div class="card card-follow user-follow">
                                            <!-- Add the bg color to the header using any of the bg-* classes -->
                                            <div class="user-header-follow text-white"
                                                style="background: url(http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultCoverImage.png) center center;background-size: cover; overflow: hidden; width: 100%;">
                                            </div>
                                            <div class="user-image-follow">
                                                <img class="rounded-circle elevation-2"
                                                    src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultprofileimage.png">
                                                <span> </span>
                                            </div>
                                            <div class="card-footer">
                                                <h5 class="user-username-follow m-1 "><a
                                                        href="http://localhost:80/Blog_nyarwanda_CMS/musema">musema</a>
                                                </h5>
                                                <h5 class="user-username-follow m-1"><small>no career</small></h5>
                                                <span>
                                                    <button type="button" class="btn btn-secondary btn-sm follow-btn"
                                                        data-follow="67" data-profile="61"><span
                                                            class="fa fa-user-plus"></span> Follow</button>
                                                </span>
                                            </div>
                                            <!-- /.footer -->
                                        </div>
                                        <!-- /. card widget-user -->
                                    </div>
                                    <!-- col -->
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3 mb-2">
                                        <!-- Widget: user widget style 1 -->
                                        <div class="card card-follow user-follow">
                                            <!-- Add the bg color to the header using any of the bg-* classes -->
                                            <div class="user-header-follow text-white"
                                                style="background: url(http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/86420.jpg) center center;background-size: cover; overflow: hidden; width: 100%;">
                                            </div>
                                            <div class="user-image-follow">
                                                <img class="rounded-circle elevation-2"
                                                    src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/7879.jpg">
                                                <span> </span>
                                            </div>
                                            <div class="card-footer">
                                                <h5 class="user-username-follow m-1 "><a
                                                        href="http://localhost:80/Blog_nyarwanda_CMS/dada">dada</a></h5>
                                                <h5 class="user-username-follow m-1"><small>no career</small></h5>
                                                <span>
                                                    <button type="button" class="btn btn-secondary btn-sm follow-btn"
                                                        data-follow="84" data-profile="61"><span
                                                            class="fa fa-user-plus"></span> Follow</button>
                                                </span>
                                            </div>
                                            <!-- /.footer -->
                                        </div>
                                        <!-- /. card widget-user -->
                                    </div>
                                    <!-- col -->
                                    <div class="col-md-3 mb-2">
                                        <!-- Widget: user widget style 1 -->
                                        <div class="card card-follow user-follow">
                                            <!-- Add the bg color to the header using any of the bg-* classes -->
                                            <div class="user-header-follow text-white"
                                                style="background: url(http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultCoverImage.png) center center;background-size: cover; overflow: hidden; width: 100%;">
                                            </div>
                                            <div class="user-image-follow">
                                                <img class="rounded-circle elevation-2"
                                                    src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultprofileimage.png">
                                                <span> </span>
                                            </div>
                                            <div class="card-footer">
                                                <h5 class="user-username-follow m-1 "><a
                                                        href="http://localhost:80/Blog_nyarwanda_CMS/manzi">manzi</a>
                                                </h5>
                                                <h5 class="user-username-follow m-1"><small>no career</small></h5>
                                                <span>
                                                    <button type="button" class="btn btn-secondary btn-sm follow-btn"
                                                        data-follow="81" data-profile="61"><span
                                                            class="fa fa-user-plus"></span> Follow</button>
                                                </span>
                                            </div>
                                            <!-- /.footer -->
                                        </div>
                                        <!-- /. card widget-user -->
                                    </div>
                                    <!-- col -->
                                    <div class="col-md-3 mb-2">
                                        <!-- Widget: user widget style 1 -->
                                        <div class="card card-follow user-follow">
                                            <!-- Add the bg color to the header using any of the bg-* classes -->
                                            <div class="user-header-follow text-white"
                                                style="background: url(http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultCoverImage.png) center center;background-size: cover; overflow: hidden; width: 100%;">
                                            </div>
                                            <div class="user-image-follow">
                                                <img class="rounded-circle elevation-2"
                                                    src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultprofileimage.png">
                                                <span> </span>
                                            </div>
                                            <div class="card-footer">
                                                <h5 class="user-username-follow m-1 "><a
                                                        href="http://localhost:80/Blog_nyarwanda_CMS/shema">shema</a>
                                                </h5>
                                                <h5 class="user-username-follow m-1"><small>no career</small></h5>
                                                <span>
                                                    <button type="button" class="btn btn-secondary btn-sm follow-btn"
                                                        data-follow="80" data-profile="61"><span
                                                            class="fa fa-user-plus"></span> Follow</button>
                                                </span>
                                            </div>
                                            <!-- /.footer -->
                                        </div>
                                        <!-- /. card widget-user -->
                                    </div>
                                    <!-- col -->
                                    <div class="col-md-3 mb-2">
                                        <!-- Widget: user widget style 1 -->
                                        <div class="card card-follow user-follow">
                                            <!-- Add the bg color to the header using any of the bg-* classes -->
                                            <div class="user-header-follow text-white"
                                                style="background: url(http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultCoverImage.png) center center;background-size: cover; overflow: hidden; width: 100%;">
                                            </div>
                                            <div class="user-image-follow">
                                                <img class="rounded-circle elevation-2"
                                                    src="http://localhost:80/Blog_nyarwanda_CMS/assets/image/users_profile_cover/defaultprofileimage.png">
                                                <span> </span>
                                            </div>
                                            <div class="card-footer">
                                                <h5 class="user-username-follow m-1 "><a
                                                        href="http://localhost:80/Blog_nyarwanda_CMS/bebe">bebe</a></h5>
                                                <h5 class="user-username-follow m-1"><small>no career</small></h5>
                                                <span>
                                                    <button type="button" class="btn btn-secondary btn-sm follow-btn"
                                                        data-follow="79" data-profile="61"><span
                                                            class="fa fa-user-plus"></span> Follow</button>
                                                </span>
                                            </div>
                                            <!-- /.footer -->
                                        </div>
                                        <!-- /. card widget-user -->
                                    </div>
                                    <!-- col -->
                                </div>
                                <div class="row mb-3"> </div>
                                <!-- row -->

                                <nav>
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item active"><a href="javascript:void(0)" class="page-link"
                                                onclick="follow_FecthRequest(1,61,61)">1 </a></li>
                                        <li class="page-item"><a href="javascript:void(0)" class="page-link"
                                                onclick="follow_FecthRequest(2,61,61)">2 </a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0)"
                                                onclick="follow_FecthRequest(2,61,61)">Next</a></li>
                                    </ul>
                                </nav>


                            </div>
                            <div class="tab-pane" id="groups">
                                Groups
                            </div>
                            <div class="tab-pane" id="pages">
                                pages
                            </div>
                            <div class="tab-pane" id="business">
                                firms
                            </div>
                            <div class="tab-pane" id="hashtag">
                                hashtag
                            </div>
                            <!-- tab-panel -->
                        </div>
                        <!-- tab-panel -->

                    </div>
                </div>
                <!-- row- -->

            </section>
            <!-- /.content -->
           
           
 <?php include "header_navbar_footer/footer.php"?>
