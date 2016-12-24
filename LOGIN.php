<!DOCTYPE html>
<html>
<head>
	<title>Website</title>

<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet/less" href="css.less">
<link rel="stylesheet/less" href="css/site.less" />
<script type="text/javascript" src="scripts/less.min.js"></script>
<script type="text/javascript" src="scripts/jquery-1.10.2.js" ></script>
<script type="text/javascript" src="scripts/bootstrap.min.js"></script>

 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<style>
body {
    background-image: url("house20.jpeg");
    width: auto;
    height: auto;
    background-size: 100%;

}

#field:focus{
  border-color: #3CB371;
  box-shadow: 0 0 5px #3CB371;
}
#field1:focus{
  border-color: #3CB371;
  box-shadow: 0 0 5px #3CB371;
}

#field2:focus{
  border-color: #3CB371;
  box-shadow: 0 0 5px #3CB371;
}

#field3:focus{
  border-color: #3CB371;
  box-shadow: 0 0 5px #3CB371;
}
</style>
    
</head>

<body ng-app="validationApp" ng-controller="mainController">
<div class="overlay" ng-click="hide_popup()" ng-style="overlay_style"></div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="romb.png" style="height: 45px; margin-top:-11px;"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="INDEX.html">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="ABOUT.html">About</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Plans<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="MODERN.html">Modern</a></li>
            <li><a href="RANCH.html">Ranch</a></li>
            <li><a href="TUDOR.html">Tudor</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><p><a href="#" class="btn btn-default" style="margin-top: 10px;">
          <span class="glyphicon glyphicon-log-in"></span> Log in
        </a></p></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div  >
<div class="image" style="text-align: center;"><img src="romb.png" style="height:100px; width:100px;"></div>
<div class="name" style="text-align: center; margin-top:20px;"><p style="color:#3CB371; font-family:Tunga; font-size:50px;">PLEASE ENTER YOUR DATA</p></div>
<form name="userForm" ng-submit="submitForm()" novalidate>
  <div class="form-group" ng-class="{ 'has-error' : userForm.username.$invalid && !userForm.username.$pristine }" style="width:400px; margin: 0 auto; top:10px;">
    <input type="text" name="username" class="form-control" ng-model="user.username" ng-minlength="4" ng-maxlength="10" style="border-radius:5px;" id="field2"placeholder="Username" aria-describedby="basic-addon1">
      <p ng-show="userForm.username.$error.minlength" class="help-block" style="color:red">Username is too short</p>
          <p ng-show="userForm.username.$error.maxlength" class="help-block" style="color:red">Username is too long</p>
    </div>
<div class="form-group" ng-class="{ 'has-error' : userForm.userpassword.$invalid && !userForm.userpassword.$pristine }" style="width:400px; margin: 0 auto; top:60px;">
  <input type="password" name="password" class="form-control" ng-model="user.password" style="border-radius:5px; margin-top:20px;"id="field3"placeholder="Password" aria-describedby="basic-addon2">
</div>
<div class="input-group" style="width:400px; margin: 0 auto; top:50px;text-align:center;">
<button ng-click="sign_in()" type="submit" class="btn btn-primary" ng-disabled="userForm.$invalid" style="background-color:#3CB371">Sign in</button>
</form>
<a ng-click="drop()"><button type="button" class="btn btn-success" style="margin-left:10px; background-color:#3CB371">Sign up</button></a>
</div>



<div class="popup" ng-style="drop_style">
<div class="name" style="text-align: center; margin-top:20px;"><p style="color:#3CB371; font-family:Tunga; font-size:50px;">REGISTRATION</p></div>
<div class="input-group" style="width:400px; margin: 0 auto; top:0px;">
  <input type="text" ng-model="user.name" name="name" class="form-control" style="border-radius:5px;" id="field" placeholder="Name" aria-describedby="basic-addon1">
</div>
<div class="input-group" style="width:400px; margin: 0 auto; top:10px;">
  <input type="text" ng-model="user.surname" name="surname" class="form-control" style="border-radius:5px;" id="field1" placeholder="Surname" aria-describedby="basic-addon1">
</div>
<div class="input-group" ng-class="{ 'has-error' : userForm.username.$invalid && !userForm.username.$pristine }" style="width:400px; margin: 0 auto; top:20px;">
  <input type="text" ng-model="user.username" name="username" ng-minlength="1" ng-maxlength="8" class="form-control" style="border-radius:5px;" id="field2"placeholder="Username" aria-describedby="basic-addon1">
    <p ng-show="userForm.username.$error.minlength" class="help-block" style="color:red">Username is too short.</p>
      <p ng-show="userForm.username.$error.maxlength" class="help-block" style="color:red">Username is too long.</p>
</div>
<div class="input-group" style="width:400px; margin: 0 auto; top:30px;">
  <input type="password" ng-model="user.password" name="password" class="form-control" style="border-radius:5px;" id="field" placeholder="Password" aria-describedby="basic-addon1">
</div>

<div class="input-group" ng-class="{ 'has-error' : userForm.email.$invalid && !userForm.email.$pristine }" style="width:400px; margin: 0 auto; top:40px;">
  <input type="email" ng-model="user.email" name="email"class="form-control" style="border-radius:5px;"id="field3"placeholder="Client's email" aria-describedby="basic-addon2">
    <p ng-show="userForm.email.$invalid && !userForm.email.$pristine" class="help-block">Enter a valid email.</p>
</div>
<div class="input-group" style="width:400px; margin: 0 auto; top:60px;text-align:center;">
<button ng-click="register()" type="submit" class="btn btn-success" ng-disabled="userForm.$invalid"style="margin-left:10px;background-color:#3CB371">Sign up</button>

</div>
  

</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
<script type="text/javascript">
var validationApp = angular.module('validationApp', []);

    // create angular controller
    validationApp.controller('mainController', function($scope, $http, $window) {
        $scope.drop_style= {'margin-top': '-1000px'};
        $scope.overlay_style= {'display': 'none'};
        // function to submit the form after all validation has occurred            
        $scope.submitForm = function() {

            // check to make sure the form is completely valid
            if ($scope.userForm.$valid) {
                
            }

        };
        $scope.drop = function(){
          $scope.overlay_style= {'display': 'inline'};
          $scope.drop_style= {'margin-top': '-250px', 'transition':'1s'};
        };
        $scope.hide_popup = function(){
          $scope.drop_style= {'margin-top': '-1000px', 'transition':'1s'};
          $scope.overlay_style= {'display': 'none'};
        };
        $scope.register = function(){
          var url = "http://localhost/WEBFINAL/CONTENT2.php";
          $http.get(url+"?name="+$scope.user.name+"&surname="+$scope.user.surname+"&username="+
            $scope.user.username+"&password="+$scope.user.password+"&email="+$scope.user.email).then(function(response){
              if(response.data=="success"){
                $scope.drop_style= {'margin-top': '-1000px', 'transition':'1s'};
                $scope.overlay_style= {'display': 'none'};
              }
            })
          
        };
        $scope.sign_in = function(){
          var url = "http://localhost/WEBFINAL/CONTENT.php";
          $http.get(url+"?username="+$scope.user.username+"&password="+$scope.user.password).then(function(response){
              if(response.data=="success"){
                var list = [];
                localStorage.setItem("basket", JSON.stringify(list));
                $window.location.href='INDEX.html';
              }
              else{
                alert("Incorrect username or password");
              }
            })
        };

    });
</script>

</html>