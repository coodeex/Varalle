<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-02 22:28:51 --> Email could not been sent. Mailer Error (Line 179): Could not instantiate mail function.
ERROR - 2020-11-02 22:28:51 --> #0 C:\xampp\htdocs\ea\application\controllers\Appointments.php(575): EA\Engine\Notifications\Email->sendAppointmentDetails(Array, Array, Array, Array, Array, Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Text), Object(EA\Engine\Types\Url), Object(EA\Engine\Types\Email), Object(EA\Engine\Types\Text))
#1 C:\xampp\htdocs\ea\system\core\CodeIgniter.php(532): Appointments->ajax_register_appointment()
#2 C:\xampp\htdocs\ea\index.php(353): require_once('C:\\xampp\\htdocs...')
#3 {main}
