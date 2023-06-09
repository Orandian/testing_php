<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chat App</title>

    <link rel="stylesheet" href="style.css" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <div class="wrapper">
      <section class="form signup">
        <header>Realtime Chat App</header>
        <form action="#">
          <div class="error-txt">This is an error message!</div>
          <div class="name-details">
            <div class="field input">
              <label>First Name</label>
              <input type="text" placeholder="First Name" />
            </div>
            <div class="field input">
              <label>Last Name</label>
              <input type="text" placeholder="Last Name" />
            </div>
          </div>
          <div class="field input">
            <label>Email Address</label>
            <input type="text" placeholder="Enter your email" />
          </div>
          <div class="field input">
            <label>Password</label>
            <input type="text" placeholder="Enter new password" />
            <i class="fas fa-eye"></i>
          </div>
          <div class="field image">
            <label>Select Image</label>
            <input type="file" />
          </div>
          <div class="field button">
            <input type="submit" value="Continue to Chat" />
          </div>
        </form>
        <div class="link">Already signed up?<a href="#">Login now</a></div>
      </section>
    </div>
  </body>
</html>
