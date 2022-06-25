<div class="container-md container-fluid px-0 px-md-2 my-md-5">
    <!-- Video -->
    <div class="container p-0">
        <div class="ratio ratio-16x9 mb-4">
            <iframe src="https://www.youtube.com/embed/<?= $video['yt_id_video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <!-- Desk & judul -->
    <div class="container px-md-0">
        <div class="card rounded-0 bg-light">
            <div class="card-body">
                <h4 class="card-title"><?= $video['judul_video'] ?></h4>
                <p class="card-text"><?= $video['deskripsi_video'] ?></p>
            </div>
        </div>
    </div>
    <!-- Button Kembali -->
    <div class="container py-3 px-sm-0">
        <a class="btn btn-outline-secondary rounded-0" href="<?= base_url('video/feed/').$video['id_pelajaran'] ?>" role="button">Kembali</a>
    </div>
</div>

