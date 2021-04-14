<style>
#block1,#block2,#block3{
	margin-top: 5px;
}
</style>
  <!-- DataTables -->
 <link rel="stylesheet" href="<?php echo base_url()?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url()?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url()?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url()?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url()?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url()?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url()?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url()?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<!-- <script src="<?php echo base_url()?>dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?php echo base_url()?>dist/js/demo.js"></script> -->
<!-- Page specific script -->

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,"paging": true,
      "searching": false,
      "ordering": true,
      "ajax": '<?php echo base_url()?>dummydata/inventorydata.txt'
      //,"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    // $('#example1').DataTable( {
    //     "ajax": '<?php echo base_url()?>dummydata/inventorydata.txt'
    // } );
    $('#reservationfromdate').datetimepicker({
	  "autoclose": false,
	  "format": "YYYY-MM-DD"
    });
    $('#reservationtodate').datetimepicker({
	  "autoclose": true,
	  "format": "YYYY-MM-DD"
    });
    $('#btnSearch').click(function(){
        alert($('#txtfromdate').val() +" - "+ $('#txttodate').val());
    });
    $('#example1_info').css('display','none');
  });
</script>

  </body>
</html>