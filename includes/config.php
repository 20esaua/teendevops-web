<?php

/* DATABASE CONFIGURATION */
define("HOST", "localhost");
define("USER", "root");//"codeday-team");
define("PASSWORD", "asdfasdf");//"tRu2EZez+t3&2*aGE2u!");
define("DATABASE", "codeday-team");

/* LOGIN AND REGISTRATION CONFIGURATION */
define("CAN_LOGIN", true);
define("CAN_REGISTER", true);
define("DEFAULT_ROLE", "member");
define("RECAPTCHA_KEY", ""); 
define("MAX_LOGIN_ATTEMPTS", 10);
define("LOGIN_ATTEMPT_TIMEOUT", 2); // in hours

/* COOKIE CONFIGURATION */
define("SESSION_ID_NAME", "cdt_session_id");

/* MISC CONFIGURATION */
define("SECURE", false); // FOR DEVELOPMENT ONLY!

?>
