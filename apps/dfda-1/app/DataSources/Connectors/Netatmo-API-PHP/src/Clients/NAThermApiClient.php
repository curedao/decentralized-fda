<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

/** Wrapper ensuring backward compatibility with older SDK versions
 * DEPRECATED
 * You must not use this class
 */
require_once dirname(__FILE__, 2)."/Netatmo/autoload.php";
class NAThermApiClient extends Netatmo\Clients\NAThermApiClient {
}
?>
