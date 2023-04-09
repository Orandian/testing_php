<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chat App</title>

  <link rel="stylesheet" href="style.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <img src="./img.jpg" alt="" />
          <div class="details">
            <span>Orandian</span>
            <p>Active Now</p>
          </div>
        </div>
        <a href="#" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to shart chat</span>
        <input type="text" placeholder="Enter name to search..." />
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="user-list">
        <a href="#">
          <div class="content">
            <img src="./img.jpg" alt="">
            <div class="details">
              <span>Coding Nepal</span>
              <p>This is test message</p>
            </div>
          </div>
          <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>
      </div>
    </section>
  </div>
</body>

</html>