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

# Example

## API Call

### Request
```http://192.168.2.80/gruenbeck/gruenbeck.api.php?action=show&parameter=D_A_1_1,D_A_1_2,D_A_3_2,D_Y_1,D_A_1_3,D_Y_5```

### Response
```
// 20210104140349
// http://192.168.2.80/gruenbeck/gruenbeck.api.php?action=show&parameter=D_A_1_1,D_A_1_2,D_A_3_2,D_Y_1,D_A_1_3,D_Y_5

{
  "url": "http://192.168.2.181/mux_http",
  "clientId": 335,
  "command": "D_A_1_1|D_A_1_2|D_A_3_2|D_Y_1|D_A_1_3|D_Y_5|",
  "content": "id=335&show=D_A_1_1|D_A_1_2|D_A_3_2|D_Y_1|D_A_1_3|D_Y_5|~",
  "plain_response": "<data><code>ok</code><D_A_1_1>0.00</D_A_1_1><D_A_1_2>0.10</D_A_1_2><D_A_3_2>100</D_A_3_2><D_Y_1>293</D_Y_1><D_A_1_3>6.0</D_A_1_3><D_Y_5>0</D_Y_5></data>",
  "code": "ok",
  "results": {
    "D_A_1_1": {
      "key": "D_A_1_1",
      "displayName": "1. Austauscher - Aktueller Durchfluss",
      "value": "0.00"
    },
    "D_A_1_2": {
      "key": "D_A_1_2",
      "displayName": "1. Austauscher - Restkapazitaet",
      "value": "0.10"
    },
    "D_A_3_2": {
      "key": "D_A_3_2",
      "displayName": "1. Austauscher - Ueber",
      "value": "100"
    },
    "D_Y_1": {
      "key": "D_Y_1",
      "displayName": "Wasserverbrauch Gestern",
      "value": "293"
    },
    "D_A_1_3": {
      "key": "D_A_1_3",
      "displayName": "1. Austauscher - Kapazitaetszahl",
      "value": "6.0"
    },
    "D_Y_5": {
      "key": "D_Y_5",
      "displayName": "Aktueller Regenerationsschritt",
      "value": "0"
    }
  }
}
```


# Out Of Scope
The "edit" functionality is not implemented yet. Everyone is welcome to open a PR for that.
