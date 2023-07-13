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
            <!-- flashdata roleaccess -->
            <?= $this->session->flashdata('message'); ?>

            <!-- cek role -->
            <h5>Role : <?= $role['role']; ?></h5>

            <!-- table -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Access</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $i = 1; ?>
                    <?php foreach($menu as $m) : ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $m['menu']; ?></td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?>
                                data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                            </div>
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