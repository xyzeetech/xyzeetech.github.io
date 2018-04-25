<!DOCTYPE html>
<html>
<head>
	<title>Starup Guide</title>
	<script type="text/javascript" src="js/angular.js"></script>
  <script type="text/javascript">
     var app = angular.module("tut",[]);
     app.controller("myCtrl",function($scope,$http){
      $http.get("crawl1.json")
      .then(function(response){
        $scope.crawl = response.data;
      });
     });

  </script>
	    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Android</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="shortcut icon" type="image" href="images/logo12.png" sizes="16x16 24x24 32x32 48x48" />
<link rel="icon" type="image" href="images/logo12.png" sizes="16x16 24x24 32x32 48x48" />
<link rel="apple-touch-icon-precomposed" href="images/logo12.png" sizes="16x16 24x24 32x32 48x48" />

    <!-- Page styles -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
   
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    
    <!-- Material Design icon font -->
    
    
     <link href="css/style.css" rel="stylesheet">

      
      
     
      
 
     
      <link rel="manifest" href="manifest.json">
</head>
<body>
<?php include 'nav.php';?>

<main class="mdl-layout__content">
<div class="page-content">
<div ng-controller="myCtrl">
 <div ng-repeat="craw in crawl">
<table class="mdl-data-table mdl-js-data-table">
  <thead>
    <h4>{{craw.head}}</h4>
  </thead>
  

 <!--
 <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric"></td>
      <td class="mdl-data-table__cell--non-numeric">{{}}</td>
      <td class="mdl-data-table__cell--non-numeric">No</td>
    </tr>
    <tr>
         <td class="mdl-data-table__cell--non-numeric">Industry</td>
        <td class="mdl-data-table__cell--non-numeric">{{craw.Industry}}</td>
      
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Overview</td>
      <td class="mdl-data-table__cell--non-numeric">{{craw.Overview}}</td>
      
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Relevant Stakeholders</td>
      <td class="mdl-data-table__cell--non-numeric">{{craw.Relevant}}</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Scheme Type</td>
      <td class="mdl-data-table__cell--non-numeric">{{craw.Type}}</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Eligibility Criteria</td>
      <td class="mdl-data-table__cell--non-numeric">{{craw.Eligibility}}</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Fiscal Incentives</td>
      <td class="mdl-data-table__cell--non-numeric">{{craw.Fiscal}}</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Information Link</td>
      <td class="mdl-data-table__cell--non-numeric">{{craw.Link}}</td>
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric">Application process</td>
      <td class="mdl-data-table__cell--non-numeric">{{craw.Process}}</td>
    </tr>
     <tr>
      <td class="mdl-data-table__cell--non-numeric">Contact</td>
      <td class="mdl-data-table__cell--non-numeric">{{craw.Contact}}</td>
    </tr>

  </tbody> -->  
</table>
</div>

</div>

</div>
</main>
</body>
</html>