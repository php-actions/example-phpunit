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
}