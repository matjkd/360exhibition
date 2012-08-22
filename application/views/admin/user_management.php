

User Management

<div style="padding:5px; margin-bottom:10px; background:#ccc; ">
<h1>Create an Account</h1>
<fieldset>
    <legend>Personal Information</legend>
    <?php
     if($update_user == 1) {
           echo form_open('user/management/update_member');
           echo form_hidden('user_id', $user_id);
    } else {
          echo form_open('user/login/create_member');
    }
  
    
    ?>
Firstname<br/>
<input type="text" name="firstname" title="Firstname" value="<?=set_value('firstname', (isset($firstname)) ? $firstname : '' )?>"/>
Lastname<br/>
<input type="text" name="lastname" title="Lastname" value="<?=set_value('lastname', (isset($lastname)) ? $lastname : '' )?>"/>
Email<br/>
<input type="text" name="email_address" title="Email Address" value="<?=set_value('email_address', (isset($email)) ? $email : '' )?>"/>

<select name="role">
<option value="1" <?php echo set_select('role', '1'); ?> >Admin</option>
<option value="5" <?php echo set_select('role', '5', 'TRUE'); ?> >Customer</option>

</select>
  
</fieldset>

<fieldset>
    <legend>Login Info</legend>
    Username<br/>
    <input type="text" name="username" title="Username" value="<?=set_value('username', (isset($username)) ? $username : '' )?>"/>
    Password<br/>
        <input type="password" name="password" title="Password" value="<?=set_value('password')?>"/>
        Password Repeat<br/>
        <input type="password" name="password2" title="Password" value="<?=set_value('password2')?>"/>
    <?php
  
    echo form_hidden('registerDate', now());
    if($update_user == 1) {
         echo form_submit('update', 'Update User');
    } else {
         echo form_submit('submit', 'Create Acccount');
    }
   
    echo form_close();
    ?>

    <?php echo validation_errors('<p class="error">'); ?>
</fieldset>
</div>


<div style=" padding:5px; margin-bottom:10px; background:#ccc; ">
    User list

    <table id="datatable" width="100%">
        <thead>
            <tr>
                <td>
                    Username
                </td>
                <td>
                    Name
                </td>
                <td>
                    Role
                </td>
                  <td>role
                    Actions
                </td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($userlist as $row): ?>
            <tr>
                <td>
                   <?=$row->username?>
                </td>
                 <td>
                   <?=$row->firstname?>    <?=$row->lastname?>
                </td>
                <td>
                      <?=$row->role?>
                </td>
                 <td>
                     <a href="<?=base_url()?>user/management/edit_user/<?=$row->user_id?>">Edit</a>  
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>




    