<?php
/**
 * @author Hemant Mann <hemant.mann121@gmail.com>
 *
 * @copyright Copyright (c) 2017, ownCloud GmbH.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

if ((@include_once(dirname(__DIR__).'/vendor/autoload.php')) === false) {
    throw new \Exception('Cannot include autoload. Did you install dependencies using composer?');
}

if (!\OC_App::isEnabled('files_external')) {
	\OC_App::enable('files_external');
}

$app = new \OCA\Files_external_dropbox\AppInfo\Application();
$app->register();
