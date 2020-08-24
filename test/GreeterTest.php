<?php
namespace App\Test;

use App\Greeter;

class GreeterTest extends \PHPUnit\Framework\TestCase {
	public function testGreeterSaysHello() {
		$greeter = new Greeter();
		self::assertContains(
			"Hello",
			$greeter->greet()
		);
	}

	public function testGreeterUsesName() {
		$greeter = new Greeter();

		self::assertContains(
			"Hello, Cody",
			$greeter->greet("Cody")
		);
		self::assertContains(
			"Hello, Sarah",
			$greeter->greet("Sarah")
		);
	}
}