<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Blog</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('inc.styles')


</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    @include('inc.header')
    <!-- Left side column. contains the logo and sidebar -->
    @include('inc.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          @yield('header')
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> @yield('breadcrumb')</a></li>
          <li class="active"></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content container-fluid" id="main_content">

        @yield('content')


      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include('inc.footer')
    <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED JS SCRIPTS -->
  @include('inc.scripts')

</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


<script type="text/javascript">
  $("#save-comment").on('click', function() {
    var body = $("#comment_body").val();
    var _post_id = $("#post_id").val();
    // Run Ajax
    $.ajax({
      url: "{{ route('comments.store')}}",
      type: "post",
      dataType: 'json',
      data: {
        body: body,
        post_id: _post_id,
        _token: "{{ csrf_token() }}"
      },
      beforeSend: function() {},
      success: function(res) {}
    });
    window.location.reload();

  });
</script>

</html>