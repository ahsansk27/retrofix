@extends('Admin.layout.master')
@section('content')
<div class="content-wrapper" style="min-height: 1203.31px;">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <div class="container-fluid">
         <div class="row mb-2">
            <div class="col-sm-6">
               <h1>User</h1>
            </div>
            <div class="col-sm-6">
               <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">User</li>
               </ol>
            </div>
         </div>
      </div>
      <!-- /.container-fluid -->
   </section>
   <!-- Main content -->
   <section class="content">
      <div class="row">
         <div class="col-12">
        
            <!-- /.card -->
            <div class="card">
               <!-- /.card-header -->
               <div class="card-body">
                  <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                
                     <div class="row">
                        <div class="col-sm-12">
                           <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                              <thead>
                                 <tr role="row">
                                 <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Name</th>
                                 <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Email</th>
                                 <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Image</th>
                                 </tr>
                              </thead>
                              <tbody>
                                @foreach($user as $data)
                                 <tr role="row" class="odd">
                                 <td tabindex="0" class="sorting_1">{{$data->name}}</td>
                                 <td tabindex="0" class="sorting_1">{{$data->email}}</td>
                                 <td tabindex="0" class="sorting_1"><img src="{{ asset('/admin/images/users')}}/{{ $data->image }}" style="width: 7%;"></td>
                                 </tr>
                            @endforeach
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <th rowspan="1" colspan="1">Name</th>
                                    <th rowspan="1" colspan="1">Email</th>
                                    <th rowspan="1" colspan="1">Image</th>
                            
                                 </tr>
                              </tfoot>
                           </table>
                        </div>
                     </div>
                    
                  </div>
               </div>
               <!-- /.card-body -->
            </div>
            <!-- /.card -->
         </div>
         <!-- /.col -->
      </div>
      <!-- /.row -->
   </section>
   <!-- /.content -->
</div>
@endsection