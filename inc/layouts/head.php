<?php
$MENU             = new Menu();
$PAGE_TITLE       = $MENU->getPageTitle();
$MENU_ITEMS       = $MENU->getMenuItems();
$CUR_PAGE         = $MENU->getCurPage();
$CUR_PAGE_LIST    = $MENU->getCurPageList();
$CUR_PAGE_INDEX   = $MENU->getCurPageIndex();
?>

<!DOCTYPE html>
<html lang="<?=$LOCALE?>">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?=$PAGE_TITLE?></title>
  <link rel="stylesheet" href="/resource/css/style.css" />