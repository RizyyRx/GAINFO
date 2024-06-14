<? if (file_exists($_SERVER['DOCUMENT_ROOT'] .'/gainfo/css/' . basename($_SERVER['PHP_SELF'], ".php") . ".css")) { ?>
    <link href="/gainfo/css/<?= basename($_SERVER['PHP_SELF'], ".php") ?>.css" rel="stylesheet">
<? } ?>