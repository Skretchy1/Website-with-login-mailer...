
        <?php 
          include_once 'header.php';
        ?>

    <div class="container">
      <div class="col-md" >
        <form action = "authentication.php" onsubmit = "return validation()" method = "POST">
          <fieldset>
              <legend>Login</legend>

               <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" class="form-control" name="name" id="name"
                      placeholder="Name" size="50" pattern="[A-Za-z]*" maxlength="30"
                      title="Only letters allowed!" required />
              </div>
              <!-- <div class="form-group">
                <label for="surname">Surname:</label>
                <input type="text" class="form-control" name="surname" id="surname"
                    placeholder="Surname" size="50" pattern="[A-Za-z]*" maxlength="30"
                    title="Only letters allowed!" required />
              </div>  -->
              <!-- <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
              </div> -->
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password" id="password"
                    placeholder="password" size="50" maxlength="30" required />
              </div>
              <!-- <div class="form-group">
                <label for="whatAge">Your age:</label>
                <input type="number" class="form-control" name="whatAge" id="whatAge"
                    min="1" max="160" step="1" value="1" aria-describedby="whatAgeHelp" />
                <small id="whatAgeHelp" class="form-text">Enter how many years you have.</small>
            </div>
            <div class="form-group">
              <label for="birthDate">Enter the date you were born:</label>
              <input class="form-control" type="date" max="2022-04-10" min="1900-01-01"
                  name="birthDate" id="birthDate"/>
              </p>
          </div>

              <div class="form-group">
                  <label for="shortText">Your whishes/complains:</label>
                  <textarea rows="4" cols="65" name="shortText" id="shortText" class="form-control"
                      required></textarea>
              </div>

              <div class="form-group">
                  <label for="findUs">How did you come up checking our webiste:</label>
                  <select class="form-control" id="findUs" name="findUs" required>
                      <option value="">Choose</option>
                      <option value="Ads">Thorugh ads</option>
                      <option value="firend">Thorugh a fiend</option>
                      <option value="exploring">Exploring on web</option>
                      <option value="other">Other</option>
                  </select>
              </div>  -->
              <p> 
                  <input type="submit" class="btn btn-primary" name="submit" value="Log In">
                  <input type="reset" class="btn btn-danger" value="Reset">
              </p> 
          </fieldset>
      </form>
      </div>
    <!-- <form class="registration" action="loginafter.html" name="newForm" onsubmit=" return validDate()" method="get">
        <label for="name">First name:</label><br>
        <input type="text" name="name" placeholder="Enter your first name"><br>

        <label for="lastname">Last name:</label><br>
        <input type="text" name="lastname" placeholder="Enter your last name"><br>

        <label for="datetime">Date and Time for purchasing the package:</label><br>
        <input type="date" name="datetime">
        <input type="time" name="datetime"><br>

        <label for="age">Age:</label><br>
        <input type="text" name="age" placeholder="Enter your age" onkeypress="return isNumber(event)" min="1" max="100"><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" placeholder="Example@gmail.com"><br>

        <label for="phone">Phone number:</label><br>
        <input type="tel" name="phone" placeholder="Enter your phone number"><br>

        <label for="Package">Packages picked:</label><br>
        <input type="checkbox" name="Package" value="#">
        <label for="#"> Package under 12</label><br>
        <input type="checkbox" name="Package" value="#">
        <label for="#"> Package under 18</label><br>
        <input type="checkbox" name="Package" value="#">
        <label for="#">Package for elderly</label><br>
        <input type="checkbox" name="Package" value="#">
        <label for="#"> Package above 18</label><br>

        <label for="tickets">Number of Packages:</label><br>
        <input type="number" name="tickets" min="1" max="20"><br>

        <label for="Textarea">Wishes/Complains:</label><br>
        <textarea cols="50" rows="10" name="Textarea" placeholder="Write your wishes/complains here"></textarea><br>

         <input class="button2" name="button_submit" type="submit" value="Submit"/> 
         <button class="button2" name="button_submit" type="submit" value="Submit">Submit</button> -->

    </form> 
  </div>



    <footer>
        <div class="forth-part">
            <p>New Technolgies | Website &copy; 2022</p>
        </div>
    </footer>

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="script.js" type="text/javascript"></script>
</body>
</html>