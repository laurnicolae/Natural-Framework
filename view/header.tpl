<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <title>{$title|default:"Framework page"}</title>
  <link href="{$base_url}/public/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div id="center">
<div id="wrapper">
{include file='menu.tpl' cache_lifetime=500}
{if isset($notification)}
    <div class="notification"><p>{$notification}</p></div>
{/if}