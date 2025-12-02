<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Pendaftaran Sekolah') ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />

    <style>
        html {
            scroll-padding-top: 50px;
        }
    </style>

</head>

<body>

    <?= $this->include('front-end/layouts/navbar') ?>
    <?= $this->include('front-end/layouts/header') ?>


    <?= $this->renderSection('content') ?>


    <?= $this->include('front-end/layouts/footer') ?>

    <script>
        const navLinks = document.querySelectorAll(".nav-link");
        const navCollapse = document.querySelector(".navbar-collapse");

        navLinks.forEach((link) => {
            link.addEventListener("click", () => {
                navCollapse.classList.remove("show"); // menutup navbar
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>

</html>