<div class="container my-5">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
        <!-- Item -->
        <?php foreach($videos as $video) :?>
            <div class="col">
                <div class="card rounded-0">
                    <img src="https://img.youtube.com/vi/<?= $video['yt_id_video'] ?>/maxresdefault.jpg" class="card-img-top rounded-0">
                    <div class="card-body">
                        <h5 class="card-title"><?= $video['judul_video'] ?></h5>
                        <a href="<?= base_url('video/player/') . $video['yt_id_video'] ?>" class="text-muted card-text stretched-link text-decoration-none">
                            <small><?= $video['mata_pelajaran'] ?></small>
                        </a>    
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>