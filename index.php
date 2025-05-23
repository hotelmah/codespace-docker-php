<?php

/*----------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 * Licensed under the MIT License. See LICENSE in the project root for license information.
 *---------------------------------------------------------------------------------------*/

use KAPNET\ClsDataBaseMySqliKapnet;

require_once('class.db.mysqli.kapnet.php');

function sayHello($name) {
    echo "Hello $name!";
}

$db = new ClsDataBaseMySqliKapnet();
$db->getTableRecords(TempQuery: "SELECT * FROM tests");

?>

<html>
    <head>
        <title>Visual Studio Code Remote :: PHP</title>
    </head>
    <body>
        <?php

        sayHello(name: 'remote world');

        // phpinfo();
        $tempAry = $db->resultSetFetchAllRows();
        var_dump(value: $tempAry);
        ?>
    </body>
</html>