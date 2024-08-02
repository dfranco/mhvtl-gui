> [!NOTE]
> This repository is a clone of the original [mhvtl-gui](https://github.com/tomoconnor/mhvtl-gui) which have
> not been maintained since several years (all credits goes to it's original author [Tom O'Connor](https://github.com/tomoconnor)).
>
> My goal is to provide a safe, bug free and feature rich webUI to the [mhvtl](https://github.com/markh794/mhvtl) community users.
>
> Hope you'll enjoy the efforts!
>

# MHVTL Web GUI

MHVTL Web GUI for the Linux based Virtual Tape Library by [Mark Harvey](markh794@gmail.com)

## License

GPL v2 http://www.gnu.org/licenses/gpl-2.0.html

## Disclaimer

This SOFTWARE PRODUCT is provided by me "as is" and "with all faults." I makes no representations or warranties of any kind concerning the safety, suitability, lack of viruses, inaccuracies, typographical errors, or other harmful components of this SOFTWARE PRODUCT. There are inherent dangers in the use of any software, and you are solely responsible for determining whether this SOFTWARE PRODUCT is compatible with your equipment and other software installed on your equipment. You are also solely responsible for the protection of your equipment and backup of your data, and I will not be liable for any damages you may suffer in connection with using, modifying, or distributing this SOFTWARE PRODUCT. 

## Requirements

1. You will need a PHP enabled web server (required)
   Please test with "phpinfo();"
2. Setup sudo (required)
   * Allow your web server user id to run commands locally as root
     e.g.: Run # echo "apache ALL=(ALL) NOPASSWD: ALL" >>/etc/sudoers
   * Comment out the line "Defaults requiretty" in /etc/sudoers
   * You may need to disable selinux to run sudo from httpd, Reported by crippa.andrea/MHVTL Forum
3. Install some OS utility tools :
   * lsscsi (yum install lsscsi) (Required) 
   * mtx (yum install mtx) (Required)
   * mt-st (yum install mt-st) (Required)
   * git version 1.7.4.1 or higher yum install git (Optional - for LIVE UPDATE Feature)
   * sysstat (yum install sysstat) (Optional)
   * sg3_utils (Optional) yum install sg3_utils
4. Install MHVTL / Minimum Release 0.18 Version 15 ] e.g. Version: 0.18.15-git-xxxxxx (required)
   * Download MHVTL via Public git Repositories https://github.com/markh794 or see http://sites.google.com/site/linuxvtl2/ 
5. Internet connectivity for LIVE UPDATE Feature (Optional)
6. tgt 1.17 or higher from http://stgt.sourceforge.net/ (Optional) used for iSCSI Target
7. Supported Internet Browser : Internet Explorer 8, FireFox, and Google Chrome (Application mode ) for better experience

## Installation

1. Add a directory alias in your web server configuration file for MHVTL GUI:

   Example
   
   ```
   Alias /mhvtl "/var/www/html/mhvtl"
   <Directory "/var/www/html/mhvtl">
      Options None
      AllowOverride None
      Order allow,deny
      Allow from all
   </Directory>
   ```

2. Copy all MHVTL GUI files to the aliased directory specified above.
3. Access MHVTL GUI via your Internet Browser e.g. http://localhost/mhvtl/ or http://10.0.0.10/mhvtl/
4. Log on with password: "mhvtl"

> To change the default password, update the file ~go.php where it says "if ( $password == "mhvtl" )"

## Help and support

You found an issue ? Have a question / feedback ?

Feel free to [create an issue](https://github.com/dfranco/mhvtl-gui/issues/new) on this GitHub repo

~~For additional help or to report bugs, please visit MHVTL forums at:
http://mhvtl-linux-virtual-tape-library-community-forums.966029.n3.nabble.com~~