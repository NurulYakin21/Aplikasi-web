<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 3.0.2
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">ShopBooks</a>.</strong> All rights
    reserved.
</footer>



<!-- jQuery -->
<script src="<?php echo base_url(); ?>/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>/template/dist/js/demo.js"></script>
<!-- tables -->
<script src="<?php echo base_url(); ?>/template/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>/template/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- page script -->
<script>
    $(function() {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>
</body>

</html>