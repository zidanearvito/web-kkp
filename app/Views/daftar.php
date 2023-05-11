<?= $this->extend('layout/PageLayout') ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row m-5">
        <div class="offset-md-2 col-md-8 col-sm-12 border">

            <?php if (isset($validation)): ?>
                <div class="validation_errors">
                <?= $validation->listErrors() ?>
                </div>
            <?php endif ?>

            <form action="/registrasi/store" method="post" class="p-2">
                <div class="mb-3">
                    <label for="" class="form-label">NIS</label>
                    <input type="number" class="form-control" name="nis" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama_siswa" required>
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Umur</label>
                    <input type="text" class="form-control" name="umur" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Agama</label>
                    <input type="text" class="form-control" name="agama" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Kelas</label>
                    <input type="text" class="form-control" name="kelas" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Hobi</label>
                    <input type="text" class="form-control" name="hobi" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tinggi Badan</label>
                    <input type="number" class="form-control" name="tinggi_badan" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Berat Badan</label>
                    <input type="number" class="form-control" name="berat_badan" required>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Alasan Basket</label><br>
                    <textarea name="alasan_basket" id="alasan_basket" required style="resize: vertical; width: 100%; min-height: 100px;"></textarea>
                </div>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
    </div>
</div>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    <?php if (session()->getFlashdata('success')): ?>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '<?= session()->getFlashdata('success') ?>',
        });
    <?php endif ?>
</script>
<?= $this->endSection() ?>