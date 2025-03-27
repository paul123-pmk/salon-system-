<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .mybody{
            background-image: url(kinyozi\ pic.jpg);
    
        background-size: cover;}
        h1{
    text-align: center;
    color: chartreuse;
    font-family: 'Times New Roman', Times, serif;font-weight: bold;
    
}
h2{
    text-align: center;
    color: chartreuse;
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
    text-decoration: underline;
    text-decoration: wavy;
}
form{
    width: 600px;
    height: 400px;
    background-color:rgba(250, 23, 155, 0.6);
    justify-content: center;
    margin: auto;
}
label{
    text-decoration: wavy;
    font-weight: bold;
    font-size: 16px;

}
input[type=text]{
    width: 250px;
    height: 20px;
    padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <h1>WELCOME TO SERENITY BEAUTY SPA SYSTEM</h1>
  <h2>Beauty is power and your smile is its sword</h2>
  

</head>
<body class="mybody">
    <form action="/action_page.php">
        <h1>contact us:</h1>
        <label for="phonenumber">Your phonenumber:</label><br>
        <input type="text"Name="phonenumber"placeholder="extensions phonenumber"required class="phonenumberplaceholder"><br>
        <label for="email">Your email:</label><br>
        <input type="text"name="email"placeholder="Enter your email"required class="emailplaceholder"><br>
        <label for="subject">Subject:</label><br>
        <input type="text"name="subject"placeholder="What would you like to talk to us about?"required class="subjectplaceholder"><br>
        <label for="text">Message:</label><br>
        <input type="text"name="message"placeholder="Type here:>"><br>
        <label for="check">
            <div class="input-container">
              <input type="checkbox" class="checkbox" id="check">
              <span class="checkbox-text">I'm not a robot</span>
            </div>
          </label>
          
          <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png">
          <span class="recaptcha">reCAPTCHA</span>
          <br>
          
        
        
    </form>
   
    
</body>
</html>