<?php

assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);
assert_options(ASSERT_QUIET_EVAL, 1);
function assertHandler($file, $line, $code, $desc = null)
{
echo "Assertion failed at $file:$line: $code";
if ($desc) {
echo ": $desc";
}
echo "\n";
}
assert_options(ASSERT_CALLBACK, 'assertHandler');
function test():
$L = 'longestSubPalidrome';
assert("$L('racecar') == [0, 7]");
assert("$L('Racecar') == [0, 7]");
assert("$L('RacecarX') == [0, 7]");
assert("$L('Race carr') == [7, 9]");
assert("$L('') == [0, 0]");
assert("$L('something rac e car going') == [8,21]");
assert("$L('xxxxx') == [0, 5]");
1

assert("$L('Mad am I ma dam.') == [0, 15]");
return 1;
