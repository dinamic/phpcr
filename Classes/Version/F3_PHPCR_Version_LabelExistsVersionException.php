<?php
declare(ENCODING = 'utf-8');

/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */

/**
 * @package PHPCR
 * @subpackage Version
 * @version $Id$
 */

/**
 * Exception thrown by VersionHistory.addVersionLabel if moveLabel is set to
 * false and an attempt is made to add a label that already exists in the
 * VersionHistory.
 *
 * @package PHPCR
 * @subpackage Version
 * @version $Id$
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License, version 2
 */
class F3_PHPCR_Version_LabelExistsVersionException extends F3_PHPCR_Version_VersionException {
}

?>