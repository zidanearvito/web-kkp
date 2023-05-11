<?= $this->extend('layout/PageLayout') ?>

<?= $this->section('content') ?>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h1 class="fw-bold mb-3">Selamat Datang di Ekskul Basket</h1>
                <p class="lead mb-3">Kami mengundang Anda untuk bergabung dengan ekskul basket dan mengembangkan bakat
                    serta kemampuan Anda dalam bermain bola basket.</p>
                <a href="#" class="btn btn-dark">Daftar Sekarang</a>
            </div>
            <div class="col-md-6">
                <!-- <img src="https://via.placeholder.com/500x500.png?text=Logo+Ekskul+Basket" alt="Ekskul Basket"
                     class="img-fluid"> -->
                <img src="https://m.media-amazon.com/images/I/61EoCbrENXL._AC_UF894,1000_QL80_.jpg" alt="Ekskul Basket"
                     class="img-fluid">     
            </div>
        </div>
    </div>
<?= $this->endSection() ?>