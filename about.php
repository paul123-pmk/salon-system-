<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us:</h1>
  <p>Serenity beauty spa is a collection of all beauty related service shops such as barbershop,nails salon,tattoo hub,
    dreadlocks hub , hair salon and massage spa.
  </p>
  <p>We are located at Kiambu town ,kimathi street  Joakim towers second floor. </p>
  <P>for more info call:0703775720 or 0797741264</P>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="paul.jpeg" alt="Paul" style="width:100%">
      <div class="container">
        <h2>Paul Mbugua</h2>
        <p class="title">CEO & Founder</p>
        <p>a proffesional and famous nail technician and web developer</p>
        <p>mbuguapaul9727@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="winnie.jpeg" alt="Winross" style="width:100%">
      <div class="container">
        <h2>Winross wambui</h2>
        <p class="title">general manager</p>
        <p>an experienced manager with a passion in management,she is alo good in dreadlocks styling</p>
        <p>wanguiwinnie12@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="john.jpeg" alt="John" style="width:100%">
      <div class="container">
        <h2>John kamau</h2>
        <p class="title">HR manager</p>
        <p>an experienced expert workers friendly personel , he is also a massage expert</p>
        <p>johnkamau21@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
