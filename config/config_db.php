<?php
class DB extends DBmysql {
   public $dbhost = 'localhost';
   public $dbuser = 'ict';
   public $dbpassword = 'nevergiveup';
   public $dbdefault = 'db_asset';
   public $use_utf8mb4 = true;
   public $allow_myisam = false;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
