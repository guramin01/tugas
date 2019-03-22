<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partial/head");?>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partial/sidebar");?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
   <?php $this->load->view("admin/_partial/coba");?>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php $this->load->view("admin/_partial/logout");?>
  </div>

 <?php $this->load->view("admin/_partial/js");?>

</body>

</html>
