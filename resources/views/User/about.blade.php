<!DOCTYPE html>
<html>
<head>
  <title>About Us</title>
  <style>
    /* CSS Styles */
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
    }
    
    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }
    
    h1 {
      font-size: 24px;
      margin: 0;
    }
    
    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      display: flex;
      align-items: center;
    }
    
    .image {
      flex: 1;
      padding-right: 20px;
    }
    
    .text {
      flex: 1;
    }
    
    .image img {
      max-width: 100%;
      height: auto;
    }
    
    p {
      line-height: 1.5;
    }
  </style>
</head>
<body>
  <header>
    <h1>JNEC- ENTREPRENEURSHIP AND INNOVATION CENTRE</h1>
  </header>
  
  <div class="container">
    <div class="image">
    <img src="{{ asset('template/images/logo.png') }}">
    </div>
    <div class="text">
      <h2>VISION</h2>
      <p>“Infuse the culture of fostering start-up and MSME infused with GNH values in realizing and meeting the self-reliance goals of the nation.”</p>
      
      <h2>MISSION</h2>
      <p>“To facilitate, incubate, and accelerate technologies with innovative applications at various stages of development by providing business technical assistance and management to students, staff, and community as a whole.”</p>
  
      <h2>OBJECTIVES</h2>
      <ul>
        <li>Identify and recruit small businesses with technology applications having employment generation potentials and opportunities within the region.</li>
        <li>To create entrepreneurial opportunities for the students.</li>
        <li>Encourage and support student entrepreneurs through a supportive environment that helps them establish their business ideas and develop their concepts into market-ready products.</li>
        <li>Contribute to the growth and success of emerging engineering technology.</li>
      </ul>
    </div>
  </div>
</body>
</html>
