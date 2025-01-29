<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;

trait DatabaseTransaction
{
    protected function beginTransaction()
    {
        DB::beginTransaction();
    }

    protected function commit()
    {
        DB::commit();
    }

    protected function rollBack()
    {
        DB::rollBack();
    }

    protected function transaction($closure, $retry = 5)
    {
        return DB::transaction($closure, $retry);
    }
}
