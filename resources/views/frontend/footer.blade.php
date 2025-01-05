<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer with Social Icons</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Bootstrap Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">

  <style>
    footer {
      background-color: #343a40;
      padding: 20px 0;
      color: white;
    }

    footer div {
      text-align: center;
      margin-top: 10px;
    }

    footer a {
      margin: 0 15px;
      text-decoration: none;
      font-size: 24px;
      color: white;
      transition: color 0.3s ease;
    }

    footer a:hover {
      color: #FFC107;
    }

    .social-icons i {
      margin: 0 15px;
      font-size: 24px;
      color: white;
      transition: color 0.3s ease;
    }

    .social-icons i:hover {
      color: #FFC107;
    }

    .footer-nav {
      display: flex;
      justify-content: center;
      list-style: none;
      padding: 0;
      margin: 20px 0;
      flex-wrap: wrap;
    }

    .footer-nav li {
      margin: 10px;
    }

    .footer-nav a {
      color: white;
      font-size: 16px;
      transition: color 0.3s ease;
    }

    .footer-nav a:hover {
      color: #FFC107;
    }

    .footer-nav .active {
      font-weight: bold;
      color: #FFC107;
    }

    .footer-bottom {
      text-align: center;
      margin-top: 20px;
    }

    @media (max-width: 600px) {
      .footer-nav {
        flex-direction: column;
      }

      .footer-nav li {
        margin: 5px 0;
      }
    }
  </style>
</head>

<body>
  <footer>
    <div class="social-icons">
      <a href="https://www.facebook.com/" target="_blank" class="bi bi-facebook"></a>
      <a href="https://www.twitter.com/" target="_blank" class="bi bi-twitter"></a>
      <a href="https://www.instagram.com/" target="_blank" class="bi bi-instagram"></a>
      <a href="https://www.youtube.com/" target="_blank" class="bi bi-youtube"></a>
    </div>

    <div>
      <ul class="footer-nav">
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item {{ Request::is('menu') ? 'active' : '' }}">
          <a class="nav-link" href="/menu">Menu</a>
        </li>
        <li class="nav-item {{ Request::is('about-us') ? 'active' : '' }}">
          <a class="nav-link" href="/about-us">About Us</a>
        </li>
        <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>
    </div>

    <div class="footer-bottom">
      <p>&copy; <script>document.write(new Date().getFullYear())</script> All Rights Reserved.</p>
    </div>
  </footer>

</body>

</html>
