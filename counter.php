<?php
  $counterFile = 'counter.txt';

  // Read the current count from the file
  $currentCount = intval(file_get_contents($counterFile));

  // Increment the count
  $currentCount++;

  // Write the updated count back to the file
  file_put_contents($counterFile, $currentCount);

  // Return the updated count as a response
  echo $currentCount;
?>
