<?php

namespace MvOliveira\DB;

class MySql implements Db
{
    use \MvOliveira\GetterSetter;

    public function connect() :string
    {
        return 'connected to MySQL';
    }
}
