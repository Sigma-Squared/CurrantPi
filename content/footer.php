<?php
  /*
   * Footer area. Using a bunch of inline echos to find out 
   * information about this system.
   *
   * The array $_SERVER[] contains a bunch of server and execution
   * environment information.
   *
   * Reading /proc/cpuinfo to find out the type of processor this
   * is running on.
   */
?>

<p>
  <?php echo $_SERVER['SERVER_NAME'] . " (" . $_SERVER['SERVER_ADDR'] . ")"; ?> 
   - 
  <?php echo $_SERVER['SERVER_SOFTWARE']; ?>
</p>
<p>
 <?php
    $name_full = shell_exec('cat /proc/cpuinfo | grep name | head -1');
    $name = explode (': ', $name_full);
    echo $name[1];
 ?>
</p>
<p>
  <a href="https://github.com/ColinWaddell/CurrantPi"><i class="demo-icon icon-github"></i></a>
  <a href="https://github.com/ColinWaddell/CurrantPi">Source</a>
</p>
<hr />
