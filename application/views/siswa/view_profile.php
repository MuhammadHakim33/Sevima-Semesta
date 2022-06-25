<div class="container my-4">
    <div class="row">
        <!-- Button Kembali -->
        <div class="col-12 mb-4">
            <a class="btn btn-outline-secondary rounded-0" href="<?= base_url() ?>" role="button">Kembali</a>
        </div>
        <!-- Form -->
        <div class="col">
            <div class="card rounded-0">
                <h6 class="card-header">Profile</h6>
                <div class="card-body">
                    <form action="<?= base_url('profile/ubah') ?>" method="POST" class="item">
                        <input type="text" class="form-control rounded-0" name="id" id="id" value="<?= $siswa['id_siswa'] ?>" hidden>
                        <div class="mb-3">
                            <label for="nisn_siswa" class="form-label">NISN</label>
                            <input type="text" class="form-control rounded-0" name="nisn_siswa" id="nisn_siswa" value="<?= $siswa['nisn_siswa'] ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="nama_siswa" class="form-label">Nama</label>
                            <input type="text" class="form-control rounded-0" name="nama_siswa" id="nama_siswa" value="<?= $siswa['nama_siswa'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="email_siswa" class="form-label">Email</label>
                            <input type="email" class="form-control rounded-0" name="email_siswa" id="email_siswa" value="<?= $siswa['email_siswa'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="kelas" class="form-label">Kelas</label>
                            <select class="form-select" name="kelas" aria-label="Default select example">
                                <option selected><?= $siswa['kelas'] ?></option>
                                <!-- Looping Kelas -->
                                <?php foreach($kelas as $data): ?>
                                    <?php if($data['id_kelas'] !== $siswa['id_kelas']): ?>
                                        <option value="<?= $data['id_kelas'] ?>"><?= $data['kelas'] ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary rounded-0">Ubah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>