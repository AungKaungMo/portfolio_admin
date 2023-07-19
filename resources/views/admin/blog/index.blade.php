@extends('admin.layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row mt-4">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Blog Table</h3>

            <div class="card-tools">

                <div class="input-group-append">
                <a href="{{ route('blog.create') }}">
                    <button type="submit" class="btn btn-default">
                        Add
                      </button>
                </a>
                </div>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap text-center">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Image</th>
                  <th>Main Title</th>
                  <th>Sub Title</th>
                  <th>Desc1</th>
                  <th>Desc2</th>
                  <th>Desc3</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($blogData as $item)

                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>
                    <img src="{{ asset('blogImage/'. $item['image'] ) }}" width="150px" height="100px"/>
                  </td>
                  <td>{{ Str::limit($item['main_title'], 35, '...') }}</td>
                  <td>{{ Str::limit($item['sub_title'], 35, '...') }}</td>
                  <td>{{ Str::limit($item['desc_1'], 35, '...') }}</td>
                  <td>{{ Str::limit($item['desc_2'], 35, '...') }}</td>
                  <td>{{ Str::limit($item['desc_3'], 35, '...') }}</td>
                  <td class="d-flex">
                    <button class="btn btn-sm bg-dark text-white">
                        <a href="{{ route('blog.edit', $item->id) }}">
                        <i class="fas fa-edit"></i>
                        </a>
                    </button>
                    <form action="{{ route('blog.destroy', $item['id']) }}" method="POST"  class="ml-2">
                        @csrf
                        @method('DELETE')
                    <button class="btn btn-sm bg-danger text-white">

                        <i class="fas fa-trash-alt"></i>
                    </button>
                </form>

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
    </div>

  </div>

@endsection
