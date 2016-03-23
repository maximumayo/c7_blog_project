<!--nav-bar -->
<div class='container-fluid'>
    <nav class="navbar" id='navbar'>
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">THIS.BLOG</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a ui-sref="newsfeed" class='links'>Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li><a ui-sref="profile" class='links'>My Profile</a></li>
                    <li><a class='links navbar-left'>Log Out</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>


<!--TODO: Make sure this is an active controller-->
<div id="profile-page" class="blogPosts container" ng-controller="profilePageController as ppc">



    <div class="row">
        <div class="col-md-3">
            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#createBlogModal">New
                Post
            </button>
        </div>


        <div class="col-md-9 pull-right" >
            <div class="row">
                <div class="col-md-6" ng-repeat='post in ppc.blogList'>
                    <div class="row">
                        <div class="col-xs-11">

                            <div class=' row blogPart'>
                                <h3>{{post.title}}</h3>
                                <span>{{' Author: ' + post.username+ " - "}}</span>
                                <span>{{post.added}}</span>
                                <p>{{post.article}}</p>
                                <div>
                                    <button class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                        <!-- <div class='col-xs-4 blogPart'>{{'By: ' + post.username}}</div> -->
                    </div>

                    </div>
                </div>
            </div>
        </div>

    </div>









    <!-- Modal Creation -->
    <div class="modal fade" id="createBlogModal" tabindex="-1" role="dialog" aria-labelledby="createBlogModalLabel"
         data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="createBlogModalLabel">New Blog Post</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <!-- <input placeholder='username'> -->
                        <!-- <input placeholder='date'> -->
                        <input placeholder='title'> <br>
                        <textarea placeholder='Blog Post Content' rows='10' cols='50'></textarea>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>






