

var app=angular.module("appRegistration",[]);
app.controller("fnamectrl",function($scope)){
	if($scope.fname.$valid){
		$scope.fname="<i class='fa fa-facebook'></i>"
	}
});


var app=angular.module("",[]);
	app.controller("myformc",function($scope){
		if($scope.myform.$pristine==true){alert("true")}
	});
