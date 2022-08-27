<?php declare(strict_types=1);
/**
 * This file is part of the Phootwork package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license MIT License
 * @copyright Thomas Gossmann
 */
namespace phootwork\tokenizer;

class PhpTokenizer {
	/**
	 * 
	 * @param string $code
	 *
	 * @return TokenCollection
	 */
	public function tokenize(string $code): TokenCollection {
		$tokens = new TokenCollection();
		foreach (token_get_all($code) as $token) {
			$tokens->add(new Token($token));
		}

		return $tokens;
	}
}
