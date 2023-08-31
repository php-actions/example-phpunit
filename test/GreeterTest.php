<?php
namespace App\Test;

use App\Greeter;

class GreeterTest extends \PHPUnit\Framework\TestCase {
	public function testGreeterSaysHello() {
		$greeter = new Greeter();
		self::assertStringContainsString(
			"Hello",
			$greeter->greet()
		);
	}

	public function testGreeterUsesName() {
		$greeter = new Greeter();

		self::assertStringContainsString(
			"Hello, Moskow",
			$greeter->greet("Moskow")
		);
		self::assertStringContainsString(
			"Hello, Sarah",
			$greeter->greet("Sarah")
		);
	}
}
