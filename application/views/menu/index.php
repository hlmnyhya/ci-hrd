<script>
function deleteConfirm(url){
	$('#btn-delete').attr('href', url);
	$('#deleteModal').modal();
}
</script>

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
            <!-- alert error add data -->
            <?= $this->session->flashdata('message_error_addmenu'); ?>
            <!-- alert success add data -->
            <?= $this->session->flashdata('message_success_addmenu'); ?>
            <!-- alert delete data -->
            <?= $this->session->flashdata('message_delete_menu'); ?>
            <!-- alert success edit data -->
            <?= $this->session->flashdata('message_success_editmenu'); ?>
            <!-- alert error edit data -->
            <?= $this->session->flashdata('message_error_editmenu'); ?>
            <!-- btn add new menu -->
            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal"><i class="fa fa-plus"></i> Tambah Menu</a>
            <!-- table -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $i = 1; ?>
                    <?php foreach($menu as $m) : ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $m['menu']; ?></td>
                        <td>
                            <a class="btn btn-success" href="<?= site_url('menu/menu/editMenu/'.$m['id']); ?>"><i class="fa fa-edit"></i></a>
                            <a class="btn btn-danger" href="#!" onclick="deleteConfirm('<?php echo site_url('menu/menu/deleteMenu/'.$m['id']) ?>')"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal add new menu-->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <!-- form -->
      <form action="<?= site_url('menu/addMenu'); ?>" method="post">
        <div class="modal-body">
            <div class="form-group">
                <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- modal delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Deleted data will not be restored.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
      </div>
    </div>
  </div>
</div>