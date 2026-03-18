# Welcome to the mhvtl-gui project

Web Console GUI for mhvtl: A Linux Virtual Tape Library.

## Disclaimer

> This SOFTWARE PRODUCT is provided by me "as is" and "with all faults." I makes no representations or warranties of any kind concerning the safety, suitability, lack of viruses, inaccuracies, typographical errors, or other harmful components of this SOFTWARE PRODUCT. There are inherent dangers in the use of any software, and you are solely responsible for determining whether this SOFTWARE PRODUCT is compatible with your equipment and other software installed on your equipment. You are also solely responsible for the protection of your equipment and backup of your data, and I will not be liable for any damages you may suffer in connection with using, modifying, or distributing this SOFTWARE PRODUCT.

## Requirements

* PHP installed (could be tested by using `<?php phpinfo();`
* Setup sudo
  * Allow your web server user id to run commands locally as root
    e.g.: Run # echo "apache ALL=(ALL) NOPASSWD: ALL" >>/etc/sudoers
  * Comment out the line "Defaults requiretty" in /etc/sudoers
  * You may need to disable selinux to run sudo from httpd, Reported by crippa.andrea/MHVTL Forum
* Linux OS utilities
  * lsscsi (yum install lsscsi) (Required)
  * mtx (yum install mtx) (Required)
  * mt-st (yum install mt-st) (Required)
  * git version 1.7.4.1 or higher yum install git (Optional - for LIVE UPDATE Feature)
  * sysstat (yum install sysstat) (Optional)
  * sg3_utils (Optional) yum install sg3_utils

### Optional

* tgt 1.17 or higher from [http://stgt.sourceforge.net/](http://stgt.sourceforge.net/) used for iSCSI Target
* Internet connectivity for LIVE UPDATE Feature (Optional)

## Installation

Install MHVTL / Minimum Release 0.18 Version 15 ] e.g. Version: 0.18.15-git-xxxxxx (required)

Download MHVTL via Public git Repositories [https://github.com/markh794](https://github.com/markh794) or see [http://sites.google.com/site/linuxvtl2/](http://sites.google.com/site/linuxvtl2/)

### Apache web server

Add the following configuration to create an alias to `/mhvtl` in the Apache web server configuration

```
Alias /mhvtl "/var/www/html/mhvtl"
<Directory "/var/www/html/mhvtl">
  Options None
  AllowOverride None
  Order allow,deny
  Allow from all
</Directory>
```

Copy all MHVTL GUI files to the aliased directory specified above (`/var/www/html/mhvtl`).

Access MHVTL GUI via your web browser e.g. [http://localhost/mhvtl/](http://localhost/mhvtl/) or [http://10.0.0.10/mhvtl/](http://10.0.0.10/mhvtl/)

Log on with the password: "mhvtl"

> To change the default password, update the file ~go.php where it says "if ( $password == "mhvtl" )"

## Supported web browsers

* Internet Explorer 8
* FireFox
* Google Chrome (Application mode) for better experience

## Help and support

You found an issue ? Have a question / feedback ?

Feel free to [create an issue](https://github.com/dfranco/mhvtl-gui/issues/new) on this GitHub repo

## License

GPL v2 [http://www.gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)