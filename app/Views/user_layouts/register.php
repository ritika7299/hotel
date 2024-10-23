<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Helpdesk|Registration</title>
    <!-- Site favicon -->
    <!-- <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo site_url('public/backend/vendors/images/apple-touch-icon.png'); ?>" /> -->
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url(''); ?>" />
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo site_url(); ?>public/backend/vendors/images/favicon-16x16.png" />
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>public/backend/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css"
        href="<?php echo site_url(); ?>public/backend/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css"
        href="<?php echo site_url(); ?>public/backend/src/plugins/jquery-steps/jquery.steps.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>public/backend/vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != "dataLayer" ? "&l=" + l : "";
            j.async = true;
            j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
</head>

<body class="login-page">
    <!-- header start -->
    <div class="login-header box-shadow">
    </div>
    <!-- /header end-->
    <!-- container start -->
    <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <!-- registration form area -->
                <div class="login-box bg-white box-shadow border-radius-10">
                    <!-- title start-->
                    <div class="login-title">
                        <h2 class="text-center text-primary">User Registration</h2>
                    </div>
                    <!-- /title end -->
                    <!-- session -->
                    <?php if (session('success')): ?>
                        <div class="successMessage alert alert-success" id="successMsg"><?= session('success') ?></div>
                    <?php endif; ?>
                    <!-- /session -->
                    <!-- registration form start -->
                    <form action="<?php echo site_url('auth/store'); ?>" id="registerForm" method="POST">
                        <!-- name input -->
                        <div class="form-group row">
                            <div class="col-sm-12 d-flex">
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                    value="" />
                                <span class="input-group-append custom mr-2">
                                    <span class="input-group-text">
                                        <i class="icon-copy fa fa-user" id=""></i>
                                    </span>
                                </span>
                            </div>
                            <span class="msg ml-3">
                                <?php if (session('errors.name')): ?>
                                    <span class="text-danger" id="errorMsgName">
                                        <?= session('errors.name') ?>
                                    </span>
                                <?php endif; ?>
                            </span>
                        </div>
                        <!-- email input -->
                        <div class="form-group row">
                            <div class="col-sm-12 d-flex">
                                <input type="email" class="form-control" id="email" placeholder="Email..." name="email"
                                    value="" />
                                <span class="input-group-append custom mr-2">
                                    <span class="input-group-text">
                                        <i class="fa fa-envelope" id=""></i></span>
                                </span>
                            </div>
                            <span class="msg ml-3">
                                <?php if (session('errors.email')): ?>
                                    <span class="text-danger" id="errorMsgEmail"><?= session('errors.email') ?></span>
                                <?php endif; ?>
                            </span>
                        </div>
                        <!-- password input -->
                        <div class="form-group row">
                            <div class="col-sm-12 d-flex">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password..." value="" />
                                <div class="input-group-append custom mr-2">
                                    <span class="input-group-text">
                                        <i class="fa fa-eye-slash" id="togglePassword1"
                                            onclick="togglePassword('password', 'togglePassword1')"></i>
                                    </span>
                                </div>
                            </div>
                            <span class="msg ml-3">
                                <?php if (session('errors.password')): ?>
                                    <span class="text-danger" id="errorMsgPassword"><?= session('errors.password') ?>
                                    </span>
                                <?php endif; ?>
                            </span>
                        </div>
                        <!-- confirm password input -->
                        <div class="form-group row">
                            <div class="col-sm-12 d-flex">
                                <input type="password" class="form-control" id="cpass" name="cpass"
                                    placeholder="Confirm password..." value="" />
                                <div class="input-group-append custom mr-2">
                                    <span class="input-group-text"><i class="fa fa-eye-slash" id="togglePassword2"
                                            onclick="togglePassword('cpass', 'togglePassword2')"></i></span>
                                </div>

                            </div>
                            <span class="msg ml-3"><?php if (session('errors.cpass')): ?>
                                    <div class="text-danger" id="errorMsgCpass"><?= session('errors.cpass') ?></div>
                                <?php endif; ?>
                            </span>
                        </div>
                        <!-- submit button start -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <button class="btn btn-primary btn-lg btn-block" href="#">Submit</button>
                                </div>
                                <div class="input-group mb-0 mt-2">
                                    <a class="btn btn-lg btn-block" href="<?php echo site_url('auth/login'); ?>">
                                        <span class="text-info">I already
                                            have an account?</span>
                                        <span class="text-primary"><b>
                                                Login</b></span></a>
                                </div>
                            </div>
                        </div>
                        <!-- submit button end -->
                    </form>
                    <!-- /registration form end -->
                </div>
                <!-- /registration form area -->
            </div>
        </div>
    </div>
    <!-- /container end -->
</body>
<!-- js -->
<script src="<?php echo site_url(); ?>public/backend/vendors/scripts/demo.js"></script>
<!-- pre-js -->
<script src="<?php echo site_url(); ?>public/backend/vendors/scripts/core.js"></script>
<script src="<?php echo site_url(); ?>public/backend/vendors/scripts/script.min.js"></script>
<script src="<?php echo site_url(); ?>public/backend/vendors/scripts/process.js"></script>
<script src="<?php echo site_url(); ?>public/backend/vendors/scripts/layout-settings.js"></script>
<script src="<?php echo site_url(); ?>public/backend/src/plugins/jquery-steps/jquery.steps.js"></script>
<script src="<?php echo site_url(); ?>public/backend/vendors/scripts/steps-setting.js"></script>
<script src="<?php echo site_url(); ?>public/backend/vendors/scripts/validation.js"></script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
        style="display: none; visibility: hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

</html>