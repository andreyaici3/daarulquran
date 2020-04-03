


		<!-- jQuery -->
        <script src="<?= base_url('assets/back/'); ?>js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?= base_url('assets/back/'); ?>js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?= base_url('assets/back/'); ?>js/metisMenu.min.js"></script>

         <!-- DataTables JavaScript -->
        <script src="<?= base_url('assets/back/'); ?>js/dataTables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('assets/back/'); ?>js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?= base_url('assets/back/'); ?>js/startmin.js"></script>
        <script src="<?= base_url('assets/back/'); ?>js/style.js"></script>

        <!-- datepicker -->
        <script type="text/javascript" src="https://repo.rachmat.id/jquery-ui-1.12.1/jquery-ui.js"></script>
        

        <script type="text/javascript">
            $(function(){
              $("#datepicker").datepicker();
            });

            $(function(){
              $("#datepickerAyah").datepicker();
            });

            $(function(){
              $("#datepickerIbu").datepicker();
            });
        </script> -->

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });

            initSample();
        </script>



    </body>
</html>