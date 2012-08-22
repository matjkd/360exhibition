<h2>Create a User</h2>

<div id="box">
    <?=form_open('user/login/create_member')?>
        <div class="form" id="buying">

           <p>
               <strong>First Name</strong><br/>
               <?=form_input('firstname')?>
           </p>

             <p>
               <strong>Last Name</strong><br/>
               <?=form_input('lastname')?>
           </p>

             <p>
               <strong>UserName</strong><br/>
               <?=form_input('username')?>
           </p>

           <p>
               <strong>Password</strong><br/>
               <?=form_input('password')?>
           </p>
           <p>
               <strong>Repeat Password</strong><br/>
               <?=form_input('password2')?>
           </p>
           

<?=form_submit('submit', 'Submit')?>
        </div>
    <?=form_close()?>
</div>