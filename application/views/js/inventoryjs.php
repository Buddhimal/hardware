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
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,"paging": true,
      "searching": false,
      "ordering": true,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    $( "#from" ).datepicker({
      showOtherMonths: true,
      selectOtherMonths: true
    });
      $( "#from" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
      $( "#to" ).datepicker({
      showOtherMonths: true,
      selectOtherMonths: true
    });

    $('#search_by').change(function(sender,args){
      if(sender.target.value == "Item"){
          $('.cbItem').css('display','inline');
          $('.txtPrice').css('display','none');
      }
      else{
          $('.cbItem').css('display','none');
          $('.txtPrice').css('display','inline');
      }
       
    });
      $( "#to" ).datepicker( "option", "dateFormat", "yy-mm-dd" );

    $('#example1_info').css('display','none');
  });
</script>
