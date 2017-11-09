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
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th width="20px"> ID </th>
                  <th>Nombre de la imagen </th>
                  <th>Alto </th>
                  <th>Ancho </th>
                  <th colspan="3"> </th>
                </tr>
                </thead>
               <tobody>
                @foreach($tabla as $dibujo)
                <tr>
                  <td>{{ $dibujo->id}} </td>
                  <td>{{ $dibujo->nombre}} </td>
                  <td>{{ $dibujo->alto}} </td>
                  <td>{{ $dibujo->ancho}} </td>
                  <td> <a href="editar"> ver</a></td>
                  <td>editar</td>
                  <td>borrar</td> 
                </tr> 
                 @endforeach    
              </tbody>
            </table>
            {!! $tabla->render() !!}
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
  
</body>

</html>