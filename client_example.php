<?php

/**
 *
 * Copyright MITRE 2012
 *
 * OpenIDConnectClient for PHP5
 * Author: Michael Jett <mjett@mitre.org>
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 *
 */

require __DIR__ . '/vendor/autoload.php';

use Jumbojett\OpenIDConnectClient;

$oidc = new OpenIDConnectClient(
    'Https://login.microsoftonline.com/5c9f03ae-d596-4a9f-be55-38fc378dee8c/v2.0/', //Url
    'a6839fe7-49f7-44db-b5ee-c5b401f60707', //Client ID
    '839v7W120Tqu91JkDnRW1E___ueYbhU8V-' //secretID
);

$oidc->authenticate();
$name = $oidc->requestUserInfo('given_name');

?>

<html>
<head>
    <title>Example OpenID Connect Client Use</title>
    <style>
        body {
            font-family: 'Lucida Grande', Verdana, Arial, sans-serif;
        }
    </style>
</head>
<body>

    <div>
        Hello <?php echo $name; ?>
    </div>

</body>
</html>



