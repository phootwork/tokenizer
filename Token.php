<?php
namespace phootwork\tokenizer;

class Token {
	
	public $type;
	public $contents;
	
	public function __construct($token = null) {
		if (is_array($token)) {
			$this->type = $token[0];
			$this->contents = $token[1];
		} else {
			$this->type = -1;
			$this->contents = $token;
		}
	}
	
	public function accept(TokenVisitorInterface $visitor) {
		return $visitor->visitToken($this);
	}

}
