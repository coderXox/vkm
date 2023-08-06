<!DOCTYPE html>
<html>
<head>
  <title>Reset Password</title>
  <link rel="stylesheet" type="text/css" href="css/reset.css">
  <script src="js/reset.js"></script>
</head>
<body>
  <div class="container">
  <a href="#" class="back-button" onclick="goBack()">&#8678; Back</a>
    <h2>Reset Password</h2>
    <form action="" method="POST" onsubmit="return validateForm()">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="new-password">New Password:</label>
        <input type="password" id="new-password" name="new-password" required>
        <span class="password-toggle" onclick="togglePasswordVisibility('new-password')">&#128065;</span>
        <div id="password-strength"></div>
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>
        <span class="password-toggle" onclick="togglePasswordVisibility('confirm-password')">&#128065;</span>
      </div>
      <div id="error-message"></div>
      <button type="submit" class="btn-reset">Reset Password</button>
    </form>
  </div>
</body>
</html>
