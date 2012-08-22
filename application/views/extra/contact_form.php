<div id="contact_form">
    <?= form_open('email/send'); ?>
    <br/>
    <p class="form_name">
        <?= form_label('Full Name') ?><br/>
        <?= form_input('name', set_value('name')) ?>
    </p>

    <p class="form_phone">
        <?= form_label('Phone Number') ?><br/>
        <?= form_input('phone', set_value('phone')) ?>
    </p>



    <p class="form_email">
        <?= form_label('Email') ?>
        <?= form_input('email', set_value('email')) ?>
    </p>

    <p class="form_subject">
        <?= form_label('Subject') ?>
        <?= form_input('subject', set_value('subject')) ?>
    </p>


    <p class="form_subject">
        <?= form_label('Areas of interest') ?><br/>
        <?= form_checkbox('interest[]', 'Gym Membership', set_checkbox('interest', 'Gym Membership')) ?>Gym Membership<br/>
        <?= form_checkbox('interest[]', 'Easy Gym', set_checkbox('interest', 'Easy Gym')) ?>Easy Gym<br/>
        <?= form_checkbox('interest[]', 'VIP Days', set_checkbox('interest', 'VIP Days')) ?>VIP Days<br/>
        <?= form_checkbox('interest[]', 'Bar and Restaurant Bookings', set_checkbox('interest', 'Bar and Restaurant Bookings')) ?>Bar and Restaurant Bookings<br/>
        <?= form_checkbox('interest[]', 'Squash and Raquetball', set_checkbox('interest', 'Squash and Raquetball')) ?>Squash and Raquetball<br/>
        <?= form_checkbox('interest[]', 'Childrens Facilities', set_checkbox('interest', 'Childrens Facilities')) ?>Childrens Facilities<br/>
        <?= form_checkbox('interest[]', 'Senior Programmes', set_checkbox('interest', 'Senior Programmes')) ?>Senior Programmes<br/>
    </p>


    <p class="form_message">
        <?= form_label('Message') ?>
        <?= form_textarea('message', set_value('message')) ?>
    </p>
    
      <p class="form_subject">
      
        <?= form_checkbox('mailinglist', 'I do not wish to be on your mailing list', set_checkbox('mailinglist', 'I do not wish to be on your mailing list')) ?>Tick if you do not wish to receive future promotions from us<br/>
       
    </p>

    Enter the word you see below<br/>



    <input type="text" name="captcha" value="" /><br/><br/><?= form_label($captcha['image']) ?>
</div>
<?= form_hidden('ip_address', $this->input->ip_address()) ?>
<?= form_hidden('time', $captcha['time']) ?>
<div id="contact_submit"><?= form_submit('submit', 'Submit') ?></div><br/>
<?=
form_close()?>