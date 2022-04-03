<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../assets/styles/login/login.css">

  <title>Employer Registration</title>
</head>

<body>

  <div class="box">

    <div class="box__navbar">
      <h2 style="cursor: pointer;" onclick="window.location.href='../home/main/home.php'">intern</h2>
    </div>

    <div class="box__main">

      <div class="card">

        <form action="">

          <!-- employer registration -->
          <div class="card__profile">
            <h2 class="card__profile-text">Employer Registration</h2>
          </div>

          <div class="grid-container-employer">

            <!-- employer first name -->
            <div class="grid-item-first-name">
              <div class="card__group">
                <input type="text" id="first-name" class="card__input" placeholder=" " required>
                <label for="first-name" class="card__label">First Name</label>
              </div>
            </div>

            <!-- employer last name -->
            <div class="grid-item-last-name">
              <div class="card__group">
                <input type="text" id="last-name" class="card__input" placeholder=" " required>
                <label for="last-name" class="card__label">Last Name</label>
              </div>
            </div>

            <!-- employer email -->
            <div class="grid-item-email">
              <div class="card__group">
                <input type="email" id="email" class="card__input" placeholder=" " required>
                <label for="email" class="card__label">Email</label>
              </div>
            </div>

            <!-- employer phone -->
            <div class="grid-item-phone">
              <div class="card__group">
                <input type="text" id="phone" class="card__input" placeholder=" " required>
                <label for="phone" class="card__label">Phone</label>
              </div>
            </div>

            <!-- employer dob -->
            <div class="grid-item-dob">
              <div class="card__group">
                <input type="date" id="dob" class="card__input" placeholder=" " required>
                <label for="dob" class="card__label">Date of Birth</label>
              </div>
            </div>

            <!-- employer country -->
            <div class="grid-item-country">
              <div class="card__group">
                <input type="text" id="country" class="card__input" placeholder=" " required>
                <label for="country" class="card__label">Country</label>
              </div>
            </div>

            <!-- employer company -->
            <div class="grid-item-company">
              <div class="card__group">
                <input type="text" id="company" class="card__input" placeholder=" " required>
                <label for="company" class="card__label">Company Name</label>
              </div>
            </div>

            <!-- employer password -->
            <div class="grid-item-password">
              <div class="card__group">
                <input type="password" id="password" class="card__input" placeholder=" " required>
                <label for="password" class="card__label">Password</label>
              </div>
            </div>

            <!-- employer confirm password -->
            <div class="grid-item-confirm-password">
              <div class="card__group">
                <input type="password" id="confirm-password" class="card__input" placeholder=" " required>
                <label for="confirm-password" class="card__label">Confirm
                  Password</label>
              </div>
            </div>

            <!-- employer register -->
            <div class="grid-item-register">
              <button type="submit" class="card__submit-btn-employer">Register</button>
            </div>

          </div>

        </form>

        <!-- employer horizontal line -->
        <hr class="card__hr-employer">

        <!-- employer login home -->
        <div class="card__profile">
          <button class="card__employer-login-home" onclick="window.location.href='../login/main/login.php'">Go to
            login
            page</button>
        </div>

      </div>

    </div>

    <div class="box__footer">
      <div class="footer">
        <span>©Team Aurora</span>
      </div>
    </div>

  </div>

</body>

</html>