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
            <!-- table -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Role</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  $i = 1; ?>
                    <?php foreach($role as $r) : ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $r['role']; ?></td>
                        <td>
                            <a class="btn btn-warning" href="<?= base_url('menu/admin/roleAccess/') . $r['id']; ?>"><i class ="fa fa-key"></i></a>
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