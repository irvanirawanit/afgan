@extends('layouts.master')

@section('filecss')
  <!-- DataTables -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.bootstrap4.min.css">
@endsection

@section('header', 'Base Cylinder')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">List Base Cylinder</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Name</th>
                      <th>SAP</th>
                      <th>Code Cy</th>
                      <th>Circum</th>
                      <th>Qty</th>
                      <th>Warna</th>
                      <th>Widht</th>
                      <th>Picth</th>
                      <th>Up</th>
                      <th>Repeat</th>
                      <th>Suplier</th>
                      <th>Tgl Pembuatan</th>
                      <th>Qty Join</th>
                      <th>SAP Join</th>
                      <th>Code Cyl Join</th>
                      <th>Pipa</th>
                      <th>Plat</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Plastik Outer</td>
                        <td>20015874</td>
                        <td>kk-00099</td>
                        <td>300x300</td>
                        <td>3</td>
                        <td>Merah</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>SKI</td>
                        <td>8 MEI</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>Pipa</td>
                        <td>Plat</td>
                    </tr>
                    <tr>
                        <td>Calpico</td>
                        <td>20015874</td>
                        <td>kk-00099</td>
                        <td>300x300</td>
                        <td>3</td>
                        <td>Merah</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>9</td>
                        <td>SKI</td>
                        <td>8 MEI</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>Pipa</td>
                        <td>Plat</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>SAP</th>
                        <th>Code Cy</th>
                        <th>Circum</th>
                        <th>Qty</th>
                        <th>Warna</th>
                        <th>Widht</th>
                        <th>Picth</th>
                        <th>Up</th>
                        <th>Repeat</th>
                        <th>Suplier</th>
                        <th>Tgl Pembuatan</th>
                        <th>Qty Join</th>
                        <th>SAP Join</th>
                        <th>Code Cyl Join</th>
                        <th>Pipa</th>
                        <th>Plat</th>
                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
        </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
@endsection

@section('filejs')
<!-- DataTables  & Plugins -->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.5.0/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.66/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.colVis.min.js"></script>
@endsection

@section('javacsript')
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,"iDisplayLength": 100,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
  </script>
@endsection
