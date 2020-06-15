@extends('admin.layouts.master')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Course Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Course Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" >
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <form action="/admin/courses" method="post" enctype="multipart/form-data">
              @csrf
              @if ($errors->any())
                  @foreach ($errors->all() as $error)
                      <div class="alert alert-solid-danger alert-bold" role="alert">
                          <div class="alert-text">
                              {{ $error }}
                          </div>
                      </div>
                  @endforeach
              @endif
              <div class="card-header">
                <h3 class="card-title">General</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group">
                  <label for="inputName">Course Name</label>
                  <input type="text" id="inputName" class="form-control" name="name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                  <label for="inputDescription">Course Description</label>
                  <textarea id="inputDescription" class="form-control" rows="4" name="description">
                    {{ old('campaign_content') }}
                  </textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Course Image</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" accept="image/*" class="custom-file-input" id="exampleInputFile" name="file">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputStatus">Category</label>
                  <select name="categoryID" id="inputStatus" class="form-control custom-select">
                    @foreach ($cats as $cat)
                    <option value="{{$cat->id}}" >{{$cat->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="inputName">Duration</label>
                  <div class="input-group mb-3">
                    <input name="duration" type="number" class="form-control" value="{{ old('duration') }}">
                    <div class="input-group-append">
                      <span class="input-group-text">days</span>
                    </div>
                  </div>
              </div>
              <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info">Add Coures</button>
                <button type="reset" class="btn btn-default float-right">Cancel</button>
              </div>
            </form>
          </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
