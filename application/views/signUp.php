<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Raleway:400,100,200,300);
* {
  margin: 0;
  padding: 0; }

a {
  color: #666;
  text-decoration: none; }
  a:hover {
    color: #4FDA8C; }

input {
  font: 16px/26px "Raleway", sans-serif; }

body {
  color: #666;
  background-color: #f1f2f2;
  font: 16px/26px "Raleway", sans-serif; }

.form-wrap {
  background-color: #fff;
  width: 320px;
  margin: 3em auto;
  box-shadow: 0px 1px 8px #BEBEBE;
  -webkit-box-shadow: 0px 1px 8px #BEBEBE;
  -moz-box-shadow: 0px 1px 8px #BEBEBE; }
  .form-wrap .tabs {
    overflow: hidden; }
    .form-wrap .tabs h3 {
      float: left;
      width: 50%; }
      .form-wrap .tabs h3 a {
        padding: 0.5em 0;
        text-align: center;
        font-weight: 400;
        background-color: #e6e7e8;
        display: block;
        color: #666; }
        .form-wrap .tabs h3 a.active {
          background-color: #fff; }
  .form-wrap .tabs-content {
    padding: 1.5em; }
    .form-wrap .tabs-content div[id$="tab-content"] {
      display: none; }
    .form-wrap .tabs-content .active {
      display: block !important; }
  .form-wrap form .input {
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    color: inherit;
    font-family: inherit;
    padding: .8em 0 10px .8em;
    border: 1px solid #CFCFCF;
    outline: 0;
    display: inline-block;
    margin: 0 0 .8em 0;
    padding-right: 2em;
    width: 100%; }
  .form-wrap form .button {
    width: 100%;
    padding: .8em 0 10px .8em;
    background-color: #28A55F;
    border: none;
    color: #fff;
    cursor: pointer;
    text-transform: uppercase; }
    .form-wrap form .button:hover {
      background-color: #4FDA8C; }
  .form-wrap form .checkbox {
    visibility: hidden;
    padding: 20px;
    margin: .5em 0 1.5em; }
    .form-wrap form .checkbox:checked + label:after {
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
      filter: alpha(opacity=100);
      opacity: 1; }
  .form-wrap form label[for] {
    position: relative;
    padding-left: 20px;
    cursor: pointer; }
    .form-wrap form label[for]:before {
      content: '';
      position: absolute;
      border: 1px solid #CFCFCF;
      width: 17px;
      height: 17px;
      top: 0px;
      left: -14px; }
    .form-wrap form label[for]:after {
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
      filter: alpha(opacity=0);
      opacity: 0;
      content: '';
      position: absolute;
      width: 9px;
      height: 5px;
      background-color: transparent;
      top: 4px;
      left: -10px;
      border: 3px solid #28A55F;
      border-top: none;
      border-right: none;
      -webkit-transform: rotate(-45deg);
      -moz-transform: rotate(-45deg);
      -o-transform: rotate(-45deg);
      -ms-transform: rotate(-45deg);
      transform: rotate(-45deg); }
  .form-wrap .help-text {
    margin-top: .6em; }
    .form-wrap .help-text p {
      text-align: center;
      font-size: 14px; }

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
<div class="form-wrap">
        <div class="tabs">
            <h3 class="signup-tab"><a class="active" href="#signup-tab-content">Sign Up</a></h3>
            <h3 class="login-tab"><a href="#login-tab-content">Login</a></h3>
        </div><!--.tabs-->

        <div class="tabs-content">
            <div id="signup-tab-content" class="active">
                <form class="signup-form" action="<?php echo site_url('Welcome/check')?>" method="post">
                    <input type="email" class="input" id="user_email" autocomplete="off" placeholder="Email" name="usermail">
                    <input type="text" class="input" id="user_name" autocomplete="off" placeholder="Username" name="username">
                    <input type="password" class="input" id="user_pass" autocomplete="off" placeholder="Password" name="password">
                    <input type="submit" class="button" value="Sign Up">
                </form><!--.login-form-->
                <div class="help-text">
                    <p>By signing up, you agree to our</p>
                    <p><a href="#">Terms of service</a></p>
                </div><!--.help-text-->
            </div><!--.signup-tab-content-->

            <div id="login-tab-content">
                <form class="login-form" action="<?php echo site_url('Welcome/login')?>" method="post">
                    <input type="text" name="username" class="input" id="user_login" autocomplete="off" placeholder="Email or Username">
                    <input type="password" name="login_password" class="input" id="user_pass" autocomplete="off" placeholder="Password">
                    <input type="checkbox" class="checkbox" id="remember_me">
                    <label for="remember_me">Remember me</label>

                    <input type="submit" class="button" value="Login">
                </form><!--.login-form-->
                <div class="help-text">
                    <p><a href="#">Forget your password?</a></p>
                </div><!--.help-text-->
            </div><!--.login-tab-content-->
        </div><!--.tabs-content-->
    </div><!--.form-wrap-->
    <script type="text/javascript">
        jQuery(document).ready(function($) {
    tab = $('.tabs h3 a');

    tab.on('click', function(event) {
        event.preventDefault();
        tab.removeClass('active');
        $(this).addClass('active');

        tab_content = $(this).attr('href');
        $('div[id$="tab-content"]').removeClass('active');
        $(tab_content).addClass('active');
    });
});
    </script>
</body>
</html>