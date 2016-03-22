<div class='bgimg container-fluid'>
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
                    <li class="active"><a ui-sref="newsfeed" class='links'>Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li><a ui-sref="profile" class='links'>My Profile</a></li>
                    <li><a class='links navbar-left'>Log Out</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>

<!--TODO: Make sure this is an active controller-->
<div class="blogPosts" ng-controller="newsFeedController as nfc">
    <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#createBlogModal">
        New Post
    </button>

    <div class='content container-fluid'>
        <div class='row' ng-repeat='post in nfc.blogList'>
            <div class='col-xs-8 blogPart'><h2>{{post.title}}</h2><span>{{' Author: ' + post.username}}</span></div>
            <div class='col-xs-4 blogPart'>{{post.added | date:'MM/dd/yyyy @ h:mma'}}</div>
            <div class='col-xs-12 blogPart'>
                <hr>
                {{post.article}}
            </div>
        </div>
    </div>


    <!-- Modal Creation -->
    <div class="modal fade" id="createBlogModal" tabindex="-1" role="dialog" aria-labelledby="createBlogModalLabel"
         data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="createBlogModalLabel">New Blog Post</h3>
                </div>
                <div class="modal-body">
                    <form>
                        <input placeholder='Blog Title'> <br>
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
