@extends('admin.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit The Tags
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
               <form role="form" method="post" action="{{route('tag.update', $tag->id)}}">

                  {{ csrf_field() }}
                  {{ method_field('PUT') }}

              <div class="box-body">
                <div class="form-group">
                  <label for="post title">Tag Title</label>
                  <input type="text" class="form-control" id="post title" placeholder="Post Title" name="name" value="{{ $tag->name }}">
                </div>
                <div class="form-group">
                  <label for="post subtitle">Tag Slug</label>
                  <input type="text" class="form-control" id="post subtitle" placeholder="Post SubTitle" name="slug" value="{{ $tag->slug }}">
                </div>
                
              </div>
              
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('tag.index') }}" class="btn btn-warning">Back</a>
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