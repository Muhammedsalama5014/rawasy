<?php
define("PATH",__DIR__ . '/');
define("URL","https://rawasymedicalcentreflr8.com/");

define("DB_SERVERNAME","localhost");
define("DB_USERNAME","u389444621_rawasymain");
define("DB_PASSWORD","Ahmed0111@");
define("DB_NAME","u389444621_rawasymain");

require_once (PATH . "classes/session.php");
require_once (PATH . "classes/file.php");
require_once (PATH . "classes/db.php");
require_once (PATH . "classes/request.php");
require_once (PATH . "classes/Models/admin.php");
require_once (PATH . "classes/Models/appointment.php");
require_once (PATH . "classes/Models/blog.php");
require_once (PATH . "classes/Models/contact.php");
require_once (PATH . "classes/Models/custumers.php");
require_once (PATH . "classes/Models/doctors.php");
require_once (PATH . "classes/Models/gallery.php");
require_once (PATH . "classes/Models/service.php");
require_once (PATH . "classes/Models/setting.php");
require_once (PATH . "classes/Validation/validationRule.php");
require_once (PATH . "classes/Validation/email.php");
require_once (PATH . "classes/Validation/image.php");
require_once (PATH . "classes/Validation/max.php");
require_once (PATH . "classes/Validation/numeric.php");
require_once (PATH . "classes/Validation/requiredFile.php");
require_once (PATH . "classes/Validation/required.php");
require_once (PATH . "classes/Validation/str.php");
require_once (PATH . "classes/Validation/validator.php");
require_once (PATH . "vendor/autoload.php");

use Clinic_two\Classes\Request;
use Clinic_two\Classes\Session;

$request = new Request();
$session = new Session();