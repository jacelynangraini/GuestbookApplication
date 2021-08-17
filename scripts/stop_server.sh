#!/bin/bash
isExistHttps = `pgrep httpd`
if [[ -n  $isExistHttps ]]; then
    sudo systemctl stop httpd
fi
