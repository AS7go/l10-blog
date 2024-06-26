  @extends('admin.layouts.main')

  @section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
              <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-6 d-flex align-items-center">
                          <h1 class="m-0 mr-3">{{ $post->title }}</h1>
                          <a href="{{ route('admin.post.edit', $post->id) }}" class="text-success"><i
                                  class="fas fa-pencil-alt"></i></a>

                          <form action="{{ route('admin.post.delete', $post->id) }}" method="POST" class="ml-2" id="delete-form-{{$post->id}}">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="border-0 bg-transparent" onclick="confirmDelete({{$post->id}})">
                                  <i class="fas fa-trash text-danger" role="button"></i>
                              </button>
                          </form>

                      </div><!-- /.col -->

                      <script>
                        function confirmDelete(postId){
                            if(confirm("Are you sure you want to delete this post?")){
                                document.getElementById('delete-form-'+postId).submit();
                            }
                        }
                      </script>  
                      <div class="col-sm-6">
                          <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active">Dashboard v1</li>
                          </ol>
                      </div><!-- /.col -->
                  </div><!-- /.row -->
              </div><!-- /.container-fluid -->
          </div>
          <!-- /.content-header -->

          <!-- Main content -->
          <section class="content">
              <div class="container-fluid">
                  <!-- Small boxes (Stat box) -->
                  <div class="row">
                      <div class="col-6">
                          <div class="card">
                              <!-- /.card-header -->
                              <div class="card-body table-responsive p-0">
                                  <table class="table table-hover text-nowrap">
                                      <tbody>
                                          <tr>
                                              <td>ID</td>
                                              <td>{{ $post->id }}</td>
                                          </tr>
                                          <tr>
                                              <td>Name</td>
                                              <td>{{ $post->title }}</td>
                                          </tr>
                                          <tr>
                                              <td>Created</td>
                                              <td>{{ $post->created_at }}</td>
                                          </tr>
                                          <tr>
                                              <td>Updated</td>
                                              <td>{{ $post->updated_at }}</td>
                                          </tr>
                                      </tbody>
                                  </table>
                              </div>
                              <!-- /.card-body -->
                          </div>
                          <!-- /.card -->
                      </div>
                      <!-- ./col -->
                  </div>
                  <!-- /.row -->
              </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
  @endsection
