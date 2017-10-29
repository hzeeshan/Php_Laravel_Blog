@extends('admin.app')
@section('head')
  <link rel="stylesheet" href="{{asset('admin/plugins/select2/select2.min.css')}}">
@endsection
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create New Posts
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
        <div class="col-md-12">
          <div class="box box-info">
           <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>

            @include('includes.errors')

               <form role="form" method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="post title">Post Title</label>
                  <input type="text" class="form-control" id="post title" placeholder="Post Title" name="title">
                </div>
                <div class="form-group">
                  <label for="post subtitle">Post SubTitle</label>
                  <input type="text" class="form-control" id="post subtitle" placeholder="Post SubTitle" name="subtitle">
                </div>
                <div class="form-group">
                  <label for="post slug">Post Slug</label>
                  <input type="text" class="form-control" id="post slug" name="slug" placeholder="Post Slug">
                </div>
                <div class="form-group">
                  <label for="InputFile">File input</label>
                  <input type="file" id="InputFile" name="image">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" value="1"> Publish
                  </label>
                </div>
                <div class="form-group">
                <label>Select Tags</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;" name="tags[]">
                  @foreach($tags as $tag)
                  <option value="{{$tag->id}}">{{ $tag->name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label>Select Categories</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;" name="categories[]">
                        @foreach($categories as $category)
                  <option value="{{$category->id}}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
              </div>
              <!-- /.box-body -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Write Your Post here
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
               
              </div>
              
            </div>
            
            <div class="box-body pad">
              
                <textarea id="editor1" class="" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="body"></textarea>
              
            </div>
          </div>
          <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('post.index') }}" class="btn btn-warning">Back</a>
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
@section('footer')
<script src="{{asset('admin/plugins/select2/select2.full.min.js')}}"></script>
<script type="text/javascript">
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()</script>
@endsection