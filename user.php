<?php
   include('koneksi.php');
   include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Mauverse Shop - My Profile</title>
  <!-- Favicon-->
  <link href="image/logom.svg" rel="shorcut icon">
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard" />
  <!--  Social tags      -->
  <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, material dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, free dashboard, free admin dashboard, free bootstrap 4 admin dashboard">
  <meta name="description" content="Material Dashboard is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Material Dashboard by Creative Tim">
  <meta itemprop="description" content="Material Dashboard is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
  <meta itemprop="image" content="../../../s3.amazonaws.com/creativetim_bucket/products/50/opt_md_thumbnail.jpg">
  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Material Dashboard by Creative Tim">
  <meta name="twitter:description" content="Material Dashboard is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/50/opt_md_thumbnail.jpg">
  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Material Dashboard by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="dashboard.html" />
  <meta property="og:image" content="../../../s3.amazonaws.com/creativetim_bucket/products/50/opt_md_thumbnail.jpg" />
  <meta property="og:description" content="Material Dashboard is a Free Material Bootstrap Admin with a fresh, new design inspired by Google's Material Design." />
  <meta property="og:site_name" content="Creative Tim" />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="css/setting.css" rel="stylesheet"/>
  <link href="css/setting2.css" rel="stylesheet"/>
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="css/demo.css" rel="stylesheet" />
  <style type="text/css">div.image {max-width: 256px;max-height: 256px;background-image: url(data:image/svg+xml;base64,PHN2ZyBpZD0iRmxhdCIgaGVpZ2h0PSI1MTIiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiB3aWR0aD0iNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im00NjQgNDAwaC0zMjBhMzIuMDM2IDMyLjAzNiAwIDAgMSAtMzItMzJ2LTE2YTMyLjAzNiAzMi4wMzYgMCAwIDEgMzItMzJoOGE4IDggMCAwIDEgMCAxNmgtOGExNi4wMTkgMTYuMDE5IDAgMCAwIC0xNiAxNnYxNmExNi4wMTkgMTYuMDE5IDAgMCAwIDE2IDE2aDMyMGE4IDggMCAwIDEgMCAxNnoiIGZpbGw9IiNkMGQyZDQiLz48Y2lyY2xlIGN4PSIxNzYiIGN5PSI0MTYiIGZpbGw9IiM3ZTg1ODkiIHI9IjMyIi8+PGNpcmNsZSBjeD0iNDAwIiBjeT0iNDE2IiBmaWxsPSIjN2U4NTg5IiByPSIzMiIvPjxjaXJjbGUgY3g9IjE3NiIgY3k9IjQxNiIgZmlsbD0iIzQxNDY0OSIgcj0iOCIvPjxjaXJjbGUgY3g9IjQwMCIgY3k9IjQxNiIgZmlsbD0iIzQxNDY0OSIgcj0iOCIvPjxwYXRoIGQ9Im00OTQuMjA3IDEzMC45NTNhOCA4IDAgMCAwIC02LjIwNy0yLjk1M2gtMzgyLjg0MWwtMTcuMzcyLTczLjgzM2E4IDggMCAwIDAgLTcuNzg3LTYuMTY3aC01NmE4IDggMCAwIDAgMCAxNmg0OS42NjRsNjIuNTQ5IDI2NS44MzNhOCA4IDAgMCAwIDcuNzg3IDYuMTY3aDMwNGE4IDggMCAwIDAgNy44MzItNi4zNjhsNDAtMTkyYTggOCAwIDAgMCAtMS42MjUtNi42Nzl6bS0xNTAuNTMzIDEzLjA0N2g2My4yNjRsLTQgMzJoLTYwLjZ6bS05NS4zNDggMCAxLjMzNCAzMmgtNjAuNmwtNC0zMnptLTEzOS40IDBoNjAuMDEzbDQgMzJoLTU2LjQ4NXptMTEuMjk0IDQ4aDU0LjcxOWw0IDMyaC01MS4xOXptMTEuMjk0IDQ4aDQ5LjQyNWw0IDMyaC00NS45em0xOC44MjMgODAtNy41MjktMzJoNDQuMTMxbDQgMzJ6bTQwLjcyNi0xMjhoNTkuMjY0bDEuMzM0IDMyaC01Ni42em02IDQ4aDU1LjI2NGwxLjMzNCAzMmgtNTIuNnptMTAgODAtNC0zMmg1MS4yNjRsMS4zMzQgMzJ6bTExMy4yNjQgMGgtNDguNjUzbC0xLjMzNC0zMmg1MS4zMnptMi00OGgtNTIuNjUzbC0xLjMzNC0zMmg1NS4zMnptMi00OGgtNTYuNjUzbC0xLjMzNC0zMmg1OS4zMnptMi00OGgtNjAuNjUzbC0xLjMzNC0zMmg2My4zMnptNTguNjEyIDE0NGgtNDguNmwxLjMzNC0zMmg1MS4yNjR6bTYtNDhoLTUyLjZsMS4zMzQtMzJoNTUuMjY0em02LTQ4aC01Ni42bDEuMzM0LTMyaDU5LjI2NHptNDQuNTYxIDk2aC00MC40MzhsNC0zMmg0My4xem0xMC00OGgtNDQuNDM4bDQtMzJoNDcuMXptMTAtNDhoLTQ4LjQzOGw0LTMyaDUxLjF6bTEwLTQ4aC01Mi40MzhsNC0zMmg1NS4xeiIgZmlsbD0iI2QwZDJkNCIvPjwvc3ZnPg==)}</style>
  <style type="text/css">div.image {max-width: 256px;max-height: 256px;background-image: url(data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNTEyIDUxMiIgaGVpZ2h0PSI1MTIiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiB3aWR0aD0iNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yNzIuMDY2IDUxMmgtMzIuMTMzYy0yNS45ODkgMC00Ny4xMzQtMjEuMTQ0LTQ3LjEzNC00Ny4xMzN2LTEwLjg3MWMtMTEuMDQ5LTMuNTMtMjEuNzg0LTcuOTg2LTMyLjA5Ny0xMy4zMjNsLTcuNzA0IDcuNzA0Yy0xOC42NTkgMTguNjgyLTQ4LjU0OCAxOC4xMzQtNjYuNjY1LS4wMDdsLTIyLjcxMS0yMi43MWMtMTguMTQ5LTE4LjEyOS0xOC42NzEtNDguMDA4LjAwNi02Ni42NjVsNy42OTgtNy42OThjLTUuMzM3LTEwLjMxMy05Ljc5Mi0yMS4wNDYtMTMuMzIzLTMyLjA5N2gtMTAuODdjLTI1Ljk4OCAwLTQ3LjEzMy0yMS4xNDQtNDcuMTMzLTQ3LjEzM3YtMzIuMTM0YzAtMjUuOTg5IDIxLjE0NS00Ny4xMzMgNDcuMTM0LTQ3LjEzM2gxMC44N2MzLjUzMS0xMS4wNSA3Ljk4Ni0yMS43ODQgMTMuMzIzLTMyLjA5N2wtNy43MDQtNy43MDNjLTE4LjY2Ni0xOC42NDYtMTguMTUxLTQ4LjUyOC4wMDYtNjYuNjY1bDIyLjcxMy0yMi43MTJjMTguMTU5LTE4LjE4NCA0OC4wNDEtMTguNjM4IDY2LjY2NC4wMDZsNy42OTcgNy42OTdjMTAuMzEzLTUuMzM2IDIxLjA0OC05Ljc5MiAzMi4wOTctMTMuMzIzdi0xMC44N2MwLTI1Ljk4OSAyMS4xNDQtNDcuMTMzIDQ3LjEzNC00Ny4xMzNoMzIuMTMzYzI1Ljk4OSAwIDQ3LjEzMyAyMS4xNDQgNDcuMTMzIDQ3LjEzM3YxMC44NzFjMTEuMDQ5IDMuNTMgMjEuNzg0IDcuOTg2IDMyLjA5NyAxMy4zMjNsNy43MDQtNy43MDRjMTguNjU5LTE4LjY4MiA0OC41NDgtMTguMTM0IDY2LjY2NS4wMDdsMjIuNzExIDIyLjcxYzE4LjE0OSAxOC4xMjkgMTguNjcxIDQ4LjAwOC0uMDA2IDY2LjY2NWwtNy42OTggNy42OThjNS4zMzcgMTAuMzEzIDkuNzkyIDIxLjA0NiAxMy4zMjMgMzIuMDk3aDEwLjg3YzI1Ljk4OSAwIDQ3LjEzNCAyMS4xNDQgNDcuMTM0IDQ3LjEzM3YzMi4xMzRjMCAyNS45ODktMjEuMTQ1IDQ3LjEzMy00Ny4xMzQgNDcuMTMzaC0xMC44N2MtMy41MzEgMTEuMDUtNy45ODYgMjEuNzg0LTEzLjMyMyAzMi4wOTdsNy43MDQgNy43MDRjMTguNjY2IDE4LjY0NiAxOC4xNTEgNDguNTI4LS4wMDYgNjYuNjY1bC0yMi43MTMgMjIuNzEyYy0xOC4xNTkgMTguMTg0LTQ4LjA0MSAxOC42MzgtNjYuNjY0LS4wMDZsLTcuNjk3LTcuNjk3Yy0xMC4zMTMgNS4zMzYtMjEuMDQ4IDkuNzkyLTMyLjA5NyAxMy4zMjN2MTAuODcxYzAgMjUuOTg3LTIxLjE0NCA0Ny4xMzEtNDcuMTM0IDQ3LjEzMXptLTEwNi4zNDktMTAyLjgzYzE0LjMyNyA4LjQ3MyAyOS43NDcgMTQuODc0IDQ1LjgzMSAxOS4wMjUgNi42MjQgMS43MDkgMTEuMjUyIDcuNjgzIDExLjI1MiAxNC41MjR2MjIuMTQ4YzAgOS40NDcgNy42ODcgMTcuMTMzIDE3LjEzNCAxNy4xMzNoMzIuMTMzYzkuNDQ3IDAgMTcuMTM0LTcuNjg2IDE3LjEzNC0xNy4xMzN2LTIyLjE0OGMwLTYuODQxIDQuNjI4LTEyLjgxNSAxMS4yNTItMTQuNTI0IDE2LjA4NC00LjE1MSAzMS41MDQtMTAuNTUyIDQ1LjgzMS0xOS4wMjUgNS44OTUtMy40ODYgMTMuNC0yLjUzOCAxOC4yNDMgMi4zMDVsMTUuNjg4IDE1LjY4OWM2Ljc2NCA2Ljc3MiAxNy42MjYgNi42MTUgMjQuMjI0LjAwN2wyMi43MjctMjIuNzI2YzYuNTgyLTYuNTc0IDYuODAyLTE3LjQzOC4wMDYtMjQuMjI1bC0xNS42OTUtMTUuNjk1Yy00Ljg0Mi00Ljg0Mi01Ljc5LTEyLjM0OC0yLjMwNS0xOC4yNDIgOC40NzMtMTQuMzI2IDE0Ljg3My0yOS43NDYgMTkuMDI0LTQ1LjgzMSAxLjcxLTYuNjI0IDcuNjg0LTExLjI1MSAxNC41MjQtMTEuMjUxaDIyLjE0N2M5LjQ0NyAwIDE3LjEzNC03LjY4NiAxNy4xMzQtMTcuMTMzdi0zMi4xMzRjMC05LjQ0Ny03LjY4Ny0xNy4xMzMtMTcuMTM0LTE3LjEzM2gtMjIuMTQ3Yy02Ljg0MSAwLTEyLjgxNC00LjYyOC0xNC41MjQtMTEuMjUxLTQuMTUxLTE2LjA4NS0xMC41NTItMzEuNTA1LTE5LjAyNC00NS44MzEtMy40ODUtNS44OTQtMi41MzctMTMuNCAyLjMwNS0xOC4yNDJsMTUuNjg5LTE1LjY4OWM2Ljc4Mi02Ljc3NCA2LjYwNS0xNy42MzQuMDA2LTI0LjIyNWwtMjIuNzI1LTIyLjcyNWMtNi41ODctNi41OTYtMTcuNDUxLTYuNzg5LTI0LjIyNS0uMDA2bC0xNS42OTQgMTUuNjk1Yy00Ljg0MiA0Ljg0My0xMi4zNSA1Ljc5MS0xOC4yNDMgMi4zMDUtMTQuMzI3LTguNDczLTI5Ljc0Ny0xNC44NzQtNDUuODMxLTE5LjAyNS02LjYyNC0xLjcwOS0xMS4yNTItNy42ODMtMTEuMjUyLTE0LjUyNHYtMjIuMTVjMC05LjQ0Ny03LjY4Ny0xNy4xMzMtMTcuMTM0LTE3LjEzM2gtMzIuMTMzYy05LjQ0NyAwLTE3LjEzNCA3LjY4Ni0xNy4xMzQgMTcuMTMzdjIyLjE0OGMwIDYuODQxLTQuNjI4IDEyLjgxNS0xMS4yNTIgMTQuNTI0LTE2LjA4NCA0LjE1MS0zMS41MDQgMTAuNTUyLTQ1LjgzMSAxOS4wMjUtNS44OTYgMy40ODUtMTMuNDAxIDIuNTM3LTE4LjI0My0yLjMwNWwtMTUuNjg4LTE1LjY4OWMtNi43NjQtNi43NzItMTcuNjI3LTYuNjE1LTI0LjIyNC0uMDA3bC0yMi43MjcgMjIuNzI2Yy02LjU4MiA2LjU3NC02LjgwMiAxNy40MzctLjAwNiAyNC4yMjVsMTUuNjk1IDE1LjY5NWM0Ljg0MiA0Ljg0MiA1Ljc5IDEyLjM0OCAyLjMwNSAxOC4yNDItOC40NzMgMTQuMzI2LTE0Ljg3MyAyOS43NDYtMTkuMDI0IDQ1LjgzMS0xLjcxIDYuNjI0LTcuNjg0IDExLjI1MS0xNC41MjQgMTEuMjUxaC0yMi4xNDhjLTkuNDQ3LjAwMS0xNy4xMzQgNy42ODctMTcuMTM0IDE3LjEzNHYzMi4xMzRjMCA5LjQ0NyA3LjY4NyAxNy4xMzMgMTcuMTM0IDE3LjEzM2gyMi4xNDdjNi44NDEgMCAxMi44MTQgNC42MjggMTQuNTI0IDExLjI1MSA0LjE1MSAxNi4wODUgMTAuNTUyIDMxLjUwNSAxOS4wMjQgNDUuODMxIDMuNDg1IDUuODk0IDIuNTM3IDEzLjQtMi4zMDUgMTguMjQybC0xNS42ODkgMTUuNjg5Yy02Ljc4MiA2Ljc3NC02LjYwNSAxNy42MzQtLjAwNiAyNC4yMjVsMjIuNzI1IDIyLjcyNWM2LjU4NyA2LjU5NiAxNy40NTEgNi43ODkgMjQuMjI1LjAwNmwxNS42OTQtMTUuNjk1YzMuNTY4LTMuNTY3IDEwLjk5MS02LjU5NCAxOC4yNDQtMi4zMDR6Ii8+PHBhdGggZD0ibTI1NiAzNjcuNGMtNjEuNDI3IDAtMTExLjQtNDkuOTc0LTExMS40LTExMS40czQ5Ljk3My0xMTEuNCAxMTEuNC0xMTEuNCAxMTEuNCA0OS45NzQgMTExLjQgMTExLjQtNDkuOTczIDExMS40LTExMS40IDExMS40em0wLTE5Mi44Yy00NC44ODUgMC04MS40IDM2LjUxNi04MS40IDgxLjRzMzYuNTE2IDgxLjQgODEuNCA4MS40IDgxLjQtMzYuNTE2IDgxLjQtODEuNC0zNi41MTUtODEuNC04MS40LTgxLjR6Ii8+PC9zdmc+)}</style>
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body class="">
  <!-- Extra details for Live View on GitHub Pages -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
          <a href="home.php" class="simple-text logo-normal">
          <img src="image/logo.svg" alt="logo" class="logoimage" width="250px" height="75px">
          </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="user.php">
              <p>My Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="myorders.php">
              <p>My Orders</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="address.php">
              <p>Shipping Address</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">My Profile</a>
          </div>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNTEyIDUxMiIgaGVpZ2h0PSI1MTIiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiB3aWR0aD0iNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0yNzIuMDY2IDUxMmgtMzIuMTMzYy0yNS45ODkgMC00Ny4xMzQtMjEuMTQ0LTQ3LjEzNC00Ny4xMzN2LTEwLjg3MWMtMTEuMDQ5LTMuNTMtMjEuNzg0LTcuOTg2LTMyLjA5Ny0xMy4zMjNsLTcuNzA0IDcuNzA0Yy0xOC42NTkgMTguNjgyLTQ4LjU0OCAxOC4xMzQtNjYuNjY1LS4wMDdsLTIyLjcxMS0yMi43MWMtMTguMTQ5LTE4LjEyOS0xOC42NzEtNDguMDA4LjAwNi02Ni42NjVsNy42OTgtNy42OThjLTUuMzM3LTEwLjMxMy05Ljc5Mi0yMS4wNDYtMTMuMzIzLTMyLjA5N2gtMTAuODdjLTI1Ljk4OCAwLTQ3LjEzMy0yMS4xNDQtNDcuMTMzLTQ3LjEzM3YtMzIuMTM0YzAtMjUuOTg5IDIxLjE0NS00Ny4xMzMgNDcuMTM0LTQ3LjEzM2gxMC44N2MzLjUzMS0xMS4wNSA3Ljk4Ni0yMS43ODQgMTMuMzIzLTMyLjA5N2wtNy43MDQtNy43MDNjLTE4LjY2Ni0xOC42NDYtMTguMTUxLTQ4LjUyOC4wMDYtNjYuNjY1bDIyLjcxMy0yMi43MTJjMTguMTU5LTE4LjE4NCA0OC4wNDEtMTguNjM4IDY2LjY2NC4wMDZsNy42OTcgNy42OTdjMTAuMzEzLTUuMzM2IDIxLjA0OC05Ljc5MiAzMi4wOTctMTMuMzIzdi0xMC44N2MwLTI1Ljk4OSAyMS4xNDQtNDcuMTMzIDQ3LjEzNC00Ny4xMzNoMzIuMTMzYzI1Ljk4OSAwIDQ3LjEzMyAyMS4xNDQgNDcuMTMzIDQ3LjEzM3YxMC44NzFjMTEuMDQ5IDMuNTMgMjEuNzg0IDcuOTg2IDMyLjA5NyAxMy4zMjNsNy43MDQtNy43MDRjMTguNjU5LTE4LjY4MiA0OC41NDgtMTguMTM0IDY2LjY2NS4wMDdsMjIuNzExIDIyLjcxYzE4LjE0OSAxOC4xMjkgMTguNjcxIDQ4LjAwOC0uMDA2IDY2LjY2NWwtNy42OTggNy42OThjNS4zMzcgMTAuMzEzIDkuNzkyIDIxLjA0NiAxMy4zMjMgMzIuMDk3aDEwLjg3YzI1Ljk4OSAwIDQ3LjEzNCAyMS4xNDQgNDcuMTM0IDQ3LjEzM3YzMi4xMzRjMCAyNS45ODktMjEuMTQ1IDQ3LjEzMy00Ny4xMzQgNDcuMTMzaC0xMC44N2MtMy41MzEgMTEuMDUtNy45ODYgMjEuNzg0LTEzLjMyMyAzMi4wOTdsNy43MDQgNy43MDRjMTguNjY2IDE4LjY0NiAxOC4xNTEgNDguNTI4LS4wMDYgNjYuNjY1bC0yMi43MTMgMjIuNzEyYy0xOC4xNTkgMTguMTg0LTQ4LjA0MSAxOC42MzgtNjYuNjY0LS4wMDZsLTcuNjk3LTcuNjk3Yy0xMC4zMTMgNS4zMzYtMjEuMDQ4IDkuNzkyLTMyLjA5NyAxMy4zMjN2MTAuODcxYzAgMjUuOTg3LTIxLjE0NCA0Ny4xMzEtNDcuMTM0IDQ3LjEzMXptLTEwNi4zNDktMTAyLjgzYzE0LjMyNyA4LjQ3MyAyOS43NDcgMTQuODc0IDQ1LjgzMSAxOS4wMjUgNi42MjQgMS43MDkgMTEuMjUyIDcuNjgzIDExLjI1MiAxNC41MjR2MjIuMTQ4YzAgOS40NDcgNy42ODcgMTcuMTMzIDE3LjEzNCAxNy4xMzNoMzIuMTMzYzkuNDQ3IDAgMTcuMTM0LTcuNjg2IDE3LjEzNC0xNy4xMzN2LTIyLjE0OGMwLTYuODQxIDQuNjI4LTEyLjgxNSAxMS4yNTItMTQuNTI0IDE2LjA4NC00LjE1MSAzMS41MDQtMTAuNTUyIDQ1LjgzMS0xOS4wMjUgNS44OTUtMy40ODYgMTMuNC0yLjUzOCAxOC4yNDMgMi4zMDVsMTUuNjg4IDE1LjY4OWM2Ljc2NCA2Ljc3MiAxNy42MjYgNi42MTUgMjQuMjI0LjAwN2wyMi43MjctMjIuNzI2YzYuNTgyLTYuNTc0IDYuODAyLTE3LjQzOC4wMDYtMjQuMjI1bC0xNS42OTUtMTUuNjk1Yy00Ljg0Mi00Ljg0Mi01Ljc5LTEyLjM0OC0yLjMwNS0xOC4yNDIgOC40NzMtMTQuMzI2IDE0Ljg3My0yOS43NDYgMTkuMDI0LTQ1LjgzMSAxLjcxLTYuNjI0IDcuNjg0LTExLjI1MSAxNC41MjQtMTEuMjUxaDIyLjE0N2M5LjQ0NyAwIDE3LjEzNC03LjY4NiAxNy4xMzQtMTcuMTMzdi0zMi4xMzRjMC05LjQ0Ny03LjY4Ny0xNy4xMzMtMTcuMTM0LTE3LjEzM2gtMjIuMTQ3Yy02Ljg0MSAwLTEyLjgxNC00LjYyOC0xNC41MjQtMTEuMjUxLTQuMTUxLTE2LjA4NS0xMC41NTItMzEuNTA1LTE5LjAyNC00NS44MzEtMy40ODUtNS44OTQtMi41MzctMTMuNCAyLjMwNS0xOC4yNDJsMTUuNjg5LTE1LjY4OWM2Ljc4Mi02Ljc3NCA2LjYwNS0xNy42MzQuMDA2LTI0LjIyNWwtMjIuNzI1LTIyLjcyNWMtNi41ODctNi41OTYtMTcuNDUxLTYuNzg5LTI0LjIyNS0uMDA2bC0xNS42OTQgMTUuNjk1Yy00Ljg0MiA0Ljg0My0xMi4zNSA1Ljc5MS0xOC4yNDMgMi4zMDUtMTQuMzI3LTguNDczLTI5Ljc0Ny0xNC44NzQtNDUuODMxLTE5LjAyNS02LjYyNC0xLjcwOS0xMS4yNTItNy42ODMtMTEuMjUyLTE0LjUyNHYtMjIuMTVjMC05LjQ0Ny03LjY4Ny0xNy4xMzMtMTcuMTM0LTE3LjEzM2gtMzIuMTMzYy05LjQ0NyAwLTE3LjEzNCA3LjY4Ni0xNy4xMzQgMTcuMTMzdjIyLjE0OGMwIDYuODQxLTQuNjI4IDEyLjgxNS0xMS4yNTIgMTQuNTI0LTE2LjA4NCA0LjE1MS0zMS41MDQgMTAuNTUyLTQ1LjgzMSAxOS4wMjUtNS44OTYgMy40ODUtMTMuNDAxIDIuNTM3LTE4LjI0My0yLjMwNWwtMTUuNjg4LTE1LjY4OWMtNi43NjQtNi43NzItMTcuNjI3LTYuNjE1LTI0LjIyNC0uMDA3bC0yMi43MjcgMjIuNzI2Yy02LjU4MiA2LjU3NC02LjgwMiAxNy40MzctLjAwNiAyNC4yMjVsMTUuNjk1IDE1LjY5NWM0Ljg0MiA0Ljg0MiA1Ljc5IDEyLjM0OCAyLjMwNSAxOC4yNDItOC40NzMgMTQuMzI2LTE0Ljg3MyAyOS43NDYtMTkuMDI0IDQ1LjgzMS0xLjcxIDYuNjI0LTcuNjg0IDExLjI1MS0xNC41MjQgMTEuMjUxaC0yMi4xNDhjLTkuNDQ3LjAwMS0xNy4xMzQgNy42ODctMTcuMTM0IDE3LjEzNHYzMi4xMzRjMCA5LjQ0NyA3LjY4NyAxNy4xMzMgMTcuMTM0IDE3LjEzM2gyMi4xNDdjNi44NDEgMCAxMi44MTQgNC42MjggMTQuNTI0IDExLjI1MSA0LjE1MSAxNi4wODUgMTAuNTUyIDMxLjUwNSAxOS4wMjQgNDUuODMxIDMuNDg1IDUuODk0IDIuNTM3IDEzLjQtMi4zMDUgMTguMjQybC0xNS42ODkgMTUuNjg5Yy02Ljc4MiA2Ljc3NC02LjYwNSAxNy42MzQtLjAwNiAyNC4yMjVsMjIuNzI1IDIyLjcyNWM2LjU4NyA2LjU5NiAxNy40NTEgNi43ODkgMjQuMjI1LjAwNmwxNS42OTQtMTUuNjk1YzMuNTY4LTMuNTY3IDEwLjk5MS02LjU5NCAxOC4yNDQtMi4zMDR6Ii8+PHBhdGggZD0ibTI1NiAzNjcuNGMtNjEuNDI3IDAtMTExLjQtNDkuOTc0LTExMS40LTExMS40czQ5Ljk3My0xMTEuNCAxMTEuNC0xMTEuNCAxMTEuNCA0OS45NzQgMTExLjQgMTExLjQtNDkuOTczIDExMS40LTExMS40IDExMS40em0wLTE5Mi44Yy00NC44ODUgMC04MS40IDM2LjUxNi04MS40IDgxLjRzMzYuNTE2IDgxLjQgODEuNCA4MS40IDgxLjQtMzYuNTE2IDgxLjQtODEuNC0zNi41MTUtODEuNC04MS40LTgxLjR6Ii8+PC9zdmc+" width="24px" height="24px"/>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="home.php">Back to Home</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form action="image_action.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Change image: </label>
                          <input type="file" name="gambar" id="gambar">
                        </div>
                      </div>  
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="email" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Name</label>
                          <input type="email" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Country</label>
                          <input type="email" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Me</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="image/namjoon.svg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">USER</h6>
                  <h4 class="card-title">@kjoon__</h4>
                  <p class="card-description">
                   Kim Namjoon<br>
                   Bring the Scene.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com/">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com/">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="../../../cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="../../../buttons.github.io/buttons.js"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min1c51.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <!-- Sharrre libray -->
  <script src="js/jquery.sharrre.js"></script>
  <script>
    $(document).ready(function() {

      $('#facebook').sharrre({
        share: {
          facebook: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('facebook');
        },
        template: '<i class="fab fa-facebook-f"></i> Facebook',
        url: 'https://demos.creative-tim.com/material-dashboard/examples/dashboard.html'
      });

      $('#google').sharrre({
        share: {
          googlePlus: true
        },
        enableCounter: false,
        enableHover: false,
        enableTracking: true,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('googlePlus');
        },
        template: '<i class="fab fa-google-plus"></i> Google',
        url: 'https://demos.creative-tim.com/material-dashboard/examples/dashboard.html'
      });

      $('#twitter').sharrre({
        share: {
          twitter: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        buttons: {
          twitter: {
            via: 'CreativeTim'
          }
        },
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('twitter');
        },
        template: '<i class="fab fa-twitter"></i> Twitter',
        url: 'https://demos.creative-tim.com/material-dashboard/examples/dashboard.html'
      });



      // Facebook Pixel Code Don't Delete
      ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
          n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window,
        document, 'script', '../../../connect.facebook.net/en_US/fbevents.js');

      try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

      } catch (err) {
        console.log('Facebook Track Error:', err);
      }

    });
  </script>
  <script>
    // Facebook Pixel Code Don't Delete
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window,
      document, 'script', '../../../connect.facebook.net/en_US/fbevents.js');

    try {
      fbq('init', '111649226022273');
      fbq('track', "PageView");

    } catch (err) {
      console.log('Facebook Track Error:', err);
    }
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
</body>


<!-- Mirrored from demos.creative-tim.com/material-dashboard/examples/user.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Jun 2021 03:01:03 GMT -->
</html>