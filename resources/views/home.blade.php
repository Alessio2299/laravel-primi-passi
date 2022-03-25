<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }
      nav{
        height: 100px;
        background-color: rgb(246, 246, 246);
        display: flex;
        align-items: center;
      }
      nav img{
        width: 200px;
      }
      nav ul{
        width: 60%;
        display: flex;
        justify-content: space-around;
      }
      nav ul li{
        color: black;
        list-style: none;
        font-size: 20px;
      }
      nav ul li a{
        text-decoration: none;
      }
      nav ul li a:visited{
        color: black;
      }
      main{
        width: 70%;
        margin: 20px auto;
        padding: 30px;
        box-shadow: 1px 1px 20px rgba(0, 0, 0, 0.5);
        border-radius: 10px;
      }
      main h1{
        text-align: center;
        font-size: 50px;
        padding: 20px 0;
      }
      main p{
        font-size: 20px;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <header>
      <nav>
        <img src="https://laravelnews.imgix.net/images/laravel-featured.png?ixlib=php-3.3.1" alt="Logo Laravel">
        <ul>
          <li><a href="/">Homepage</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/contacts">Contacts</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <h1>{{$name}}</h1>
      <p>{{$description}}</p>
    </main>
  </body>
</html>