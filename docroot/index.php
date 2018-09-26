<?php

function l($port, $l) {
  $url = 'http://' . $_SERVER['HTTP_HOST'] . ':' . $port;
  echo '<li><a href="' . $url . '">' . $l . '</a>';
}

echo '<ul>';
l(50070, 'Hadoop Namenode');
l(50075, 'Hadoop Datanode 1');
l(8080, 'Spark Master');
l(9001, 'Spark Notebook 1');
l(8088, 'HDFS Browser');
echo '</ul>';
