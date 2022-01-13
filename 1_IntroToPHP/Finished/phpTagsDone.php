<?php
echo "<p>This is a test using the first tag type.</p>";
// NOTE: if your file is strictly php you should omit the closing tag:
?> 

<?
// this requires short_open_tag in php.ini, but don't do it. 
echo "<p>This is a test using the second tag type.</p>";
?>

<script language="php">
// Also depricated.
echo "<p>This is a test using the third tag type.</p>";
</script>
