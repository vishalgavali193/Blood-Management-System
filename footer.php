<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Blood Bank Management System - Footer</title>
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
    }

    .footer {
      background-color: #111;
      color: #f1f1f1;
      padding: 40px 0 20px;
    }

    .footer-container {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 0 auto;
    }

    .footer-about,
    .footer-links,
    .footer-contact {
      flex: 1;
      margin: 20px;
      min-width: 250px;
    }

    .footer h3,
    .footer h4 {
      color: #ff4d4d;
      margin-bottom: 15px;
    }

    .footer p,
    .footer a {
      color: #ddd;
      font-size: 14px;
      line-height: 1.6;
      text-decoration: none;
    }

    .footer a:hover {
      text-decoration: underline;
    }

    .footer-bottom {
      text-align: center;
      padding-top: 20px;
      border-top: 1px solid #333;
      font-size: 13px;
      color: #888;
    }

    /* Optional Back to Top Button */
    .back-to-top {
      display: block;
      text-align: center;
      margin-top: 20px;
    }

    .back-to-top a {
      color: #ff4d4d;
      text-decoration: none;
      font-weight: bold;
    }

    .back-to-top a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <!-- Your main website content goes here -->

  <!-- Footer Section -->
  <footer class="footer">
    <div class="footer-container">
      <div class="footer-about">
        <h3>BloodBank</h3>
        <p>Saving lives, one drop at a time. Our blood bank management system connects donors with those in need efficiently and securely.</p>
      </div>
      
      <div class="footer-links">
        <h4>Quick Links</h4>
        <ul style="list-style: none; padding: 0;">
          <li><a href="http://localhost/BDMS/about_us.php">About Us</a></li>
          <li><a href="http://localhost/BDMS/donate_blood.php">Donate Blood</a></li>
          <li><a href="http://localhost/BDMS/need_blood.php">Request Blood</a></li>
          <li><a href="http://localhost/BDMS/contact_us.php">Contact</a></li>
        </ul>
      </div>

      <div class="footer-contact">
        <h4>Contact Info</h4>
        <p>Email: bloodbank@gmail.com</p>
        <p>Phone: +91-12345-67890</p>
        <p>Address: Sant Tukaram Nagar , Pimpri , Pune-18 , Maharastra</p>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; 2025 BloodBank | All rights reserved.</p>
      <div class="back-to-top">
        <a href="#top">↑ Back to Top</a>
      </div>
    </div>
  </footer>

</body>
</html>
