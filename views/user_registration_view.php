<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Sign Up Form Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>signup/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>signup/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="<?php echo base_url();?>signup/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>signup/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Sign Up Form <small>A stylish signup form</small></h1>
</div>

<!-- Sign Up Form - START -->
<!-- you need to include the shieldui css and js assets in order for the charts to work -->
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
 
<div class="container" id="f1">
               
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div id="panel1" class="panel panel-default">
            <h1>Sign Up</h1>
            <ul class="social text-center">
                <li><a href="#" id="facebook" class="fa fa-facebook"></a></li>
                <li><a href="#" id="twitter" class="fa fa-twitter"></a></li>
                <li><a href="#" id="google_plus" class="fa fa-google-plus"></a></li>
            </ul>
            <p id="or">OR</p>

	    <fieldset>
	    <?php echo validation_errors(); ?>
	<?php echo form_open('user_registration'); ?>
                <legend><span class="number">1</span>Your basic info</legend>
                <label>Name:</label>
                <div class="input-group input-group-md">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control" placeholder="Type your name here..." aria-describedby="sizing-addon1" name = "firstname" value = "<?php echo set_value('firstname');?>" >
                </div>
                <br />
                 <label>Lastname:</label>
                <div class="input-group input-group-md">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" class="form-control" placeholder="Type your Last name here..." aria-describedby="sizing-addon1" name = "lastname" value = "<?php echo set_value('lastname');?>" >
                </div>
                <br />

            <label>Username:</label>
            <div class="input-group input-group-md">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" class="form-control" placeholder="Type your username here..." aria-describedby="sizing-addon1" name = "username" value = "<?php echo set_value('username');?>" >
            </div>
                <br />
                <label>Password:</label>
                <div class="input-group input-group-md">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-cog"></span></span>
                    <input type="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon3"  name = "password">
                </div>
                <br />
               <label>Password:</label>
                <div class="input-group input-group-md">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-cog"></span></span>
                    <input type="password" class="form-control" placeholder="Confirm Password" aria-describedby="sizing-addon3"  name = "passwordconf">
                </div>
            <label>Email:</label>
            <div class="input-group input-group-md">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" class="form-control" placeholder="Type your Email here..." aria-describedby="sizing-addon1" name = "email" value = "<?php echo set_value('email');?>" >
            </div>
 
                <br />
              <label>Gender:</label>
                       <select name="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
            
            </fieldset>
	   
 <fieldset>
    
          

            <input id="b1" type="submit" value="Sign Up" />
            <footer>
                <p id="footer">Desing provided by <a href="https://www.shieldui.com/">Shield UI</a></p>
            </footer>
        </div>
    </div>
    
    <div class="col-md-3"></div>
</div>

<style>
    #f1
    {
        font-family: 'Nunito', sans-serif;
        color: #384047;
    }

    #panel1
    {
        padding: 10px 20px;
        background: #f4f7f8;
        border-radius: 8px;
    }

    h1
    {
        margin: 0 0 30px 0;
        text-align: center;
    }

    #f1 input[type="text"],
    #f1 input[type="password"],
    #f1 input[type="date"],
    #f1 input[type="datetime"],
    #f1 input[type="email"],
    #f1 input[type="number"],
    #f1 input[type="search"],
    #f1 input[type="tel"],
    #f1 input[type="time"],
    #f1 input[type="url"],
    #f1 textarea,
    #f1 select
    {
        background: rgba(255,255,255,0.1);
        
        font-size: 16px;
        height: auto;
        margin: 0;
        outline: 0;
        padding: 15px;
        width: 100%;
        background-color: #fff;
        color: #8a97a0;
        box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
    }

    #f1 textarea,
    #f1 select
    {
        border: 1px solid #ccc;
    }

    #f1 input[type="radio"],
    #f1 input[type="checkbox"]
    {
        margin: 0 4px 8px 0;
    }

    #f1 .sui-sprite.sui-calendar-icon
    {
        margin-top: 14px;
    }

    #b1
    {
        padding: 19px 39px 18px 39px;
        color: #FFF;
        background-color: #4bc970;
        font-size: 18px;
        text-align: center;
        font-style: normal;
        border-radius: 5px;
        width: 100%;
        border: 1px solid #3ac162;
        border-width: 1px 1px 3px;
        box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
        margin-bottom: 10px;
    }

    fieldset
    {
        margin-bottom: 30px;
        border: none;
    }

    legend
    {
        font-size: 1.4em;
        margin-bottom: 10px;
    }

    label
    {
        display: block;
        margin-bottom: 8px;
    }

        label.light
        {
            font-weight: 300;
            display: inline;
        }

    .number
    {
        background-color: #5fcf80;
        color: #fff;
        height: 30px;
        width: 30px;
        display: inline-block;
        font-size: 0.8em;
        margin-right: 4px;
        line-height: 30px;
        text-align: center;
        text-shadow: 0 1px 0 rgba(255,255,255,0.2);
        border-radius: 100%;
    }

    #footer
    {
        font-size: 10px;
        text-align: center;
        font-weight: bold;
    }

    #passwordMatch
    {
        text-align: center;
    }

    .input-group-addon
    {
        background-color: #e8eeef;
    }

    #or
    {
        text-align: center;
        font-weight: bold;
    }

    .social
    {
        list-style-type: none;
        background: #29AFBB;
        height: 52px;
        border: 2px solid#218C95;
    }

        .social li
        {
            padding-right: 20px;
            display: inline-block;
            font-size: 27px;
            border-bottom: 5px solid#29AFBB;
            cursor: pointer;
            margin-top: 5px;
        }

            .social li a
            {
                color: #fff;
                vertical-align: -webkit-baseline-middle;
            }
</style>

<script type="text/javascript">
    jQuery(function ($) {
        $(function () {
            $("#dateTimePicker").shieldDatePicker();

            $('#confirmPass').on('keyup', function () {
                if ($('#confirmPass').val() == $('#pass').val()) {
                    $('#passwordMatch').html('Passwords match!').css('color', 'green');
                }
                else {
                    $('#passwordMatch').html('Passwords do not match!').css('color', 'red');
                }
            });
        });
    });
</script>

<!-- Sign Up Form - END -->

</div>

</body>
</html>