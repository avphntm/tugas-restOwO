@extends('template')
@section('judul','Menu')
@section('page')
<div ng-app="tesApp" ng-controller="tesCtrl">
	<br><br><br>
	<section>
		<div class="row">
			<div class="container shadow-lg" style="padding: 30px;">
				<br>
				<center><h3>Menu</h3></center>
				<br>
				<button type="button" class="btn btn-info" data-toggle="modal" data-target="#Modalinsert"><i class="fas fa-plus-circle fa-fw"></i>&nbsp;Tambah</button>
				<br><br>
				<div>
					<table class="table table-striped" id="myTable">
            			<thead>
                			<tr>
                    			<th width="10">No</th>
                    			<th width="300">Nama Menu</th>
                    			<th width="800">Deskripsi</th>
                			</tr>
            			</thead>
            			<tbody>
                			@foreach($menus as $key => $b)
                			<tr>
                    			<td width="10">{{$currentPage > 1 ? ($maxSize * ($currentPage - 1)) + $key + 1 : $key + 1}}</td>
                    			<td width="300">{{$b->nama}}</td>
                    			<td width="800">{{$b->deskripsi}}</td>
                			</tr>
            				@endforeach
            			</tbody>
        			</table>
        			{{ $menus->links() }}
				</div>
				<br><br>
			</div>
		</div>
		<br><br><br>
		<div class="row">
			<div class="col-md-1">
			
			</div>
			<div class="col-md-9">
			<div id="Modalinsert" class="modal fade" role="dialog">
            	<div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4>
                            Tambah Koleksi
                        </h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            @csrf
                            <div class="wrap">
                                <form>
                                	<div class="form-group">
                                        <label for="">Nama  Menu</label>
                                        <input type="text" class="form-control" id="nama" ng-model="nama" name="nama" maxlength="30" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Deskripsi</label>
                                        <textarea type="text" class="form-control" id="deskripsi" ng-model="deskripsi" name="deskripsi" maxlength="300" required></textarea>
                                    </div>
                                </form>
                            </div>
                            <button class="btn btn-success" ng-click="simpan()">Simpan</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    </div>
                </div>

           		 </div>
        	</div>

			<div class="wrapper">
				<div class="row">
					<div class="col-md-4">
						<img src="{{asset('files/a.jpg')}}" height="240" width="400">	
					</div>
					<div class="col-md-4">
						<img src="{{asset('files/b.jpg')}}" height="240" width="400">
					</div>
					<div class="col-md-4">
						<img src="{{asset('files/c.jpeg')}}" height="240" width="400">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<img src="{{asset('files/d.jpeg')}}" height="240" width="400">
					</div>
					<div class="col-md-4">
						<img src="{{asset('files/e.jpeg')}}" height="240" width="400">
					</div>
					<div class="col-md-4">
						<img src="{{asset('files/f.jpeg')}}" height="240" width="400">
					</div>
				</div>
			</div>

			</div>
			<div class="col-md-1">
			
			</div>
		</div>
	</section>
	<br><br><br>
</div>

<!-- App ctrl angular -->
<script type="text/javascript">

    var app = angular.module('tesApp', []);
    app.controller('tesCtrl', function($scope, $http, $window) {
        $scope.nama;
        $scope.deskripsi;

        $scope.simpan = function() {
            if ($scope.nama == null || $scope.nama == undefined || $scope.deskripsi == null || $scope.deskripsi == undefined ){
                alert("Isi semua field form");
            }
            //saving
            $http.post('{{url("inserMenu")}}', {
                    nama: $scope.nama,
                    deskripsi: $scope.deskripsi,
                    _token: '{{csrf_token()}}'

                }).then(function(reply) {
                alert("Data sudah disimpan");
                //$.growl.notice({title: "[INFO]", message: "Data Berhasil Disimpan"});
                $window.location.replace("menu");
            });
        }

    });
</script>
@endsection