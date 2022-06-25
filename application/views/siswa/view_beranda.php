<div class="container my-5">
    <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-4 g-4">
        <?php foreach($pelajaran as $data): ?>
            <div class="col">
                <div class="card rounded-0 card-pelajaran bg-light" style="height: 10rem;">
                    <a class="card-body stretched-link text-reset text-decoration-none" href="<?= base_url('video/feed/').$data['id_pelajaran'] ?>">
                        <h4 class="card-title"><?= $data['mata_pelajaran'] ?></h4>
                        <!-- <p class="card-subtitle mb-2 text-muted">10 Video</p> -->
                    </a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>