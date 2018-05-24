
print '<h1>My PHP File</h1>';
 print '<br><br>';
 
function writeMessage($greeting_message) {
	print "Hello World.<br />";
	print $greeting_message . '<br />';
}

writeMessage("Great to meet you");
writeMessage("Nice to meet you");
writeMessage("Okay to meet you");
writeMessage("Cool to meet you");
writeMessage("Nice to meet you");

whatIsToday();

function whatIsToday() {
	// Goal:
	// Print date in the format Monday January 2, 2017

	print date("l F j, Y"); // Monday January 2, 2017
}
print "Today's date is: " . whatIsToday();

?> 