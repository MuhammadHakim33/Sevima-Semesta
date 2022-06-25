<div class="container">
    <!-- Button Kembali -->
    <div class="container py-4 px-sm-0">
        <a class="btn btn-outline-secondary rounded-0" href="<?= base_url() ?>" role="button">Kembali</a>
    </div>
    <!-- List Video -->
    <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-4 g-4">
        <!-- Jika $videos Ada Isi, Looping -->
        <?php if(!empty($videos)): ?>
            <!-- Looping $Videos -->
            <?php foreach($videos as $video): ?>
                <div class="col">
                    <a class="card rounded-0 text-reset text-decoration-none" href="<?= base_url('video/player/') . $video['yt_id_video'] ?>">
                        <!-- Thumbnail -->
                        <img src="https://img.youtube.com/vi/<?= $video['yt_id_video'] ?>/maxresdefault.jpg" class="card-img-top rounded-0">
                        <!-- judul -->
                        <div class="card-body ">
                            <h5 class="card-title"><?= $video['judul_video'] ?></h5>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        <!-- Jika $video Kosong, Tampil Alert -->
        <?php else: ?>
            <div class="col">
                <div class="alert alert-warning rounded-0" role="alert">
                    Belum Ada Video
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>