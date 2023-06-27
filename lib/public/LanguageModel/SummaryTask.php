<?php
declare(strict_types=1);

/**
 * @copyright Copyright (c) 2023 Marcel Klehr <mklehr@gmx.net>
 *
 * @author Marcel Klehr <mklehr@gmx.net>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace OCP\LanguageModel;

/**
 * This is an absctract LanguageModel Task represents summarization
 * which sums up the passed text.
 * @since 28.0.0
 * @template-extends AbstractLanguageModelTask<ISummaryProvider>
 */
final class SummaryTask extends AbstractLanguageModelTask {
	/**
	 * @since 28.0.0
	 */
	public const TYPE = 'summarize';

	/**
	 * @inheritDoc
	 * @since 28.0.0
	 */
	public function visitProvider($provider): string {
		if (!$this->canUseProvider($provider)) {
			throw new \RuntimeException('SummaryTask#visitProvider expects ISummaryProvider');
		}
		return $provider->summarize($this->getInput());
	}

	/**
	 * @inheritDoc
	 * @since 28.0.0
	 */
	public function canUseProvider($provider): bool {
		return $provider instanceof ISummaryProvider;
	}

	/**
	 * @inheritDoc
	 * @since 28.0.0
	 */
	public function getType(): string {
		return self::TYPE;
	}
}
