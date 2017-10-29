@extends('admin.app')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Create New Users
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
        <div class="col-md-8">
          <div class="box box-info">
           <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
                @include('includes.errors')

               <form role="form" action="{{ route('user.update', $user->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
              <div class="box-body">
                <div class="form-group">
                  <label for="post title">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ $user->name }}">
                </div>
                <div class="form-group">
                  <label for="post subtitle">Email</label>
                  <input type="Email" class="form-control" id="email" placeholder="Email" name="email" value="{{ $user->email }}">
                </div>
                
                  <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" value="{{$user->phone }}">
                </div>


                <div class="form-group">
                  <label for="status">Status
                  <input type="checkbox" name="status" value="{{ $user->status }}"></label>
                </div>
                  
                  <label for="post slug">Role Assign</label>
                <div class="form-group">
                  
                  @foreach($roles as $role)
                    <div class="col-md-3">
                      
                        <div class="checkbox">
                          <label><input type="checkbox" value="{{ $role->id }}" name="role[]">{{ $role->name }}</label>
                        </div>
                      </div>

                  @endforeach
                </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>

          
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

@endsection