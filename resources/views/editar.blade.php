<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
     <div class="card mb-3">
        <div class="card-header">
          <h1 class="fa fa-table">Editar imagen</h1> </div>
        <div class="card-body">

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  @include('error')
{!! Form::model($dibujo, ['route' => ['dibujo.update', $dibujo->id], 'method' => 'PUT']) !!}
  @include('form')
   {!! Form::close()!!}
</body>

</html>