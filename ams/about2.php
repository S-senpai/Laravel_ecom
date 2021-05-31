<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-color: #d8f2f1 !important;
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
  background-color:white;
}

.about-section {
  padding: 1px;
  text-align: center; 
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 13px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
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
  <h1>About Us </h1>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="image_sou.jpg" class="image" alt="Soujanya" style="width: 30%">
      <div class="container">
        <h2>Soujanya Ghorai</h2>
        <p class="title">Computer science Engineer</p>
        <p>Roll:UG/02/BTCSE/2017/037<br>EnRoll:AU/2017/02/0001046<br>SEC A 4th Year</p>
        <p>soujanya.ghorai@stu.adamasuniversity.ac.in<br>7602347888</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image_dev.jpg" class="image" alt="Dev" style="width:30%">
      <div class="container">
        <h2>Debadrita Bandyopadhyay</h2>
        <p class="title">Computer science Engineer</p>
        <p>Roll:UG/02/BTCSE/2017/007<br>EnRoll:AU/2017/02/0000883<br>SEC A 4th Year</p>
        <p>debadrita.bandyopadhyay@stu.adamasuniversity.ac.in<br>8276079939</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="image_su.jpg" class="image" alt="Suro" style="width:30%">
      <div class="container">
        <h2>Surojit Mondal</h2>
        <p class="title">Computer science Engineer</p>
        <p>Roll:UG/02/BTCSE/2017/070<br>EnRoll:AU/2017/02/0001223<br>SEC A 4th Year</p>
        <p>surojit.mondal@stu.adamasuniversity.ac.in<br> 7449578145</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
