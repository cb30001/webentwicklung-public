<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">


            <?php helper('form'); echo form_open('Login/Login_Codeigniter');?>
            <div class="form-group">
                <label for="username">Nutzername eingeben</label>
                <input type="text" id="username" name="username" class="form-control"/>
                <span class="text-danger"><?php// echo form_error('username');?></span>
            </div>
            <div class="form-group">
                <label for="Password">Passwort eingeben</label>
                <input type="password" name="password" class="form-control">
                <span class="text-danger"><?php// echo form_error('password');?></span>
            </div>
            <div class="form-group">
                <?php if(isset($validation)): ?>
                    <div class="col">
                        <div class="alert alert-danger" role="alert">
                            <?php $validation->listErrors()?>
                        </div>
                    </div>
                <?php endif;?>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">

                <button type="submit" name="insert" value="Login" class="btn btn-primary">Submit</button>
            </div>
        </div>
        <?php form_close();?>
        <div class="col"></div>
    </div>


</div>
<?php if(isset($validation)): ?>
    <div class="col">
        <div class="alert alert-danger" role="alert">
            <?php $validation->listErrors()?>
        </div>
    </div>
<?php endif;?>
 <!--<form action="loginController" method="post">
     <input name="username" />
     <input name="password" />
     <input type=submit name="abschicken" />
 </form>-->

