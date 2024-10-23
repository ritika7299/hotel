<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Admin Registration</title>
    <!-- Site favicon -->
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
    <!-- header -->
    <div class="login-header box-shadow"></div>
    <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row justify-content-center">
                <!-- signup form area -->
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-info">Registration</h2>
                    </div>
                    <!-- Register form -->
                    <?php if (session()->getFlashdata('success')): ?>
                        <div id="success-message" class="alert alert-success">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>
                    <?php if (isset($validation)): ?>
                        <div id="error-message" class="alert alert-danger">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?php echo site_url('admin/create'); ?>" id="registerForm" method="POST">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                    required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="email" placeholder="Email..." name="email"
                                    required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" class="form-control password" id="password" name="password"
                                    placeholder="Password..." required />
                                <div class="input-group-append custom mr-2">
                                    <span class="input-group-text">
                                        <i class="fa fa-eye togglePassword" id="togglePassword1"
                                            onclick="togglePassword('password', 'togglePassword1')"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="password" class="form-control password" id="cpass" name="cpass"
                                    placeholder="Confirm password..." required />
                                <div class="input-group-append custom mr-2">
                                    <span class="input-group-text">
                                        <i class="fa fa-eye togglePassword" id="togglePassword2"
                                            onclick="togglePassword('cpass', 'togglePassword2')"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <button type="submit" class="btn btn-info btn-lg btn-block">Submit</button>
                                </div>
                                <div class="input-group mb-0 mt-2">
                                    <a class="btn btn-lg btn-block" href="<?php echo site_url('admin/'); ?>"><span
                                            class="text-info">I already have an account?</span><span
                                            class="text-primary"><b> Login</b></span></a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /register form -->
                </div>
                <!-- /signup form area -->
            </div>
        </div>
    </div>
    <!-- this js created by ritika -->
    <script src="<?php echo site_url(); ?>public/backend/vendors/scripts/demo.js"></script>
    <!-- pre scripts files -->
    <script src="<?php echo site_url(); ?>public/backend/vendors/scripts/core.js"></script>
    <script src="<?php echo site_url(); ?>public/backend/vendors/scripts/script.min.js"></script>
    <script src="<?php echo site_url(); ?>public/backend/vendors/scripts/process.js"></script>
    <script src="<?php echo site_url(); ?>public/backend/vendors/scripts/layout-settings.js"></script>
    <script src="<?php echo site_url(); ?>public/backend/src/plugins/jquery-steps/jquery.steps.js"></script>
    <script src="<?php echo site_url(); ?>public/backend/vendors/scripts/steps-setting.js"></script>
    <script src="<?php echo site_url(); ?>public/backend/vendors/scripts/validation.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>