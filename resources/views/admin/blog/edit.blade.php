@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row mt-4">
      <div class="col-8 offset-3">
        <div class="col-md-9">
          <div class="">
            <div class="c p-2">
              <legend class="text-center">Blog</legend>
            </div>
            <div class="">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <form method="POST" class="form-horizontal" action="{{ route('blog.update', $blogData['id'] ) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="image" class="col-sm-4 col-form-label">Blog Image</label>
                        <div class="col-sm-10">
                          <input type="file" class="form-control" name="blogImage" id="image" placeholder="Blog Image">
                        </div>
                      </div>

                      <div>
                        <img src="{{ asset('blogImage/'. $blogData['image'] ) }}" width="250px" height="300px" />
                      </div>

                    <div class="form-group row">
                      <label for="title" class="col-sm-4 col-form-label">Main Title</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="mainTitle" value="{{ $blogData['main_title'] }}" id="title" placeholder="Main Title" required>
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="desc1" class="col-sm-4 col-form-label">Description 1</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="desc1" id="desc1" placeholder="Description 1" >{{ $blogData['desc_1'] }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="desc2" class="col-sm-4 col-form-label">Description 2</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="desc2" id="desc2" placeholder="Description2" >{{ $blogData['desc_2'] }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="subtitle" class="col-sm-4 col-form-label" >Sub Title</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="subTitle" value="{{ $blogData['sub_title'] }}" id="subtitle" placeholder="Sub Title" required>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="desc3" class="col-sm-4 col-form-label">Description 3</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" id="desc3" name="desc3" placeholder="Description3" >{{ $blogData['desc_3'] }}</textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn bg-dark text-white">Submit</button>
                      </div>
                    </div>
                  </form>

                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
