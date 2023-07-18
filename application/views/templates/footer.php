 <!-- footer -->
<div class="inner_container">
     <div class="footer">
    <?php $currentYear = date('Y'); ?>
    <p>
        Copyright &copy; <?php echo $currentYear; ?> All rights reserved.<br><br>
        Developed By: <a href="https://mediacomputer.tech/">MediaComputer.Tech</a>
    </p>
    </div>
 </div>
 <!-- Datatables -->
 <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
 <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
 <!-- jQuery -->
 <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
 <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
 <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
 <!-- wow animation -->
 <script src="<?php echo base_url();?>jassets/s/animate.js"></script>
 <!-- select country -->
 <script src="<?php echo base_url();?>assets/js/bootstrap-select.js"></script>
 <!-- owl carousel -->
 <script src="<?php echo base_url();?>assets/js/owl.carousel.js"></script>
 <!-- chart js -->
 <script src="<?php echo base_url();?>assets/js/Chart.min.js"></script>
 <script src="<?php echo base_url();?>assets/js/Chart.bundle.min.js"></script>
 <script src="<?php echo base_url();?>assets/js/utils.js"></script>
 <script src="<?php echo base_url();?>assets/js/analyser.js"></script>
 <!-- nice scrollbar -->
 <script src="<?php echo base_url();?>assets/js/perfect-scrollbar.min.js"></script>
 <script>
var ps = new PerfectScrollbar('#sidebar');
 </script>
 <!-- custom js -->
 <script src="<?php echo base_url();?>assets/js/chart_custom_style1.js"></script>
 <script src="<?php echo base_url();?>assets/js/custom.js"></script>

 <script>
    new DataTable('#jabatan');
 </script>

 <script>
    new DataTable('#karyawan');
 </script>

 <script>
    new DataTable('#golongan');
 </script>

 <script>
    new DataTable('#pribadi');
 </script>

 <script>
    new DataTable('#pelamar');
 </script>

 <script>
    new DataTable('#menu');
 </script>

 <script>
    new DataTable('#submenu');
 </script>

 <script>
    new DataTable('#role');
 </script>

 <script>
    new DataTable('#mpp');
 </script>

 <script>
    new DataTable('#thl');
 </script>

 <script>

$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
});

$('.form-check-input').on('click', function() {
    const menuId = $(this).data('menu');
    const roleId = $(this).data('role');

    $.ajax({
        url: "<?= base_url('admin/changeaccess'); ?>",
        type: 'post',
        data: {
            menuId: menuId,
            roleId: roleId
        },
        success: function() {
            document.location.href = "<?= base_url('admin/roleaccess/') ?>" + roleId;
        }
    });
});
</script>

 </body>

 </html>