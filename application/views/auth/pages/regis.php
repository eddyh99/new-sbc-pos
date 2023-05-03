<div class="auth">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 d-none d-lg-grid"></div>
            <div class="col-sm-10 col-md-8 col-lg-6 auth-rigth m-auto">
                <div class="col-12 form-bg">
                    <div class="header">
                        <img src="<?= base_url() ?>assets/images/logo.png" alt="<?= NAMETITLE ?>" class="img-logo">
                        <h2>Daftar Akun</h2>
                    </div>
                    <div class="form-auth">
                        <form action="" class="col-12">
                            <div class="col-12 mb-4">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <span>
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="email" class="form-control" id="email" placeholder="Type here" required>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <label for="password" class="form-label">Kata Sandi</label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <span>
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </div>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="*****************" required>
                                    <div class="input-group-text">
                                        <span>
                                            <i class="far fa-eye-slash" id="togglePassword" style="cursor: pointer" toggle="#password"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="password" class="form-label">Ulang Kata Sandi</label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <span>
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </div>
                                    <input type="password" name="password" class="form-control" id="password1" placeholder="*****************" required>
                                    <div class="input-group-text">
                                        <span>
                                            <i class="far fa-eye-slash" id="togglePassword1" style="cursor: pointer" toggle="#password1"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="cekregis">
                                    <label class="form-check-label link-form text-decoration-none" for="cekregis">
                                        Dengan mendaftar, saya menyatakan telah membaca dan menyetujui Ketentuan Layanan & Kebijakan SBC
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 d-grid gap-2 mb-2">
                                <button class="btn btn-auth">Daftar <i class="fa fa-arrow-right"></i></button>
                            </div>
                            <div class="col-12 text-center mb-5">
                                <span class="text-normal">Sudah punya akun ? <a href="<?= base_url() ?>auth/index" class="link-form">Masuk</a></span>
                            </div>
                        </form>
                    </div>

                    <div class="col-12 mt-auto footer-auth">
                        <a href="<?= base_url() ?>" class="link">Privacy Policy</a>
                        <a href="<?= base_url() ?>" class="link">Terms and Condition</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>