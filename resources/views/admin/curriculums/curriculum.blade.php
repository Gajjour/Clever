@extends('admin.layouts.master')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Courses</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Courses</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title" style="line-height: 37px;">curriculum</h3>
          <button type="button" class="btn btn-info add-new float-right"><i class="fa fa-plus"></i> <a href="/admin/curriculum/{{ $con->id }}/add" style="color: #fff">Add New</a></button>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 10+++%">
                          title
                      </th>
                      <th>
                          link
                      </th>
                  </tr>
              </thead>
              <tbody>
                @foreach($con->contents as $co)
                  <tr>
                      <td>
                          {{$loop->index+1}}
                      </td>
                      <td>
                          {{$co->title}}
                      </td>
                      <td>
                          <a>
                              {{$co->link}}
                          </a>
                          <br/>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-info btn-sm" href="{{ url('/admin/curriculum/' . $co->id . '/edit') }}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
                          <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');" href="{{ url('/admin/curriculum/' . $co->id . '/delete') }}">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @endsection
