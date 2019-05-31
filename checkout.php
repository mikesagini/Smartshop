<?php
session_start();

if (!isset($_SESSION['logged_in']) && !isset($_SESSION['item'])) {
    header('Location: sign');
}

elseif($_SESSION['item'] < 1){
  header('Location: index');
}
else {
  $nav ='includes/navconnected.php';
  $idsess = $_SESSION['id'];

  $email_sess = $_SESSION['email'];
  $county_sess = $_SESSION['county'];
  $firstname_sess = $_SESSION['firstname'];
  $lastname_sess = $_SESSION['lastname'];
  $exactlocation_sess = $_SESSION['exactlocation'];
  $address_sess = $_SESSION['address'];
}

 require 'includes/header.php';
 require $nav;?>
 <div class="container-fluid product-page">
   <div class="container current-page">
      <nav>
        <div class="nav-wrapper">
          <div class="col s12">
            <a href="index" class="breadcrumb">Home</a>
            <a href="cart" class="breadcrumb">Cart</a>
            <a href="checkout" class="breadcrumb">Checkout</a>
          </div>
        </div>
      </nav>
    </div>
   </div>

<div class="container checkout">
    <div class="card pay">
      <form method="post" action="final">
        <div class="row">

            <div class="input-field col s6">
              <i class="material-icons prefix">email</i>
              <input id="icon_prefix" type="text" name="email" value='<?= $email_sess; ?>' class="validate" required>
              <label for="icon_prefix">Email</label>
            </div>

            <div class="input-field col s6">
              <select class="icons" name="county" value="<?= $county_sess; ?>">
          <option value=""  disabled selected>Choose your county</option>
          <option value="Tharaka Nithi">Tharaka Nithi</option>
          <option value="Embu">Embu</option>
          <option value="Meru">Meru</option>
        </select>
        <label>County</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix">account_circle</i>
              <input id="icon_prefix" type="text" name="firstname" value='<?= $firstname_sess; ?>' class="validate" required>
              <label for="icon_prefix">First Name</label>
            </div>

            <div class="input-field col s6">
              <i class="material-icons prefix">perm_identity</i>
              <input id="icon_prefix" type="text" name="lastname" value='<?= $lastname_sess; ?>' class="validate" required>
              <label for="icon_prefix">Last Name</label>
            </div>


            <div class="input-field col s6">
              <i class="material-icons prefix">business</i>
              <input id="icon_prefix" type="text" value='<?= $exactlocation_sess; ?>' name="exactlocation" class="validate" required>
              <label for="icon_prefix">Exactlocation</label>
            </div>

            <div class="input-field col s6 meh">
              <i class="material-icons prefix">location_on</i>
              <input id="icon_prefix" type="text" value='<?= $address_sess; ?>' name="address" class="validate" required>
              <label for="icon_prefix">Address</label>
            </div>

                <div class="center-align">
                  <div id='paypal-button'></div>
                    
                </div>
          </div>
      </form>
    </div>
</div>

 <?php require 'includes/footer.php'; ?>
</script>
<!-- Paypal Express -->
<script>
paypal.Button.render({
    env: 'sandbox', // change for production if app is live,

  client: {
        sandbox:    'ASb1ZbVxG5ZFzCWLdYLi_d1-k5rmSjvBZhxP2etCxBKXaJHxPba13JJD_D3dTNriRbAv3Kp_72cgDvaZ',
        //production: 'AaBHKJFEej4V6yaArjzSx9cuf-UYesQYKqynQVCdBlKuZKawDDzFyuQdidPOBSGEhWaNQnnvfzuFB9SM'
    },

    commit: true, // Show a 'Pay Now' button

    style: {
      color: 'gold',
      size: 'small'
    },

    payment: function(data, actions) {
        return actions.payment.create({
            payment: {
                transactions: [
                    {
                      //total purchase
                        amount: { 
                          total: total, 
                          currency: 'USD' 
                        }
                    }
                ]
            }
        });
    },

    onAuthorize: function(data, actions) {
        return actions.payment.execute().then(function(payment) {
      window.location = 'sales.php?pay='+payment.id;
        });
    },

}, '#paypal-button');
</script>