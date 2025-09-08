<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  session_cache_limiter(null);
  require_once("../shared/common.php");

  $tab = "admin";
  $nav = "mail_settings";
  $focus_form_name = "editsettingsform";
  $focus_form_field = "libraryName";

  require_once("../functions/inputFuncs.php");
  require_once("../shared/logincheck.php");
  require_once("../shared/header.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);

  #****************************************************************************
  #*  Checking for query string flag to read data from database.
  #****************************************************************************
  if (isset($_GET["reset"])) {
    unset($_SESSION["postVars"]);
    unset($_SESSION["pageErrors"]);

    include_once("../classes/email/EmailSettings.php");
    include_once("../classes/email/EmailSettingsQuery.php");
    include_once("../functions/errorFuncs.php");
    $mailSetQ = new MailSettingsQuery();
    $mailSetQ->connect_e();
    if ($mailSetQ->errorOccurred()) {
      $mailSetQ->close();
      displayErrorPage($mailSetQ);
    }
    $mailSetQ->execSelect();
    if ($mailSetQ->errorOccurred()) {
      $mailSetQ->close();
      displayErrorPage($mailSetQ);
    }
    $MailSet = $mailSetQ->fetchRow();
    if ($MailSet === false) {
      $MailSet = new MailSettings();
    }
    
    $postVars["pwdForgottenSettings"] = $MailSet->getPwdForgottenSettings();
    $postVars["mailProcess"] = $MailSet->getMailProcess();
    $postVars["mailHost"] = $MailSet->getMailHost();
    $postVars["mailUser"] = $MailSet->getMailUser();
    $postVars["mailPwd"] = $MailSet->getMailPwd();
    $postVars["mailSmtpSecure"] = $MailSet->getMailSmtpSecure();
    $postVars["pwdForgottenCodeDuration"] = $MailSet->getPwdForgottenCodeDuration();
    
    $mailSetQ->close();
  } else {
    require("../shared/get_form_vars.php");
    # Bugfix, otherwise all fields are empty if we come from a failed form submission
    if (!isset($postVars['pwdForgottenSettings'])) {
        $postVars['pwdForgottenSettings'] = 0;
    }
    if (!isset($postVars['pwdForgottenCodeDuration'])) {
        $postVars['pwdForgottenCodeDuration'] = 2;
    }
    if (!isset($postVars['mailProcess'])) {
        $postVars['mailProcess'] = 0;
    }
  }
  
  #****************************************************************************
  #*  Create the Email settings fields.
  #****************************************************************************
  $PwdForgottenSettings = array(
      0 => $loc->getText('admin_PwdForgottenNone'),
      1 => $loc->getText('admin_PwdForgottenOr'),
      2 => $loc->getText('admin_PwdForgottenAnd')
  );
  $PwdForgottenCodeDuration = array(
      1 => 1,
      2 => 2,
      12 => 12,
      24 => 24,
      48 => 48
  );
  $mailProcess = array(
    0 => ' ',
    1 => 'php mail()',
    2 => 'phpMailer'
  );
  $mailSmtpSecure = array(
      0 => ' ',
      1 => 'ENCRYPTION_STARTTLS',
      2 => 'ENCRYPTION_SMTPS'
  );
  $fields = array(
      "admin_PwdForgottenSettings" => inputField('select', "pwdForgottenSettings", $postVars["pwdForgottenSettings"], NULL, $PwdForgottenSettings),
      "admin_PwdForgottenCodeDuration" => inputField('select', "pwdForgottenCodeDuration", $postVars["pwdForgottenCodeDuration"], NULL, $PwdForgottenCodeDuration),
      "admin_mailProcess" => inputField('select', "mailProcess", $postVars["mailProcess"], NULL, $mailProcess)
  );
  if(isset($postVars['mailProcess']) && $postVars['mailProcess'] == 2) {
    $fields = array(
      "admin_PwdForgottenSettings" => inputField('select', "pwdForgottenSettings", $postVars["pwdForgottenSettings"], NULL, $PwdForgottenSettings),
      "admin_PwdForgottenCodeDuration" => inputField('select', "pwdForgottenCodeDuration", $postVars["pwdForgottenCodeDuration"], NULL, $PwdForgottenCodeDuration),
      "admin_mailProcess" => inputField('select', "mailProcess", $postVars["mailProcess"], NULL, $mailProcess),
      "admin_mailHost" => inputField('text', "mailHost", $postVars["mailHost"]),
      "admin_mailUser" => inputField('text', "mailUser", $postVars["mailUser"]),
      "admin_mailPwd" => inputField('password', "mailPwd", $postVars["mailPwd"]),
      "admin_mailSmtpSecure" => inputField('select', "mailSmtpSecure", $postVars["mailSmtpSecure"], NULL, $mailSmtpSecure)
    );
  }

  #****************************************************************************
  #*  Display update message if coming from settings_edit with a successful update.
  #****************************************************************************
  if (isset($_GET["updated"])){
?>
  <font class="error"><?php echo $loc->getText("admin_mailSettingsUpdated"); ?></font>
<?php
  }
?>
      <div class="left primary formular">
        <div class="header1"><?php echo $loc->getText('admin_mailSettingsEditsettings'); ?></div>
        <div class="form">
            <div class="formContent">
                <form name="editEmailSettingsform" method="POST" action="../admin/email_settings_edit.php">
                    <div class="header2"><h1><?php echo $loc->getText('admin_PwdForgottenTitle'); ?></h1></div>
                    <?php
                    foreach ($fields as $title => $html) {
                        if ($title == 'admin_mailProcess') {
                                echo '<div class="header2"><h1>' . $loc->getText('admin_mailSettingTitle') . '</h1></div>';
                            }
                    ?>
                    
                        <div class="descriptionField"><?php echo $loc->getText($title); ?><br></div>
                        <div class="inputField">
                            <?php
                            echo $html;
                            if ($title == 'admin_PwdForgottenCodeDuration') {
                                echo '&nbsp;' . $loc->getText('admin_Duration');
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="submit"><input type="submit" value="<?php echo $loc->getText('adminSubmit'); ?>" class="button"></div>               
                </form>
            </div>
        </div>
      </div>

<?php include("../shared/footer.php"); ?>
