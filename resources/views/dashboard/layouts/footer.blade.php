<footer class="main-footer">
    <strong>Copyright &copy; 2022-2027 <a href="https://adminlte.io">AhsanHabib.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.2.0
    </div>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
  <!-- /.control-sidebar -->
</div>
<script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('backend/dist/js/adminlte.js')}}"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('backend/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('backend/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify.js/0.4.2/notify.min.js"></script>
<script src="{{asset('backend/dist/js/pages/dashboard3.js')}}"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.colVis.min.js"></script>
<!-- jquery-validation -->
<script src="{{asset('backend/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('backend/plugins/jquery-validation/additional-methods.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('backend/plugins/select2/js/select2.full.min.js')}}"></script>
<script>
  $(document).ready(function() {
    var table = $('#example').DataTable({
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>
<script type="text/javascript">
  $(function(){
    $(document).on('click','#delete',function(e){
      e.preventDefault();
      var link = $(this).attr("href");
      Swal.fire({
      title: 'Are you sure?',
      text: "You delete this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it !'
      }).then((result) => {
      if (result.isConfirmed) {
        window.location.href = link;
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
      }
    });
    });
  });
</script>
<!-- flash alert -->
<script>
  $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
  
</script>

<!-- select tool -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  });
</script>
</body>
</html>