<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="../css/hide.css">

        <script src="../js/jquery-2.1.4.js"></script>
        <script src="../js/hide.js"></script>


    </head>
    <body>
  <div id="wrapper">
  <div class="overlay"></div>
  <!-- Sidebar -->
  <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
    <ul class="nav sidebar-nav">
      <li class="sidebar-brand">
        <a class="tampilan" id="1">
          Ruang Admin
         </a>
          <li>
            <a class="tampilan" id="2"> Mahasiswa </a>
          </li>
          <li>
            <a class="tampilan" id="3"> Tambah Data  </a>
          </li>
    </ul>
  </nav>
  <!-- /#sidebar-wrapper -->

  <!-- Page Content -->
  <div id="page-content-wrapper">
    <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
      <span class="hamb-top"></span>
      <span class="hamb-middle"></span>
      <span class="hamb-bottom"></span>
    </button>
  </div>
  <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->
<div id="tampil"></div>
</body>
<script>
 $(document).ready(function(){
      $('.tampilan').each(function(){
        $(this).on('click', function(){
      var menu = $(this).attr('id');
      if(menu == "1"){
      $('#tampil').load('selamat.php');           
      }else if(menu == "2"){
        $('#tampil').load('mahasiwa.php');            
      }else if(menu == "3"){
        $('#tampil').load('tambah.php');           
      }
    });
    });
  $('#tampil').load('selamat.php');
  });
</script>

</html>             