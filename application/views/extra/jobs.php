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
    <?= form_label('Email') ?>
    <p class="form_email">
        <?= form_input('email') ?>
    </p>
    <?= form_label('Subject') ?>
    <p class="form_subject">
       
        <input type="text" name="subject" id="subject" value="Job Enquiry"  disable="disabled" onFocus="this.blur();">
    </p>
    <?= form_label('Message') ?>
    <p class="form_message">
        <?= form_textarea('message') ?>
    </p>

    Enter the word you see below<br/>



    <input type="text" name="captcha" value="" /><br/><br/><?= form_label($captcha['image']) ?>
</div>
<?= form_hidden('ip_address', $this->input->ip_address()) ?>
<?= form_hidden('time', $captcha['time']) ?>
<div id="contact_submit"><?= form_submit('submit', 'Submit') ?></div><br/>
<?=
form_close()?>