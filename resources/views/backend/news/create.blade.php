@extends('layouts.app')
@section('content')
<!-- Content wrapper start -->
<div class="content-wrapper">

  <!-- Content header start -->
  <section class="content-header">
    <h1>Pencil <small>Add pencil</small></h1>
    <ol class="breadcrumb">
      <li><a href="index.html"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="table.html"> Pencil</a></li>
      <li class="active">Add pencil</li>
    </ol>
  </section>
  <!-- Content header end -->

  <!-- Main content start -->
  <section class="content container-fluid">
    <div class="row">

      <!-- left-column start -->
      <div class="col-md-12">

        <!-- box start -->
        <div class="box box-primary">

          <!-- box-header start -->
          <div class="box-header with-border">
            <h3 class="box-title">{{__('Enter data')}}</h3>
          </div>
          <!-- box-header end -->

          <!-- form start -->
          <form role="form" action="{{route('news')}}" method="POST">
            @csrf
            <!-- box-body start -->
            <div class="box-body">
              <div class="form-group">
                <label>Category</label>
                <select class="form-control ml" name="category">
                  <option value="1">Feature</option>
                  <option value="2">Travelogue</option>
                  <option value="3">General Article</option>
                </select>
              </div>
              <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control ml" placeholder="Enter title.." name="title">
              </div>
              <div class="form-group">
                <label>Description</label>
                <textarea id="summernote" class="form-control" name="description"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputFile1">Image</label>
                <input type="file" id="exampleInputFile1" name="image">
                <p class="help-block">Resolution 780 x 450</p>
              </div>
            </div>
            <!-- box-body end -->

            <!-- box-footer start -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <!-- box-footer end -->

          </form>
          <!-- form end -->

        </div>
        <!-- box end -->

      </div>
      <!-- left-column end -->

  

    </div>
  </section>
  <!-- Main content end -->

</div>
<!-- Content wrapper end -->
@endsection()