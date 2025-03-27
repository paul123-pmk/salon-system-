<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>serenity bookings</title>
    <h1>Booking form</h1>
</head>
<body class="mybody">
    <form action="#"class="bookingform">
        <label for="email">Enter email:</label>
        <input type="text"name="email"placeholder="Enter email"required class="emailplaceholder"> <br>
        <label for="phonenumber">phonenumber:</label>
        <input type="integer"name="phonenumber"placeholder="enter phonenumber"required class="phonenumberplaceholder"> <br>

        <label for="services">service type:</label>
        <select name="services" >
        <option value="barbershop">barbershop</option>
        <option value="hairsalon">hairsalon</option>
        <option value="tattoo hub">tattoo&Piercing</option>
        <option value="massage">massage</option>
        <option value="nails">nail palour</option>
        <option value="dreadlocks">dreadlocks hub</option>

        </select><br>
        <button type="submit">submit</button>

    </form>
    <style>
        label{
    background-color:none;
    color: black;
    border-radius: 4px;
    height: 20px;
    width: 200px;
    cursor: pointer;
    text-align: center;
    margin-left: 10PX;
    font-weight: bold;
    font-size: 20px;
}

h1{text-align: center;
text-decoration: underline;
}

button{height: 30px;
width: 150px;
font-size: 15px;
font-weight: bold;}



button:hover{
    opacity: 0.6 
      
}

.mybody{
    background-image: url(salon-image.jpg );
    background-size: cover;

}

   .bookingform{
    background-color:rgba(224, 175, 12, 0.8);
    text-align: center;
    width: 400px;
    height: 200px;
    justify-content: center;
    margin: auto;
    padding-top: 15px;
    
   }
    
    



    </style>
</body>
</html>