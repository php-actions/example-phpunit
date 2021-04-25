<?php
namespace App\Test;

use App\EnvGreeter;

class EnvGreeterTest extends \PHPUnit\Framework\TestCase {
	/**
	 * For this test to pass, the environment variable "NAME" must be set
	 * to the value "Scarlett". This is to act as an example test that
	 * explains how to pass an environment variable from your Github
	 * Actions workflow.
	 */
	public function testEnvFromSystem() {
		$greeter = new EnvGreeter();
		self::assertStringContainsString(
			"Hello, Scarlett",
			$greeter->greetFromEnv("TEST_NAME")
		);
	}
}
