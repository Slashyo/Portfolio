<?php

require_once "../config.php";

ini_set('SMTP', MAIL_SERVER);
ini_set('smtp_port', MAIL_PORT);
ini_set('sendmail_from', MAIL_FROM);

require_once "../model/lienModel.php";
require_once "../model/envoiMail.php";
require_once "../model/travauxModel.php";
require_once "../controller/publicController.php";
