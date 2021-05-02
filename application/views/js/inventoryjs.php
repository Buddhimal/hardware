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
    // $('#reservationfromdate').datetimepicker({
	  // "autoclose": false,
	  // "format": "YYYY-MM-DD"
    // });
    // $('#reservationtodate').datetimepicker({
	  // "autoclose": true,
	  // "format": "YYYY-MM-DD"
    // });

    $( "#txtfromdate" ).datepicker({
      showOtherMonths: true,
      selectOtherMonths: true
    });
      $( "#txtfromdate" ).datepicker( "option", "dateFormat", "yy-mm-dd" );

      $( "#txttodate" ).datepicker({
      showOtherMonths: true,
      selectOtherMonths: true
    });
    $('#btnSearch').click(function(){
        alert($('#txtfromdate').val() +" - "+ $('#txttodate').val());

        $.ajax({
            url: "../dummydata/InventoryIdList.json",
            data: "{ bookingId : " + 1 + "  }",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
            async: false,
            success: function (data){
              //alert($('#txtfromdate').val() +" - "+ $('#txttodate').val());
              $("#example1").DataTable({
      "ajax": '<?php echo base_url()?>dummydata/InventoryIdList.json'
      //,"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    })

            }
        });

    });

    $('#searchById').change(function(){

        $.ajax({
            url: "../dummydata/InventoryIdList.json",
            async: false,
            success: function (data){
              //alert($('#txtfromdate').val() +" - "+ $('#txttodate').val());
              $('#idListId').empty();
              $.each(data.data, function(idx, item) {
                $('#idListId').append(new Option(item, idx))
              });

            }
        });
    });
      $( "#txttodate" ).datepicker( "option", "dateFormat", "yy-mm-dd" );


    $('#btnSearch').click(function(){
        //alert($('#txtfromdate').val() +" - "+ $('#txttodate').val());
        if($('#txtfromdate').val() == '' || typeof($('#txtfromdate').val())== 'undefined'){
            alert('From date should not empty');
        }
        else if($('#txttodate').val() == '' || typeof($('#txttodate').val())== 'undefined'){
            alert('To date should not empty');
        }
        else if($('#txtfromdate').val() > $('#txttodate').val()){
            alert('From date should less than To date');
        }

        $.ajax({
            url: "../dummydata/InventoryIdList.json",
            data: "{ bookingId : " + 1 + "  }",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
            async: false,
            success: function (data){
              //alert($('#txtfromdate').val() +" - "+ $('#txttodate').val());
              $("#example1").DataTable({
      "ajax": '<?php echo base_url()?>dummydata/InventoryIdList.json'
      //,"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    })

            }
        });

    });

    $('#searchById').change(function(){

        $.ajax({
            url: "../dummydata/InventoryIdList.json",
            async: false,
            success: function (data){
              //alert($('#txtfromdate').val() +" - "+ $('#txttodate').val());
              $('#idListId').empty();
              $.each(data.data, function(idx, item) {
                $('#idListId').append(new Option(item, idx))
              });

            }
        });
    });
    // $('#btnSearch').click(function(){
    //     alert($('#txtfromdate').val() +" - "+ $('#txttodate').val());
    // });
    $('#example1_info').css('display','none');
  });
</script>

  </body>
</html>