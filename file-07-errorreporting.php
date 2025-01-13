<?php
 $var = "Alex";
 /*
 The php.ini file contains configurations to control how errors are reported. Below is a detailed breakdown of the various error reporting constants:
 
E_ALL: Reports everything except E_STRICT.
E_ERROR: Fatal errors that stop the script.
E_WARNING: Non-fatal errors.
E_PARSE: Syntax errors during parsing.
E_NOTICE: Informational notices (often about code that may be problematic).
E_STRICT: Warnings about non-standard coding practices.
E_CORE_ERROR: Fatal errors during PHP's startup sequence.
E_CORE_WARNING: Warnings during PHP’s startup sequence.
E_COMPILE_ERROR: Fatal compile-time errors.
E_COMPILE_WARNING: Compile-time warnings.
E_USER_ERROR: User-generated error (using trigger_error()).
E_USER_WARNING: User-generated warning.
E_USER_NOTICE: User-generated notice.
 
 Parse error: syntax error, unexpected token "echo" in D:\wamp64\www\php-tutorial-set\file-07-errorreporting.php on line 4 missing Semicolon
 */
 echo $var;

?>