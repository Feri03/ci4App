<?= $this->extend('layout/template') ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Komik</h2>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                <img src="/img/<?= $komik['sampul']; ?>" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $komik['judul']; ?></h5>
                    <p class="card-text"><b>Penulis : </b><?= $komik['penulis']; ?></p>
                    <p class="card-text"><small class="text-muted"><b>Penerbit : </b><?= $komik['penerbit']; ?></small></p>

                    <a href="/komik/edit/<?= $komik['slug']; ?>" class="btn btn-warning">Edit</a>
                    
                    <?= csrf_field(); ?>
                    <form action="/komik/<?= $komik['id']; ?>" method="post" class="d-inline">
                    <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Delate</button>
                    </form>
                    <br>
                    <a href="<?= base_url('/komik'); ?>" class="btn btn-info btn-sm mt-1">Kembali ke daftar komik</a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>