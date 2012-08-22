<div  id="sidebox">
    <img  id="opener"  width="180px;" src="<?= base_url() ?>images/template/flyerdirect/quotebutton.png" />

    <div style="float:left"> <a href="<?= base_url() ?>design"><img alt="Design" width="180px" src="<?= base_url() ?>images/template/flyerdirect/DESIGN-Button.jpg" /></a></div>
  <div style="float:left">  <a href="<?= base_url() ?>print"><img alt="Print" width="180px" src="<?= base_url() ?>images/template/flyerdirect/PRINT-Button.jpg" /></a></div>
</div>
<div style="width:180px; margin:0 0 0 15px; ">
    We Accept<br/>
    <div style="float:left; margin-right:5px;">
        <img alt="we take visa" src="<?= base_url() ?>images/icons/payment/visa-curved-32px.png"/>
    </div>
    <div style="float:left; margin-right:5px;">
        <img alt="we take mastercard" src="<?= base_url() ?>images/icons/payment/mastercard-curved-32px.png"/>
    </div>
    <div style="float:left; margin-right:0px;">
        <img alt="we take delta" src="<?= base_url() ?>images/icons/payment/delta-curved-32px.png"/>
    </div>
    <div style="float:left; margin-right:5px;">
        <img alt="we take maestro" src="<?= base_url() ?>images/icons/payment/maestro-curved-32px.png"/>
    </div>
    <div style="float:left; margin-right:5px;">
        <img alt="we take solo" src="<?= base_url() ?>images/icons/payment/solo-curved-32px.png"/>
    </div>
    <div style="float:left; margin-right:0px;">
        <img alt="we take switch" src="<?= base_url() ?>images/icons/payment/switch-curved-32px.png"/>
    </div>
</div>

<div id="dialog" title="Get a Free Quote" style="display:none; ">




    <div id="quote_form">
        <?= form_open('email/quote'); ?>
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
            <?= form_label('Email') ?><br/>
            <?= form_input('email', set_value('email')) ?>
        </p>
        <?= form_label('Subject') ?>
        <p class="form_subject">
            <?= form_input('qsubject', set_value('qsubject')) ?>
        </p>

        <p class="form_message">
            <?= form_textarea('qmessage', set_value('qmessage')) ?>
        </p>

        Enter the word you see below<br/>



        <input type="text" name="captcha" value="" /><br/>
        <?= form_label($captcha['image']) ?>
    </div>
    <?= form_hidden('ip_address', $this->input->ip_address()) ?>
    <?= form_hidden('time', $captcha['time']) ?>
    <div id="contact_submit"><?= form_submit('submit', 'Submit') ?></div><br/>
    <?= form_close() ?>


</div>