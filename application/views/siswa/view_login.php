<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-5">
            <!-- Form Login -->
            <div class="card shadow-lg my-5">
                <div class="card-header"><Strong>Login</Strong></div>
                <div class="card-body">
                    <form class="user" method="POST" action="<?= base_url('login/login_input') ?>">
                        <!-- Email -->
                        <div class="form-group mb-3">
                            <input type="email" class="form-control form-control-user" id="email" aria-describedby="email" placeholder="Email" name="email" required>
                        </div>
                        <!-- Password -->
                        <div class="form-group mb-3">
                            <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password" required>
                        </div>
                        <button type="submit" name="login" class="btn btn-primary btn-user btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
