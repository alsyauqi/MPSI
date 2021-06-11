var app = angular.module("app",[]);

app.controller("MyCtrl" , function($scope){
  
   $scope.data ={
       names:[{ name:""}]
   };
  
  $scope.addRow = function(index){
    if (index==2){
      alert("anda dapat memasukkan maksimal 3 prestasi!");
    } else {
      var name = {name:""};
         if($scope.data.names.length <= index+1){
              $scope.data.names.splice(index+1,0,name);
          }
    }
  };
  
  $scope.deleteRow = function($event,index){
    if($event.which == 1)
       $scope.data.names.splice(index,1);
    }
  
  });
