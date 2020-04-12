<?php

namespace MvOliveira\DB;

class Postgres implements Db
{
    public function connect() :string
    {
        return 'connected to Posgres';
    }
}
