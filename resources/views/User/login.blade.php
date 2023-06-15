<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }
    
    .container {
  width: 300px;
  margin: 0 auto;
  margin-top: 100px;
  padding: 20px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
  display: flex;
  flex-direction: column;
  align-items: center;

}

    
    .container h2 {
      text-align: center;
    }
    
    .container label,
    .container input[type="text"],
    .container input[type="password"],
    .container input[type="submit"] {
      display: center;
      width: 100%;
      margin-bottom: 10px;
      height: 30px;
    }
    
    .container label {
      font-weight: bold;
    }
    
    .container input[type="submit"] {
      background-color: #4caf50;
      color: #fff;
      border: none;
      padding: 10px;
      cursor: pointer;
    }
    
    .container input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form>
      <label for="username">Username</label>
      <input type="text" id="username" name="username" placeholder="Enter your username" required>
      
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
      
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>