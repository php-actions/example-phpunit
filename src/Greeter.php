<?php
namespace App;

class Greeter {
	public function greet(string $name = null):string {
		$str = "Bob is a Bird... Bob is a Plane... Bob is Superman!";
		$changed = preg_replace("/Bob is/", "It's", $str); // Noncompliant
		$changed = preg_replace("/\.\.\./", ";", $changed);

		$str = "Bob is a Bird... Bob is a Plane... Bob is Superman!";
		$changed = str_replace("Bob is", "It's", $str);
		$changed = str_replace("...", ";", $changed);

		if($name) {
			return "Hello, $name!";
		}

		return "Hello!";
	}
}
