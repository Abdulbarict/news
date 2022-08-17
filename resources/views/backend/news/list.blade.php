@extends('layouts.app')
@section('content')

@endsection
@section('list')
<!-- Content wrapper start -->
<div class="content-wrapper">

  <!-- Content header start -->
  <section class="content-header">
    <h1>Pencil <small>All pencils</small></h1>
    <ol class="breadcrumb">
      <li><a href="index.html"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Pencil</li>
    </ol>
  </section>
  <!-- Content header end -->

  <!-- Main content start -->
  <section class="content container-fluid">
    <div class="row">
      <div class="col-xs-12">

        <!-- box start -->
        <div class="box">

          <!-- box-header start -->
          <div class="box-header">
            <h3 class="box-title">Pencils</h3>
            <div class="box-tools">
              <a href="{{route('news.create')}}" class="btn btn-block btn-default">Add Pencil</a>
            </div>
          </div>
          <!-- box-header end -->

          <!-- box-body start -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tr>
                <th>#</th>
                <th>Category</th>
                <th>Image</th>
                <th>Title</th>
                <th>Actions</th>
              </tr>
              <tr>
                <td>1</td>
                <td>Feature</td>
                <td><img src="img/product.jpg" alt=""></td>
                <td class="ml">ബ്രസീലിനെതിരായ സൗഹൃദ മത്സരത്തിൽ നിന്നും അര്‍ജന്റീന പിന്മാറി</td>
                <td>
                  <button type="button" class="btn btn-block btn-warning">Edit</button>
                  <button type="button" class="btn btn-block btn-danger">Delete</button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>Column</td>
                <td><img src="img/product.jpg" alt=""></td>
                <td class="ml">ബ്രസീലിനെതിരായ സൗഹൃദ മത്സരത്തിൽ നിന്നും അര്‍ജന്റീന പിന്മാറി</td>
                <td>
                  <button type="button" class="btn btn-block btn-warning">Edit</button>
                  <button type="button" class="btn btn-block btn-danger">Delete</button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Fanzone</td>
                <td><img src="img/product.jpg" alt=""></td>
                <td class="ml">ബ്രസീലിനെതിരായ സൗഹൃദ മത്സരത്തിൽ നിന്നും അര്‍ജന്റീന പിന്മാറി</td>
                <td>
                  <button type="button" class="btn btn-block btn-warning">Edit</button>
                  <button type="button" class="btn btn-block btn-danger">Delete</button>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Feature</td>
                <td><img src="img/product.jpg" alt=""></td>
                <td class="ml">ബ്രസീലിനെതിരായ സൗഹൃദ മത്സരത്തിൽ നിന്നും അര്‍ജന്റീന പിന്മാറി</td>
                <td>
                  <button type="button" class="btn btn-block btn-warning">Edit</button>
                  <button type="button" class="btn btn-block btn-danger">Delete</button>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Column</td>
                <td><img src="img/product.jpg" alt=""></td>
                <td class="ml">ബ്രസീലിനെതിരായ സൗഹൃദ മത്സരത്തിൽ നിന്നും അര്‍ജന്റീന പിന്മാറി</td>
                <td>
                  <button type="button" class="btn btn-block btn-warning">Edit</button>
                  <button type="button" class="btn btn-block btn-danger">Delete</button>
                </td>
              </tr>
              <tr>
                <td>6</td>
                <td>Fanzone</td>
                <td><img src="img/product.jpg" alt=""></td>
                <td class="ml">ബ്രസീലിനെതിരായ സൗഹൃദ മത്സരത്തിൽ നിന്നും അര്‍ജന്റീന പിന്മാറി</td>
                <td>
                  <button type="button" class="btn btn-block btn-warning">Edit</button>
                  <button type="button" class="btn btn-block btn-danger">Delete</button>
                </td>
              </tr>
              <tr>
                <td>7</td>
                <td>Feature</td>
                <td><img src="img/product.jpg" alt=""></td>
                <td class="ml">ബ്രസീലിനെതിരായ സൗഹൃദ മത്സരത്തിൽ നിന്നും അര്‍ജന്റീന പിന്മാറി</td>
                <td>
                  <button type="button" class="btn btn-block btn-warning">Edit</button>
                  <button type="button" class="btn btn-block btn-danger">Delete</button>
                </td>
              </tr>
              <tr>
                <td>8</td>
                <td>Column</td>
                <td><img src="img/product.jpg" alt=""></td>
                <td class="ml">ബ്രസീലിനെതിരായ സൗഹൃദ മത്സരത്തിൽ നിന്നും അര്‍ജന്റീന പിന്മാറി</td>
                <td>
                  <button type="button" class="btn btn-block btn-warning">Edit</button>
                  <button type="button" class="btn btn-block btn-danger">Delete</button>
                </td>
              </tr>
              <tr>
                <td>9</td>
                <td>Fanzone</td>
                <td><img src="img/product.jpg" alt=""></td>
                <td class="ml">ബ്രസീലിനെതിരായ സൗഹൃദ മത്സരത്തിൽ നിന്നും അര്‍ജന്റീന പിന്മാറി</td>
                <td>
                  <button type="button" class="btn btn-block btn-warning">Edit</button>
                  <button type="button" class="btn btn-block btn-danger">Delete</button>
                </td>
              </tr>
              <tr>
                <td>10</td>
                <td>Feature</td>
                <td><img src="img/product.jpg" alt=""></td>
                <td class="ml">ബ്രസീലിനെതിരായ സൗഹൃദ മത്സരത്തിൽ നിന്നും അര്‍ജന്റീന പിന്മാറി</td>
                <td>
                  <button type="button" class="btn btn-block btn-warning">Edit</button>
                  <button type="button" class="btn btn-block btn-danger">Delete</button>
                </td>
              </tr>
            </table>
          </div>
          <!-- box-body end -->

          <!-- box-footer start -->
          <div class="box-footer clearfix">
            <ul class="pagination pagination-sm no-margin pull-right">
              <li><a href="#">&laquo;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
          </div>
          <!-- box-footer end -->

        </div>
        <!-- box end -->

      </div>
    </div>
  </section>
  <!-- Main content end -->

</div>
<!-- Content wrapper end -->

@endsection