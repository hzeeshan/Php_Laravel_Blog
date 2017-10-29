@extends('admin.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit the Permission Role
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-10">
          <div class="box box-info">
           <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
              @include('includes.errors')
               <form role="form" method="post" action="{{route('permission.update', $permission->id)}}">

                  {{ csrf_field() }}
                  {{ method_field('PUT') }}

              <div class="box-body">
                <div class="form-group">
                  <label for="post title">permission</label>
                  <input type="text" class="form-control" id="permission title" placeholder="permission" name="name" value="{{ $permission->name }}">
                </div>
                
                
              </div>
              
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('permission.index') }}" class="btn btn-warning">Back</a>
              </div>
            </form>

          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

@endsection