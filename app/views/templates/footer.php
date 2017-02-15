                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src='<?php echo BASE_URL; ?>app/style/bower_components/jquery/dist/jquery.min.js'></script>

    <!-- Bootstrap Core JavaScript -->
    <script src='<?php echo BASE_URL; ?>app/style/bower_components/bootstrap/dist/js/bootstrap.min.js'></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src='<?php echo BASE_URL; ?>app/style/bower_components/metisMenu/dist/metisMenu.min.js'></script>

    <!-- DataTables Plugin Javascript -->
    <script src='<?php echo BASE_URL; ?>app/style/bower_components/datatables/media/js/jquery.dataTables.min.js'></script>

    <!-- Morris Charts Plugin Javascript -->
    <script src='<?php echo BASE_URL; ?>app/style/bower_components/raphael/raphael-min.js'></script>
    <script src='<?php echo BASE_URL; ?>app/style/bower_components/morrisjs/morris.min.js'></script>

    <!-- Custom Theme JavaScript -->
    <script src='<?php echo BASE_URL; ?>app/style/dist/js/sb-admin-2.js'></script>

    <script src='<?php echo BASE_URL; ?>app/style/dist/js/script.js'></script>

    <script src='<?php echo BASE_URL; ?>app/style/dist/js/morris.js'></script>

    <script src='<?php echo BASE_URL; ?>tinymce/js/tinymce/tinymce.min.js'></script>

    <script>
       
       tinymce.init({ 
        selector: 'textarea',
        height: 300
       });

    </script>

    <script>

        (function($) {
            $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            
            $('.modal-body').html('<strong>Are you sure?</strong>');
            });
        })(jQuery);

    $('#myTabs a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    });


    $('#myTabs a[href="#profile"]').tab('show') // Select tab by name
    $('#myTabs a:first').tab('show') // Select first tab
    $('#myTabs a:last').tab('show') // Select last tab
    $('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed
    
  </script>

</body>

</html>