#!/usr/bin/env bash

# Hats off to selvinortiz @ github for figuring this whole mess out!!

# Change this to where ever your craft installation is 
craftdir='/home/iankropp/craft'

# Change this to your system's installation of php.ini
pathToIniFile="/etc/php/php.ini"
pathToTestDir="$(dirname ${0})/../tests"
pathToPhpUnit="$(dirname ${0})/../vendor/phpunit/phpunit/phpunit     "
pathToBootstrap="${craftdir}/app/tests/bootstrap.php"
pathToConfigFile="${craftdir}/app/tests/phpunit.xml"

php -c $pathToIniFile $pathToPhpUnit --bootstrap $pathToBootstrap --configuration $pathToConfigFile $pathToTestDir


