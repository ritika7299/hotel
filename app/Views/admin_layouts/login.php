<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Admin- Login</title>

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
    <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>public/backend/vendors/styles/demo.css" />
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
        <!-- sign-in container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <!-- title -->
                        <div class="login-title">
                            <h2 class="text-center" style="color: #CB80AB;">Admin</h2>
                        </div>
                        <!-- success and error message -->
                        <?php if (session()->getFlashdata('error')): ?>
                            <div id="error-message" class="alert alert-danger">
                                <?= session()->getFlashdata('error') ?>
                            </div>
                        <?php endif; ?>
                        <!-- admin login form  -->
                        <form action="<?php echo site_url('admin/loginAuth'); ?>" method="POST">
                            <!-- email input -->
                            <div class="input-group custom">
                                <input type="text" class="form-control form-control-lg" id="email" name="email"
                                    placeholder="Email" />
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>
                            <!-- password input -->
                            <div class="input-group custom">
                                <input type="password" class="form-control form-control-lg" id="password"
                                    name="password" placeholder="Password" />
                                <div class="input-group-append custom">
                                    <span class="input-group-text">
                                        <i class="toggle-icon fa fa-eye" aria-hidden="true" id="togglePassword"
                                            onclick="togglePassword('password', 'togglePassword')"></i></span>
                                </div>
                            </div>
                            <!-- captcha  -->

                            <!-- login and register buttons  -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button style="background-color: #CB80AB;color: white; border: none;"
                                            class=" btn btn-lg btn-block">Login</button>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="input-group mt-2">
                                        <a href="<?php echo site_url('admin/register') ?>"
                                            class=" btn btn-lg btn-block btn-info">
                                            Register</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- /admin login form  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /sign-in container -->
    </div>
    <!-- sign-in wrap -->
    <!-- this js created by ritika -->
    <script src="<?php echo site_url(); ?>public/backend/vendors/scripts/demo.js"></script>
    <!-- pre scripts files -->
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