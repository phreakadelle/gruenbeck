# Gruenbeck 
"Grünbeck Wasserenthärter" web stats

Best used for Grünbeck sc18 or sc23 water softeners.

# Original 
This repository has been forked from baycom/gruenbeck. 
Special thanks for the base work!

# Purpose of this fork
In this fork all Perl modules have been replaced with PHP modules.
This will make it easy and straight forward to run the code on a simple Apache server without too many additional modules.

This fork has separated the code into different components
* One class to contain all the Gruenbeck Parameters and the available Commands incl. Description
* One class to call the Gruenbeck WebService and provide the results as JSON output
* One script to read the JSON output and write it into a MySQL database

# Out Of Scope
The "edit" functionality is not implemented yet. Everyone is welcome to open a PR for that.
