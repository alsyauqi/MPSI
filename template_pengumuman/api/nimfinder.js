$(document).ready(function(){
	$("#loading").hide();
	$("#nim-input").focus();
});
var app = angular.module('nimfinder', []);
app.controller('nimcontroller', function($scope, $http) {
	$scope.dataPerPage = 10;
	$scope.mahasiswa = [];
	$scope.loading = false;
	$scope.num = 0;
	$scope.numAll = 0;
	$scope.page = 0;
	$scope.pageNum = 0;

	$scope.search = function() {
		$scope.loading = true;

		if (String($scope.keyword) !== "") {
			$http.get("https://nim.arc.itb.ac.id/search/" + $scope.keyword + "/" + ($scope.page-1)*$scope.dataPerPage + "/" + $scope.dataPerPage).then(function(response) {
				response = response.data;

				success = false;
				if (typeof response == 'object')
					if (response.hasOwnProperty('success'))
						success = response.success;

				if (success) {
					$scope.mahasiswa = [];
					response.data.forEach(function(data) {
						mahasiswa = {};
						mahasiswa.nim = data.nim;
						mahasiswa.name = data.name;
						mahasiswa.prodi = data.prodi.name;
						mahasiswa.kode_prodi = data.prodi.code;
						mahasiswa.year = data.year;
						$scope.mahasiswa.push(mahasiswa);
					});
				}

				$scope.num = $scope.mahasiswa.length;
				$scope.numAll = response.num;

				$scope.pageNum = Math.ceil(response.num / $scope.dataPerPage);
				if ($scope.page > 1)
					$("#prev-page").removeAttr('disabled');
				else
					$("#prev-page").attr('disabled', '');
				if ($scope.page < $scope.pageNum)
					$("#next-page").removeAttr('disabled');
				else
					$("#next-page").attr('disabled', '');
			});
		}

		$scope.loading = false;
	}
});