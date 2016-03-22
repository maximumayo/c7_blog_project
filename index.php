<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fluffy Chainsaw Blog</title>
    <!--JQuery and Bootstrap-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!--ANGULAR-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.8/angular-ui-router.min.js"></script>
    <!--CUSTOM CSS-->
    <link rel="stylesheet" href="style.css">
    <!--CUSTOM JAVASCRIPT-->
    <script src="ui-router.js"></script>

</head>
<body ng-app="blogApp">
<div ui-view></div>
</body>
</html>