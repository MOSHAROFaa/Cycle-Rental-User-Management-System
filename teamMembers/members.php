<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Team Members</title>
    <link href="img/favicon.png" rel="icon">
    <style>
     @import url("https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&family=Poppins:wght@100&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  
  line-height: 1.8;
  font-size: 13px;
  font-family: "Poppins", sans-serif;
  background-image: url(img/hero-bg.png);
}

.container {
  max-width: 1200px;
  margin: 100px auto;
  padding: 20px;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  /* grid-template-rows: 250px 250px; */
  /* gap: 10px; */
}

.card {
  background: white;
  border-radius: 10px;
  margin-bottom: 10px;
  padding: 15px;
  box-shadow: rgb(138, 53, 53) 0px 48px 100px 0px;
  margin-right: 15px;
}

img {
  width: 50px;
  height: 50px;
  border-radius: 50px;
  border: 2px solid #996ed9;
  margin-right: 15px;
}

.card-purple {
  background-color: rgb(0, 0, 0);
  color: rgb(255, 255, 255);
  background-position: top 10px right 100px;
}

.card-grey {
  background-color: rgb(0, 0, 0);
  color: rgb(255, 255, 255);
  background-position: top 10px right 100px;
}

.card-black {
  background-color: black;
  color: rgb(255, 255, 255);
  background-position: top 10px right 100px;
}

.card-blue {
  background-color: rgb(0, 0, 0);
  color: #ffff;
  background-position: top 10px right 100px;
}


.card-header {
  display: flex;
  align-items: center;
  /* justify-content: space-between; */
  margin-bottom: 10px;
}

.card-header h3 {
  font-size: 18px;
}

.card-header h4 {
  opacity: 40%;
}

.quote {
  font-size: 1.5rem;
  font-weight: 500;
  line-height: 1.3;
}

.comment {
  font-size: 15px;
  font-weight: 500;
  opacity: 50%;
  line-height: 1.4;
  font-family:cursive;
}

.card-purple {
  grid-column: 1/1;
}

@media only screen and (max-width:600px) {
  .container {
    grid-template-columns: 1fr;
    width: 100%;
  }

  .card-purple {
    grid-column: 1;
  }

  .card-grey {
    grid-column: 1;
    grid-row: 2;
  }

  .card-black {
    grid-row: 3;
    grid-column: 1;
  }

  .card-blue {
    grid-row: 4;
    grid-column: 1;
  }


}
    </style>
   
  </head>
  <body>
    <br>
  <button class="btn" style="width:100%; align-items: center; justify-content:center; margin:0%; "> 
      <a href="../index.php" style="text-decoration: none; "> <h1>Main Page </h1> </a> 
    </button>
    <div class="container">
      <div class="card card-purple">
        <div class="card-header">
          <img src="img/Mosharof.jpg" alt="" />
          <div>
            <h3>MD MOSHAROF AL AHSAN</h3>
            <h4>Matric NO: A19EC4014</h4>
          </div>
        </div>
        <p class="quote">
          My self MOSHAROF. Born at BANGLADESH. I am actually a sports person and love to read. I play almost every game. Like Cricket, Football, Pool, Table tennis, Boxing etc. I also play athletics.

 
        </p>
        <p class="comment">
          Now at present i read in UTM as an undergraduate student. In software engineering. After completing my graduation i want to get a job which is suitable for me with a nice salary.
        </p>
      </div>

      <div class="card card-grey">
        <div class="card-header">
          <img src="img/jared.jpg" alt="" />
          <div>
            <h3>Jared Ryan</h3>
            <h4>Matric NO: A19EC5161</h4>
          </div>
        </div>
        <p class="quote">
          Hello there! I'm Jared Ryan from Johor, currently in my third year of Software Engineering course in UTM. I believe I am easy going, cheerful and I like to get things done on time.
        </p>
        <p class="comment">
          I choose to see each obstacle as an opportunity to grow.
        </p>
      </div>

      <div class="card card-blue">
        <div class="card-header">
          <img src="img/Masum.PNG" alt="" />
          <div>
            <h3>Maidul Hasan Masum </h3>
            <h4>Matric NO:A19EC4011 </h4>
          </div>
        </div>
        <p class="quote">
          This is Maidul Hasan Masum From Bangladesh. A passionate computer science student, enthusiastic about Web & App Development with superiority
          in public communication and leadership. 
        </p>
        <p class="comment">
          I am doing my bachelor of Computer Science, Major in Software Engineering. This is my third year second semester. 
        </p>
      </div>

      <div class="card card-black">
        <div class="card-header">
          <img src="img/Manfred.jpg" alt="" />
          <div>
            <h3>Manfred John </h3>
            <h4>Matric NO: A19EC5238  </h4>
          </div>
        </div>
        <p class="quote">
          My name is Manfred John. I'm 27 years old and from Johor Bahru, Malaysia. I am passionate about cars, music and tech.
        </p>
        <p class="comment">
          I am currently a third year Software Engineering student at UTM JB.
        </p>
      </div>
     
    </div>
   
  </body>
</html>
