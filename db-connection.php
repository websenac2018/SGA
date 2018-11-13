<?php
  $host = "ec2-107-20-193-206.compute-1.amazonaws.com";
  $port = "5432";
  $dbname = "d3u459dfnnbibq";
  $user = "yncgsplxtjmbtd";
  $password = "8fe61412cb76a425fc435043a546c7ca8b4894686c6f9ba490656da62abee195";
  $pg_options = "--client_encoding=UTF8";

  function getConnection() {
    $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";
    $dbconn = pg_connect($connection_string);
  }

