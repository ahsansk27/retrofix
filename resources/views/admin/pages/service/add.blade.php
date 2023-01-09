@extends('Admin.layout.master')
@section('content')

@php
   $action = isset($row->id) ? route('service.update',$row->id) : route('service.store');
   $name = isset($row->id) ? $row->name : old('name');
   $image = isset($row->id) ? $row->image : old('image');
   $description = isset($row->id) ? $row->description : old('description');
  
@endphp
<div class="content-wrapper" style="min-height: 1246.5px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>General Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      @if ($errors->any())
            <div class="alert alert-danger">
               <ul>
                     @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                     @endforeach
               </ul>
            </div>
         @endif
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ $action }}" method="post" enctype="multipart/form-data">
              @csrf
                  @isset($row->id)
                     @method('put')
                  @endisset
                <div class="card-body">

                <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name"  placeholder="Enter Name" value="{{ $name }}">
                  </div>
                
                    </div>
                      <!-- select -->
                      <div class="col-sm-6">
                      <div class="form-group">
			                    <label for="exampleInputFile">Feature Image</label>
			                    <div class="input-group">
			                        <div class="custom-file">
			                            <input type="file" name="image"  value="{{ $image }}" class="custom-file-input" id="exampleInputFile">
			                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
			                        </div>
			                    </div>
			                </div>
                      </div>
                      </div>

                      <div class="col-sm-6">
                 <div class="form-group">
                        <label>Textarea</label>
                        <textarea name="description" class="form-control"   value="{{ $description }}" rows="3" placeholder="Enter ..."></textarea>
                        </div> </div>
                 
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
         </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
    @endsection