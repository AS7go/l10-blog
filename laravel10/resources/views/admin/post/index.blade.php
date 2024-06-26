  @extends('admin.layouts.main')

  @section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
              <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-6">
                          <h1 class="m-0">Posts</h1>
                      </div><!-- /.col -->
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
                      <div class="col-1 mb-3">
                          <a href="{{ route('admin.post.create') }}" type="button"
                              class="btn btn-block btn-primary">Add</a>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-6">
                          <div class="card">
                              <!-- /.card-header -->
                              <div class="card-body table-responsive p-0">
                                  <table class="table table-hover text-nowrap">
                                      <thead>
                                          {{-- @dd($categories) --}}
                                          <tr>
                                              <th>ID</th>
                                              <th>Name</th>
                                              <th>Show</th>
                                              <th>Edit</th>
                                              <th>Delete</th>
                                              {{-- <th colspan="3" class="text-center">Actions</th> --}}
                                          </tr>
                                      </thead>
                                      <tbody>

                                          @foreach ($posts as $post)
                                              <tr>
                                                  <td>{{ $post->id }}</td>
                                                  <td>{{ $post->title }}</td>
                                                  <td><a href="{{ route('admin.post.show', $post->id) }}"><i
                                                              class="far fa-eye"></i></a></td>
                                                  <td><a
                                                          href="{{ route('admin.post.edit', $post->id) }} "class="text-success"><i
                                                              class="fas fa-pencil-alt"></i></a></td>
                                                  <td>


                                                      <form action="{{ route('admin.post.delete', $post->id) }}"
                                                          method="POST" class="ml-3"
                                                          id="delete-form-{{ $post->id }}">
                                                          @csrf
                                                          @method('DELETE')
                                                          <button type="button" class="border-0 bg-transparent"
                                                              onclick="confirmDelete({{ $post->id }})">
                                                              <i class="fas fa-trash text-danger" role="button"></i>
                                                          </button>
                                                      </form>

                                                      <script>
                                                          function confirmDelete(postId) {
                                                              if (confirm("Are you sure you want to delete this post?")) {
                                                                  document.getElementById('delete-form-' + postId).submit();
                                                              }
                                                          }
                                                      </script>


                                                  </td>
                                              </tr>
                                          @endforeach

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
