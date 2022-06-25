<div class="container my-5">
    <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-4 g-4">
        <?php if(!empty($videos)): ?>
            <?php foreach($videos as $video): ?>
                <div class="col">
                    <a class="card rounded-0 text-reset text-decoration-none" href="<?= base_url('video/player/') . $video['yt_id_video'] ?>">
                        <img src="https://img.youtube.com/vi/<?= $video['yt_id_video'] ?>/maxresdefault.jpg" class="card-img-top rounded-0">
                        <div class="card-body ">
                            <h5 class="card-title"><?= $video['judul_video'] ?></h5>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col">
                <div class="alert alert-warning rounded-0" role="alert">
                    Belum Ada Video - <a href="<?= base_url()?>" class="alert-link">Kembali</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>