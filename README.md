# FreakyApache
Ultra-Simple web app for HTB purpouses.

## What is this for
HTTP utility server for hackthebox purpouses.

## What are the current features
You can serve and upload files. There's also an LDAPSearch command creator.

## How do I serve files?
Put them in the same directory as index.php. You can also blacklist files from being listed by adding them to the $file_blacklist variable

## How do I upload files?
POST justupload.php

The file will be uploaded into the upload/ directory with the same name as the unix timestamp of when it was uploaded.

## Acknowledgments

**It is up to the end user to secure their webserver configuration. No effort to do this has been made in this app. If you can't secure your webserver then you don't need this app.**

favicon.ico is comes from (Twemoji)[https://github.com/jdecked/twemoji/], licensed under CC-BY 4.0
