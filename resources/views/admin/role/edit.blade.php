@extends('admin.app')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Assign the Role
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
               <form role="form" method="post" action="{{route('role.update', $role->id)}}">

                  {{ csrf_field() }}
                  {{ method_field('PUT') }}

              <div class="box-body">
                <div class="form-group">
                  <label for="post title">Role</label>
                  <input type="text" class="form-control" id="role title" placeholder="Role" name="name" value="{{ $role->name }}">
                </div>


                <div class="col-md-4">
                <h3>User Permissions</h3>
                @foreach($permissions as $permission)
                @if($permission->for == 'post')

                <div class="checkbox">
                  <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}"
          
                    @foreach($role->permissions as $role_permit)
                  @if($role_permit->id == $permission->id)
                    
                    checked
                  
                  @endif
                  @endforeach
                    >{{ $permission->name }}</label>
                </div>

              @endif
              @endforeach
                
              </div>

              <div class="col-md-4">
                <h3>Post Permissions</h3>
                @foreach($permissions as $permission)
                @if($permission->for == 'user')

                <div class="checkbox">
                  <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}"

                    @foreach($role->permissions as $role_permit)
                  @if($role_permit->id == $permission->id)
                    
                    checked
                  
                  @endif
                  @endforeach

                    >{{ $permission->name }}</label>
                </div>

              @endif
              @endforeach
                
              </div>

              <div class="col-md-4">
                <h3>Other Permissions</h3>
                @foreach($permissions as $permission)
                @if($permission->for == 'other')

                <div class="checkbox">
                  <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}"

                    @foreach($role->permissions as $role_permit)
                      @if($role_permit->id == $permission->id)
                    
                    checked
                  
                  @endif
                  @endforeach

                    >{{ $permission->name }}</label>
                </div>

              @endif
              @endforeach
                
              </div>
                
                
              </div>


              
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('role.index') }}" class="btn btn-warning">Back</a>
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