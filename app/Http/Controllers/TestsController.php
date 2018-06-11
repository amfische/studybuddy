<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\CommonMark\CommonMarkConverter;

class TestsController extends Controller
{
	public function testXSS()
	{
		$converter = new CommonMarkConverter(['html_input' => 'strip']);
		echo 'Start' . "</br>";

		echo $converter->convertToHtml('<script>alert("Hello XSS!");</script>');

		echo "</br>";

		echo $converter->convertToHtml('<a>heading one</a>');

		echo "</br>";
		echo 'end';
	}
}
