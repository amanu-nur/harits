<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="img/favicon.png" type="image/png" />
  <title>MeetMe Personal</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.css'); ?>" />
  <link rel="stylesheet" href="<?= base_url('/assets/vendors/linericon/style.css'); ?>" />
  <link rel="stylesheet" href="<?= base_url('/assets/css/font-awesome.min.css'); ?>" />
  <link rel="stylesheet" href="<?= base_url('/assets/vendors/owl-carousel/owl.carousel.min.css'); ?>" />
  <link rel="stylesheet" href="<?= base_url('/assets/vendors/lightbox/simpleLightbox.css'); ?>" />
  <link rel="stylesheet" href="<?= base_url('/assets/vendors/nice-select/css/nice-select.css'); ?>" />
  <link rel="stylesheet" href="<?= base_url('/assets/vendors/animate-css/animate.css'); ?>" />
  <link rel="stylesheet" href="<?= base_url('/assets/vendors/popup/magnific-popup.css'); ?>" />
  <link rel="stylesheet" href="<?= base_url('/assets/vendors/flaticon/flaticon.css'); ?>" />
  <!-- main css -->
  <link rel="stylesheet" href="<?= base_url('/assets/css/style.css'); ?>" />
  <link rel="stylesheet" href="<?= base_url('/assets/css/responsive.css'); ?>" />
  <style>
  * {
    scroll-behavior: smooth;
  }
  </style>
</head>

<body>
  <?= $this->include('layout/navbar'); ?>

  <?= $this->renderSection('content'); ?>

  <?= $this->include('layout/footer'); ?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?= base_url('/assets/js/jquery-3.3.1.min.js'); ?>"></script>
  <script src="<?= base_url('/assets/js/popper.js'); ?>"></script>
  <script src="<?= base_url('/assets/js/bootstrap.min.js'); ?>"></script>
  <script src="<?= base_url('/assets/js/stellar.js'); ?>"></script>
  <script src="<?= base_url('/assets/vendors/lightbox/simpleLightbox.min.js'); ?>"></script>
  <script src="<?= base_url('/assets/vendors/nice-select/js/jquery.nice-select.min.js'); ?>"></script>
  <script src="<?= base_url('/assets/vendors/isotope/imagesloaded.pkgd.min.js'); ?>"></script>
  <script src="<?= base_url('/assets/vendors/isotope/isotope.pkgd.min.js'); ?>"></script>
  <script src="<?= base_url('/assets/vendors/owl-carousel/owl.carousel.min.js'); ?>"></script>
  <script src="<?= base_url('/assets/vendors/popup/jquery.magnific-popup.min.js'); ?>"></script>
  <script src="<?= base_url('/assets/js/jquery.ajaxchimp.min.js'); ?>"></script>
  <script src="<?= base_url('/assets/vendors/counter-up/jquery.waypoints.min.js'); ?>"></script>
  <script src="<?= base_url('/assets/vendors/counter-up/jquery.counterup.min.js'); ?>"></script>
  <script src="<?= base_url('/assets/js/mail-script.js'); ?>"></script>
  <script src="<?= base_url('/assets/js/theme.js'); ?>"></script>
</body>

</html>