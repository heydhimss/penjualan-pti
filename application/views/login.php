<html>
<head>
<!--panggil file css-->
 <link href="<?php echo base_url(); ?>assets/css/materialize.css"
rel="stylesheet"/>
 <link href="<?php echo base_url(); ?>assets/css/materialize.min.css"
rel="stylesheet"/>
</head>
<body>
 <Center>
 <br><br><br>
 <h4>LOGIN</h4>
 <br>
 <div class="container">
 <div class="z-depth-1 grey lighten-4 row" style="display: inlineblock; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
 <form class="form" method="POST" action="<?php echo
base_url();?>login/login_act">
 <?php if($this->session->flashdata('peringatan')):?>
 <p align="center"><font color="red"><i><b><?php echo
$this->session->flashdata('peringatan'); ?></b></i></font></p>
 <?php endif;?>

 <div class='row'>
 <div class='input-field col s12'>
 <input type='email' name='email' id='email' value="<?php
echo set_value('email')?>" required/>
 <label for='email'>Email...</label>
 </div>
 </div>
 <div class='row'>
 <div class='input-field col s12'>
 <input type='password' name='password' id='password'
required />
 <label for='password'>Password....</label>
 </div>
 <label style='float: right;'>
 <a class='pink-text' href='<?php echo
base_url()?>lupaPassword'><b>Lupa Password?</b></a>
 </label>
 </div>
 <br />
 <center>
 <div class='row'>
 <button type='submit' name='btn_login' class='col s12 btn
btn-large waves-effect indigo'>Login</button>
 </div>
 </center>
 </form>
 </div>
 </div>
 </center>
 <div class="section"></div>
 <div class="section"></div>

 <script type="text/javascript" src="<?php echo
base_url();?>assets/js/materialize.js"></script>
 <script type="text/javascript" src="<?php echo
base_url();?>assets/js/materialize.min.js"></script>
</body>
</html>