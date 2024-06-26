<?php

declare(strict_types=1);

/**
 * @copyright Copyright (c) 2023 John Molakvoæ <skjnldsv@protonmail.com>
 *
 * @author John Molakvoæ <skjnldsv@protonmail.com>
 *
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
 * along with this program. If not, see <http://www.gnu.org/licenses/>
 *
 */
namespace OCA\SystemTags;

use OCP\Capabilities\ICapability;

class Capabilities implements ICapability {
	/**
	 * @return array{systemtags: array{enabled: true}}
	 */
	public function getCapabilities() {
		$capabilities = [
			'systemtags' => [
				'enabled' => true,
			]
		];
		return $capabilities;
	}
}
