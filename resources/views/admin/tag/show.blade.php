@extends('admin.app')

@section('head')
<link rel="stylesheet" href="{{asset('admin/plugins/datatables/dataTables.bootstrap.css')}}">

@endsection

@section('content')

<div class="content-wrapper">
    
        <section class="content-header">
      <h1>
        See All Your Tags
        <small>it all starts here</small>
      </h1>
      <a href="{{ route('tag.create') }}" class="btn btn-success col-md-offset-5">Add New</a>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
       </section>

         <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>

                <tr>
                  <th>S No.</th>
                  <th>Tag Name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                @foreach($tags as $tag)
                <tbody>
                <tr>
                  <td>{{ $loop->index+1 }}</td>
                  <td>{{ $tag->name }}</td>
                  
                  <td>{{ $tag->slug }}</td>
                  <td><a href="{{ route('tag.edit', $tag->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  
                  <td><form id="delete-form-{{$tag->id}}" method="post" action="{{route('tag.destroy', $tag->id)}}">

                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                  </form>
                  <a href="" onclick="

                  if(confirm('Are You sure you want to delete this ?')){

                    event.preventDefault();
                    document.getElementById('delete-form-{{$tag->id}}').submit();
                  } else {

                    event.preventDefault();
                  }

                  "><span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                
                </tbody>
                @endforeach
                <tfoot>
                <tr>
                 <th>S No.</th>
                  <th>Tag Name</th>
                  <th>Slug</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>


     </div>

@endsection

@section('footer')

<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/dist/js/demo.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
@endsection