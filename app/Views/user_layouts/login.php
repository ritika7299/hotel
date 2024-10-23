<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Helpdesk|Login</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180"
        href="<?php echo site_url(); ?>public/backend/vendors/images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo site_url(); ?>public/backend/vendors/images/favicon-32x32.png" />
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
    <!-- sign-in wrap -->

    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <!-- container -->
        <div class="container">
            <div class="row justify-content-center">

                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-primary">User Login</h2>
                    </div>
                    <!-- success and error message -->
                    <?php if (session()->getFlashdata('error')): ?>
                        <div id="error-message" class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>
                    <!-- Login form  -->
                    <form action="<?php echo site_url('auth/authlogin'); ?>" method="POST">
                        <div class="input-group custom">
                            <input type="email" class="form-control form-control-lg" placeholder="Enter your email..."
                                id="email" name="email" />
                            <?php if (session('errors.email')): ?>
                                <div class="text-danger" id="errorMsgEmail"><?= session('errors.email') ?></div>
                            <?php endif; ?>
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="fa
                                fa-envelope" id=""></i></span>
                            </div>
                        </div>
                        <div class="input-group custom">
                            <input type="password" class="form-control form-control-lg"
                                placeholder="Enter your password..." id="password" name="password" />
                            <div class="input-group-append custom">
                                <span class="input-group-text"><i class="fa fa-eye-slash" id="togglePassword"
                                        onclick="togglePassword('password', 'togglePassword')"></i></span>
                            </div>
                        </div>
                        <div class="row pb-30">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                    <label class="custom-control-label" for="customCheck1">Remember</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="forgot-password">
                                    <a href="<?php echo site_url('auth/forgotPassword'); ?>"><span
                                            class="hover-text-danger">Forgot
                                            Password?</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <button class="btn btn-primary btn-lg btn-block">Submit</button>
                                </div>
                                <div class="input-group mb-0 mt-2">
                                    <a class="btn btn-lg btn-block" href="<?php echo site_url('auth/'); ?>"><span
                                            class="text-info">I don't
                                            have an account?</span>
                                        <span class="text-primary"><b>
                                                Registration</b></span></a>
                                </div>
                            </div>
                        </div>

                    </form>
                    <!-- Login form  -->
                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
    </div>
    <!-- js -->
    <script src="<?php echo site_url(); ?>public/backend/vendors/scripts/demo.js"></script>
    <script src="<?php echo site_url(); ?>public/backend/vendors/scripts/core.js"></script>
    <script src="<?php echo site_url(); ?>public/backend/vendors/scripts/script.min.js"></script>
    <script src="<?php echo site_url(); ?>public/backend/vendors/scripts/process.js"></script>
    <script src="<?php echo site_url(); ?>public/backend/vendors/scripts/layout-settings.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
</body>

</html>