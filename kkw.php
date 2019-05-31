<div id="test2" class="col s12 left-align">
     <div class="card">
       <div class="row">

    <form class="col s12" method="POST" enctype="multipart/form-data">
      <div class="row">

        <div class="input-field col s6">
          <i class="material-icons prefix">email</i>
          <input id="icon_prefix" type="text" name="email" class="validate" required>
          <label for="icon_prefix">Email</label>
        </div>

        <div class="input-field col s6">
          <select class="icons" name="country">
      <option value=""  disabled selected>Choose your county</option>
      <option value="Tharaka Nithi">Tharaka Nithi</option>
      <option value="Embu">Embu</option>
      <option value="Meru">Meru</option>
    </select>
    <label>County</label>
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="firstname" class="validate" required>
          <label for="icon_prefix">First Name</label>
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">perm_identity</i>
          <input id="icon_prefix" type="text" name="lastname" class="validate" required>
          <label for="icon_prefix">Last Name</label>
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input id="icon_prefix" type="password" name="password" class="validate value1" required>
          <label for="icon_prefix">Password</label>
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">lock</i>
          <input id="icon_prefix" type="password" name="confirmation" class="validate value2" required>
          <label for="icon_prefix">Confirm Password</label>
        </div>

        <div class="input-field col s6">
          <i class="material-icons prefix">business</i>
          <input id="icon_prefix" type="text" name="city" class="validate" required>
          <label for="icon_prefix">Exactlocation</label>
        </div>

        <div class="input-field col s6 meh">
          <i class="material-icons prefix">location_on</i>
          <input id="icon_prefix" type="text" name="address" class="validate" required>
          <label for="icon_prefix">Address</label>
        </div>


<?php require 'includes/signupconfirmation.php'; ?>
            <div class="center-align">
                <button type="submit" id="confirmed" name="signup" class="btn meh button-rounded waves-effect waves-light ">Sign up</button>
            </div>

            <p>By Registering, you agree that you've consent on how we operate and ready to do business with us.</p>
      </div>
    </form>
  </div>
     </div>
     </div>