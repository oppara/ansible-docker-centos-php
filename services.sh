#!/bin/sh
set -eu

/sbin/service ntpd start
/sbin/service httpd start

tail -f /dev/null
