<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>
<div class="mt-3">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                        </div>

                        <div class="p-4">
                            <a href="/store" type="button" class="btn btn-primary mb-3">Tambah</a>
                            <!-- <table class="table table-striped"> -->
                            <!-- <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">deskripsi</th>
                                        <th scope="col">Created_At</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead> -->
                            <!-- <tbody> -->


                            <?php foreach ($ini as $p) : ?>
                                <div class="card card-warning">
                                    <div class="card-header">
                                        <h3 class="card-title"></h3>
                                    </div>
                                    <table class="table table-sm">
                                        <tr>
                                            <td>Title Of Announcement : <?= $p['judul'] ?></td>
                                            <td align="right"><?= $p['created_at'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Description :
                                                <?= $p['deskripsi'] ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <a class="btn btn-warning me-3" href="/edit/<?= $p['id'] ?>">Edit</a>
                                                    <form action="/delete/<?= $p['id'] ?>" method="post" Style="Margin-left: 5px">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </div>
                            <?php endforeach ?>

                            <!-- </tbody> -->
                            <!-- </table> -->
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection('content'); ?>
