<div class="container my-5">
    <div class="card">
        <div class="card-header">
            Profile
        </div>
        <div class="card-body">
            <div class="item">
                <!-- <img src="https://i.pinimg.com/736x/f2/ae/8e/f2ae8e2cde7e371b71e45924513bfe4a.jpg" class="img-thumbnail border-0 rounded-circle" alt="..." width="150"> -->
            </div>
            <form action="<?= base_url('profile/ubah') ?>" method="POST" class="item">
                <div class="mb-3">
                    <input type="text" class="form-control" name="id" id="id" value="<?= $siswa['id_siswa'] ?>" hidden>
                </div>
                <div class="mb-3">
                    <label for="nisn_siswa" class="form-label">NISN</label>
                    <input type="text" class="form-control" name="nisn_siswa" id="nisn_siswa" value="<?= $siswa['nisn_siswa'] ?>">
                </div>
                <div class="mb-3">
                    <label for="nama_siswa" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama_siswa" id="nama_siswa" value="<?= $siswa['nama_siswa'] ?>">
                </div>
                <div class="mb-3">
                    <label for="email_siswa" class="form-label">Email</label>
                    <input type="email" class="form-control" name="email_siswa" id="email_siswa" value="<?= $siswa['email_siswa'] ?>">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>