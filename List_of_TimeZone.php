<?php
/**
 * Timezones list with GMT offset
 *
 * @return array
 * @link http://stackoverflow.com/a/9328760
 */
function tz_list() {
  $zones_array = array();
  $timestamp = time();
  foreach(timezone_identifiers_list() as $key => $zone) {
    date_default_timezone_set($zone);
    $zones_array[$key]['zone'] = $zone;
    $zones_array[$key]['diff_from_GMT'] = 'UTC/GMT ' . date('P', $timestamp);
  }
  return $zones_array;
}
?>


<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div style="margin-top: 20px;width:100px; overflow:hidden">
  <select style="font-family: 'Courier New', Courier, monospace; width:100px;">
    <option value="0">Please, select timezone</option>
    <?php foreach(tz_list() as $t) { ?>
      <option value="<?php print $t['zone'] ?>">
        <?php echo $t['diff_from_GMT'] . ' - ' . $t['zone'] ?>
      </option>
    <?php } ?>
  </select>
</div>


</body>
</html>