@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('storage/css/halaman-data.css')}}">


<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Data <b>Tematik</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{route('tambah tematik')}}"class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span>Masukkan Data Baru</span></a>					
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							No
						</th>
						<th>Kecamatan</th>
						<th>Warna</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($data as $item)
                    <tr>
						<td>
							{{$loop->iteration}}
						</td>
						<td>{{$item->kecamatan}}</td>
						<td><input type="color" disabled value="{{$item->warna}}"></td>
						<td class="w-25">
							
							<form action="{{route('delete tematik',['id'=>$item->id])}}" method="get">
								<a href="{{route('edit tematik',['id'=>$item->id])}}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
								<button type="submit" class="delete show_confirm border-0 p-0 bg-transparent"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
							</form>
							
						</td>
					</tr>
                    @endforeach
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item active"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->

{{-- ModalEdit --}}
<div id="editModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="" method="post">
                @csrf
				<div class="modal-header">						
					<h4 class="modal-title">Tambahkan Data</h4>
					<button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Alamat</label>
						<input name="alamat" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Jumlah Kecelakaan Tunggal</label>
						<input name="tunggal" type="number" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Jumlah Kecelakaan</label>
						<input name="ganda" type="number" class="form-control" required>
					</div>
									
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>

<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Anda yakin ingin menghapus data ini`,
              text: "Data akan hilang secara permanen",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
@endsection
