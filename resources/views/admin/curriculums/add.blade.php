@extends('admin.layouts.master')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>curriculum Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">curriculum Add</li>
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
            <form action="/admin/add/curriculum/{{$co->id}}" method="post">
              @csrf
              <input type="hidden" name="courseID" value="{{$co->id}}">
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
                  <label for="inputName">title</label>
                  <input type="text" id="inputName" class="form-control" name="title" value="{{ old('title') }}">
                </div>
                <div class="form-group">
                  <label for="inputDescription">link</label>
                  <textarea id="inputDescription" class="form-control" rows="4" name="link">{{ old('link') }}</textarea>
                </div>
              <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info">Add Curriculum</button>
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
