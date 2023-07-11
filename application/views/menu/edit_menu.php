
<!-- Begin Page Content -->
<div class="midde_cont">
 <div class="container-fluid">
     <div class="row column_title">
         <div class="col-md-12">
             <div class="page_title">
                 <h2><?= $title?></h2>
             </div>
         </div>
     </div>
<div class="container-fluid">

    <!-- table row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="card-body">
                <!-- alert error edit data -->
                <?= $this->session->flashdata('message_error_editmenu'); ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $menu->id ?>" />
                    <!-- edit title -->
                	<div class="form-group">
                		<label for="menu">Name menu</label>
                		<input class="form-control <?php echo form_error('menu') ? 'is-invalid':'' ?>"
                		 type="text" name="menu" placeholder="Name menu" value="<?php echo $menu->menu ?>" />
                		<div class="invalid-feedback">
                			<?php echo form_error('menu') ?>
                		</div>
                	</div>
                    <!-- btn -->
                	<input class="btn btn-success" type="submit" name="btn" value="Update" />
                </form>
			</div>
        </div>
    </div>
    
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->