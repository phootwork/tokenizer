<?php
namespace phootwork\tokenizer;

class PhpTokenizer {
	
	public function __construct() {
	}

	/**
	 * 
	 * @param string $code
	 * @return TokenCollection
	 */
	public function tokenize($code) {
		$tokens = new TokenCollection();
		foreach (token_get_all($code) as $token) {
			$tokens->add(new Token($token));
		}

		return $tokens;
	}

}
