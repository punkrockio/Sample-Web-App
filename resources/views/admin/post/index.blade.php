@extends('admin.adminlayout')


@section('breadcrumbs')
  <h1>Articles</h1>

  <ul>

    <li>
      <a href='/admin'>
        <i class="fa fa-home"></i>
        <!-- Dashboard -->
      </a>  <i class='fa fa-angle-right'></i>
    </li>
    <li>
      <a href='#'>Posts</a>  <!-- <i class='fa fa-angle-right'></i> -->
    </li>
    
  </ul>
@endsection


@section('content')
  <div class="container-fluid">
    <div class="row page-title-row" style="margin-bottom: 10px;">
      <!-- <div class="col-md-6">
        <h3>Posts <small>&raquo; Listing</small></h3>
      </div> -->
      <div class="col-md-6 text-right">
        <a href="/admin/post/create" class="btn btn-success btn-md">
          <i class="fa fa-plus-circle"></i> New Post
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">

        @include('admin.partials.errors')
        @include('admin.partials.success')

        <table id="posts-table" class="table table-striped table-bordered">
          <thead>
          <tr>
            <th>Published</th>
            <th>Title</th>
            <th>Subtitle</th>
            <th data-sortable="false">Actions</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($posts as $post)
            <tr>
              <td data-order="{{ $post->published_at->timestamp }}">
                {{ $post->published_at->format('j-M-y g:ia') }}
              </td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->subtitle }}</td>
              <td style="width:121px">
                <div class="btn-group" style="width: 100%">
                  <a href="/admin/post/{{ $post->id }}/edit"
                     class="btn btn-xs btn-info" style="width: 40%; padding:0px">
                    <i class="fa fa-edit"></i> <!-- Edit -->
                  </a>
                  <a href="/blog/{{ $post->slug }}"
                     class="btn btn-xs btn-warning" style="width: 40%; padding:0px">
                    <i class="fa fa-eye"></i> <!-- View -->
                  </a>
                </div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>

  </div>
@stop

@section('scripts')
  <script>
    $(function() {
      /*
      $("#posts-table").DataTable({
        order: [[0, "desc"]]
      });
      */
    });
  </script>
@stop