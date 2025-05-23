<?php

declare(strict_types=1);

namespace KAPNET;

date_default_timezone_set("America/Chicago");

require_once('class.db.mysqli.kapnet.base.php');

use KAPNET\ClsDataBaseMySQLiKapnetBase;

class ClsDataBaseMySqliKapnet extends ClsDataBaseMySQLiKapnetBase
{
    public function getTableRecords(string $TempQuery): void
    {
        $this->KAPNETMySQLiResultSet = $this->KAPNETMySQLi->query($TempQuery);
        // return $this->KAPNETMySQLi->query($TempQuery);
    }

    public function deleteUpdateRecord(string $TempQuery): bool
    {
        return $this->KAPNETMySQLi->real_query($TempQuery);
    }
}
