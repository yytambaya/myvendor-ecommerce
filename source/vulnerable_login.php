<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="../css/style.css">

  <style>
    .vuln-form-container {
      max-width: 500px;
      margin: 40px auto;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      background-color: #fff;
    }
    
    .vuln-form-header {
      text-align: center;
      margin-bottom: 25px;
    }
    
    .vuln-form-header h1 {
      color: #333;
      margin-bottom: 10px;
    }
    
    .vuln-form-header .warning-badge {
      background-color: #ff5050;
      color: white;
      padding: 5px 10px;
      border-radius: 4px;
      display: inline-block;
      margin-bottom: 15px;
    }
    
    .vuln-form-group {
      margin-bottom: 20px;
    }
    
    .vuln-form-group label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #333;
    }
    
    .vuln-form-group input[type="text"],
    .vuln-form-group input[type="password"] {
      width: 100%;
      padding: 10px 15px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 16px;
      transition: border-color 0.3s;
    }
    
    .vuln-form-group input:focus {
      border-color: #ff5050;
      outline: none;
      box-shadow: 0 0 5px rgba(255,80,80,0.2);
    }
    
    .remember-me {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }
    
    .remember-me input {
      margin-right: 10px;
    }
    
    .vuln-btn {
      background-color: #ff5050;
      color: white;
      border: none;
      padding: 12px 0;
      font-size: 16px;
      font-weight: 600;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.3s;
    }
    
    .vuln-btn:hover {
      background-color: #e04545;
    }
    
    .injection-tip {
      margin-top: 20px;
      padding: 10px;
      background-color: #f8f9fa;
      border-left: 4px solid #ff5050;
      font-size: 14px;
      color: #666;
    }
  </style>

	<title>Vulnerable Login</title>
</head>
<body>

    <?php include "header.php" ?>
    <?php include "sidebar.php" ?>

<!-- Vulnerable Login form start -->
<div class="container">
  <div class="vuln-form-container">
    <div class="vuln-form-header">
      <h1>Vulnerable Login</h1>
      <div class="warning-badge">
        <i class="fa fa-exclamation-triangle"></i> Vulnerable to SQL injection
      </div>
    </div>

    <form action="../login-system/vulnerable_login.php" method="POST" id="vulnerable_login">
      <div class="vuln-form-group">
        <label for="username"><i class="fa fa-user"></i> Username</label>
        <input type="text" id="username" placeholder="Enter username" name="username" required>
      </div>

      <div class="vuln-form-group">
        <label for="password"><i class="fa fa-lock"></i> Password</label>
        <input type="password" id="password" placeholder="Enter Password" name="password" required>
      </div>
          
      <div class="remember-me">
        <input type="checkbox" id="remember" checked="checked">
        <label for="remember">Remember me</label>
      </div>
      
      <button type="submit" class="vuln-btn">Login</button>
      
      <div class="injection-tip">
        <strong>Hint:</strong> Try SQL injection with <code>' OR '1'='1</code> in the username field
      </div>
    </form>
  </div>
</div>
<!-- Vulnerable Login form End -->

<?php include "footer.php" ?>

</body>
</html> 