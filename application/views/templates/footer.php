 <!-- footer -->
 <div class="container-fluid">
     <div class="footer">
    <?php $currentYear = date('Y'); ?>
    <p>
        Copyright &copy; <?php echo $currentYear; ?> All rights reserved.<br><br>
        Developed By: <a href="https://mediacomputer.tech/">MC.TECH</a>
    </p>
    
</div>

 </div>
 </div>
 <!-- end dashboard inner -->
 </div>
 </div>
 </div>
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