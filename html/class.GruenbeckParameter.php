<?php
class GruenbeckParameter {
    
    public static $FIELD_SEPARATOR = "|";
    public static $FINALIZER = "~"; 
      
    private $key;
    private $displayName;
    private $databaseColumnName;
    
    function __construct($pKey, $pDisplayName, $pColumnName = "") {
        $this->key =$pKey;
        $this->displayName =$pDisplayName;
        $this->databaseColumnName = $pColumnName;
    }
    
    public function getDisplayName() {
        return $this->displayName;
    }
    
    public function getKey() {
        return $this->key;
    }
    
    public function getDatabaseColumnName() {
        return $this->databaseColumnName;
    }
    
    public function __toString() {
        return $this->key;
    }        
    
    public static function getWasserverbrauchGestern() {        return new GruenbeckParameter('D_Y_1',      'Wasserverbrauch Gestern', "water_consumption"); }
    public static function getWasserverbrauchT1() {             return new GruenbeckParameter('D_Y_2_1',    'Wasserverbrauch T-1'); }
    public static function getWasserverbrauchT2() {             return new GruenbeckParameter('D_Y_2_2',    'Wasserverbrauch T-2'); }
    public static function getWasserverbrauchT3() {             return new GruenbeckParameter('D_Y_2_3',    'Wasserverbrauch T-3'); }
    public static function getWasserverbrauchT4() {             return new GruenbeckParameter('D_Y_2_4',    'Wasserverbrauch T-4'); }
    public static function getWasserverbrauchT5() {             return new GruenbeckParameter('D_Y_2_5',    'Wasserverbrauch T-5'); }
    public static function getWasserverbrauchT6() {             return new GruenbeckParameter('D_Y_2_6',    'Wasserverbrauch T-6'); }
    public static function getWasserverbrauchT7() {             return new GruenbeckParameter('D_Y_2_7',    'Wasserverbrauch T-7'); }
    public static function getWasserverbrauchT8() {             return new GruenbeckParameter('D_Y_2_8',    'Wasserverbrauch T-8'); }
    public static function getWasserverbrauchT9() {             return new GruenbeckParameter('D_Y_2_9',    'Wasserverbrauch T-9'); }
    public static function getWasserverbrauchT10() {            return new GruenbeckParameter('D_Y_2_10',   'Wasserverbrauch T-10'); }
    public static function getWasserverbrauchT11() {            return new GruenbeckParameter('D_Y_2_11',   'Wasserverbrauch T-11'); }
    public static function getWasserverbrauchT12() {            return new GruenbeckParameter('D_Y_2_12',   'Wasserverbrauch T-12'); }
    public static function getWasserverbrauchT13() {            return new GruenbeckParameter('D_Y_2_13',   'Wasserverbrauch T-13'); }
    public static function getWasserverbrauchT14() {            return new GruenbeckParameter('D_Y_2_14',   'Wasserverbrauch T-14'); }
    public static function getWasserverbrauchT15() {            return new GruenbeckParameter('D_Y_2_15',   'Wasserverbrauch T-15'); }
    public static function getWasserverbrauchT16() {            return new GruenbeckParameter('D_Y_2_16',   'Wasserverbrauch T-16'); }
    public static function getWasserverbrauchT17() {            return new GruenbeckParameter('D_Y_2_17',   'Wasserverbrauch T-17'); }
    public static function getWasserverbrauchT18() {            return new GruenbeckParameter('D_Y_2_18',   'Wasserverbrauch T-18'); }
    public static function getWasserverbrauchT19() {            return new GruenbeckParameter('D_Y_2_19',   'Wasserverbrauch T-19'); }
    public static function getWasserverbrauchT20() {            return new GruenbeckParameter('D_Y_2_20',   'Wasserverbrauch T-20'); }
    public static function getWasserverbrauchT21() {            return new GruenbeckParameter('D_Y_2_21',   'Wasserverbrauch T-21'); }
    public static function getWasserverbrauchT22() {            return new GruenbeckParameter('D_Y_2_22',   'Wasserverbrauch T-22'); }
    public static function getWasserverbrauchT23() {            return new GruenbeckParameter('D_Y_2_23',   'Wasserverbrauch T-23'); }
    public static function getWasserverbrauchT24() {            return new GruenbeckParameter('D_Y_2_24',   'Wasserverbrauch T-24'); }
    public static function getWasserverbrauchT25() {            return new GruenbeckParameter('D_Y_2_25',   'Wasserverbrauch T-25'); }
    public static function getWasserverbrauchT26() {            return new GruenbeckParameter('D_Y_2_26',   'Wasserverbrauch T-26'); }
    public static function getWasserverbrauchT27() {            return new GruenbeckParameter('D_Y_2_27',   'Wasserverbrauch T-27'); }
    public static function getAktuellerRegenerationsschritt() { return new GruenbeckParameter('D_Y_5',      'Aktueller Regenerationsschritt', "regeneration_step"); }
    public static function getRohwasserhaerte() {               return new GruenbeckParameter('D_D_1',      'Rohwasserhaerte 1');}
    public static function getSollwertWeichwasserhaerte() {     return new GruenbeckParameter('D_D_2',      'Sollwert Weichwasserhaerte');}
    public static function getInstallateurName() {              return new GruenbeckParameter('D_A_4_1',    'Installateur Name');}
    public static function getInstallateurTelefon() {           return new GruenbeckParameter('D_A_4_2',    'Installateur Telefon');}
    public static function getInstallateurEmail() {             return new GruenbeckParameter('D_A_4_3',    'Installateur Email');}
    public static function getSprache() {                       return new GruenbeckParameter('D_C_1_1',    'Sprache');}
    public static function getHaerteeinheit() {                 return new GruenbeckParameter('D_C_2_1',    'Haerteeinheit');}
    public static function getUhrzeit() {                       return new GruenbeckParameter('D_C_4_2',    'Uhrzeit'); }
    public static function getDatum() {                         return new GruenbeckParameter('D_C_5_2',    'Datum'); }
    public static function getAutomatischeZeitumstellung() {    return new GruenbeckParameter('D_C_5_3',    'Automatische Umstellung Sommer-/Winterzeit'); }
    public static function getRegenerationszeitpunkt() {        return new GruenbeckParameter('D_C_4_1',    'Regenerationszeitpunkt'); }
    public static function getRegeneration1() {                 return new GruenbeckParameter('D_C_4_3',    'Regeneration 1');}
    public static function getArbeitsweise() {                  return new GruenbeckParameter('D_C_5_1',    'Arbeitsweise');}
    public static function getDisplayAktivStandby() {           return new GruenbeckParameter('D_C_6_1',    'Display Aktiv im StandBy');}
    public static function getServiceIntervalldauer() {         return new GruenbeckParameter('D_C_7_1',    'Service Intervalldauer');}
    public static function getLeuchtringFunktion() {            return new GruenbeckParameter('D_C_8_1',    'LED-Leuchtring Funktion bei Wasserbehandlung, Bedienung, Störung (nicht bei softliQ:SC18)');}
    public static function getMailWeiterleitung1() {            return new GruenbeckParameter('D_Y_8_1_1',  'EMail Weiterleitung 1');}
    public static function getMailWeiterleitung2() {            return new GruenbeckParameter('D_Y_8_1_2',  'EMail Weiterleitung 2');}
    public static function getMailWeiterleitung3() {            return new GruenbeckParameter('D_Y_8_1_3',  'EMail Weiterleitung 3');}
    public static function getMailSMTPServerAdresse() {         return new GruenbeckParameter('D_Y_8_2',    'SMTP Server Adresse');}
    public static function getMailSMTPServerPort() {            return new GruenbeckParameter('D_Y_8_3',    'SMTP Server Port');}
    public static function getMailSMTPServerBenutzername() {    return new GruenbeckParameter('D_Y_8_4',    'Benutzername (Base64 verschl.)');}
    public static function getMailSMTPServerPasswort() {        return new GruenbeckParameter('D_Y_8_5',    'Passwort (Base64 verschl.)');}
    public static function getMailEMail() {                     return new GruenbeckParameter('D_Y_8_6',    'E-Mail-Adresse (Base64 verschl.)');}
    public static function getMailTelefon() {                   return new GruenbeckParameter('D_Y_8_7',    'Telefonnummer (Base64 verschl.)');}
    public static function getMailNachname() {                  return new GruenbeckParameter('D_Y_8_8',    'Nachname (Base64 verschl.)');}
    public static function getMailText() {                      return new GruenbeckParameter('D_Y_8_9',    'Text für Störmeldeweiterleitung');}
    public static function getMailTestemail() {                 return new GruenbeckParameter('D_Y_8_10',   'Test-E-Mail versenden');}
    public static function getGesamtdurchfluss() {              return new GruenbeckParameter('D_A_1_7',    'Gesamtdurchfluss der Anlage (bei softliQ:MC = 0°Wasser + Wasser über Verschneidung)');}
    public static function getSalzreichweite() {                return new GruenbeckParameter('D_A_2_3',    'Salzreichweite in Tagen');}
    public static function getAnzeigewert() {                   return new GruenbeckParameter('D_A_1_6',    'Anzeigewert = Istwert Weichwasserhärte bei Anlagendurchfluss');}
    public static function getZaehlerRegeneration() {           return new GruenbeckParameter('D_K_1',      'Zaehler Regeneration');}
    public static function getZaehlerWeichwassermenge() {       return new GruenbeckParameter('D_K_2',      'Zaehler Weichwassermenge (0 Grad dH)');}
    public static function getTageBisNaechsteWartung() {        return new GruenbeckParameter('D_A_2_2',    'Tage bis zur naechsten Wartung');}
    public static function getWLANIP() {                        return new GruenbeckParameter('D_C_3_6_1',  'WLAN IP Adresse');}
    public static function getWLANDefaultGateway() {            return new GruenbeckParameter('D_C_3_6_2',  'WLAN Default Gateway');}
    public static function getWLANPrimaryDNS() {                return new GruenbeckParameter('D_C_3_6_3',  'WLAN Primary DNS');}
    public static function getWLANSecondaryDNS() {              return new GruenbeckParameter('D_C_3_6_4',  'WLAN Secondary DNS');}
    public static function getWLANStatus() {                    return new GruenbeckParameter('D_C_3_6_5',  'WLAN Status (1 = verbunden)');}
    public static function getAPIP() {                          return new GruenbeckParameter('D_C_3_7_1',  'Access Point IP');}
    public static function getAPSSID() {                        return new GruenbeckParameter('D_C_3_7_2',  'Access Point SSID');}
    public static function getAPStatus() {                      return new GruenbeckParameter('D_C_3_7_3',  'Access Point Status');}
    public static function getSalzverbrauchProJahr() {          return new GruenbeckParameter('D_Y_3',      'Salzverbrauch pro Jahr');}
    public static function getSalzverbrauchT1() {               return new GruenbeckParameter('D_Y_3_1',    'Salzverbrauch T-1');}
    public static function getSalzverbrauchT2() {               return new GruenbeckParameter('D_Y_3_2',    'Salzverbrauch T-2');}
    public static function getSalzverbrauchT3() {               return new GruenbeckParameter('D_Y_3_3',    'Salzverbrauch T-3');}
    public static function getSalzverbrauchT4() {               return new GruenbeckParameter('D_Y_3_4',    'Salzverbrauch T-4');}
    public static function getSalzverbrauchT5() {               return new GruenbeckParameter('D_Y_3_5',    'Salzverbrauch T-5');}
    public static function getSalzverbrauchT6() {               return new GruenbeckParameter('D_Y_3_6',    'Salzverbrauch T-6');}
    public static function getSalzverbrauchT7() {               return new GruenbeckParameter('D_Y_3_7',    'Salzverbrauch T-7');}
    public static function getSalzverbrauchT8() {               return new GruenbeckParameter('D_Y_3_8',    'Salzverbrauch T-8');}
    public static function getSalzverbrauchT9() {               return new GruenbeckParameter('D_Y_3_9',    'Salzverbrauch T-9');}
    public static function getSalzverbrauchT10() {              return new GruenbeckParameter('D_Y_3_10',   'Salzverbrauch T-10');}
    public static function getSalzverbrauchT11() {              return new GruenbeckParameter('D_Y_3_11',   'Salzverbrauch T-11');}
    public static function getSalzverbrauchT12() {              return new GruenbeckParameter('D_Y_3_12',   'Salzverbrauch T-12');}
    public static function getSalzverbrauchT13() {              return new GruenbeckParameter('D_Y_3_13',   'Salzverbrauch T-13');}
    public static function getSalzverbrauchT14() {              return new GruenbeckParameter('D_Y_3_14',   'Salzverbrauch T-14');}
    public static function getRegenerationProzentsatz1() {      return new GruenbeckParameter('D_A_3_2_1',  'Prozentsatz der letzten 14 Regenerationen');}
    public static function getInbetriebnahmeDatum() {           return new GruenbeckParameter('D_Y_7',      'Datum der Inbetriebnahme');}
    public static function getMailStatusLetzteEmail() {         return new GruenbeckParameter('D_Y_8_11',   'Ergebnis letzter Email Versand');}
    public static function getRestkapazitaetAustauscher1() {    return new GruenbeckParameter('D_Y_10_1',   'Aktuelle Restkapazitaet Austauscher 1');}
    public static function getRestkapazitaetAustauscher2() {    return new GruenbeckParameter('D_Y_10_2',   'Aktuelle Restkapazitaet Austauscher 2');}
    public static function getAustauscherInBetrieb() {          return new GruenbeckParameter('D_Y_13',     'Austauscher in Betrieb');}
    public static function getDatumNaechsteRegeneration() {     return new GruenbeckParameter('D_Y_14',     'Vorausichtlich naechste Regeneration');}
    
    public static function getA1AktuellerDurchfluss() {         return new GruenbeckParameter('D_A_1_1',    '1. Austauscher - Aktueller Durchfluss',     'current_flow'); }
    public static function getA1Restkapazitaet() {              return new GruenbeckParameter('D_A_1_2',    '1. Austauscher - Restkapazitaet',           'capacity_remain'); }
    public static function getA1Kapazitaetszahl() {             return new GruenbeckParameter('D_A_1_3',    '1. Austauscher - Kapazitaetszahl',          'capacity_full'); }
    public static function getA1Restzeit() {                    return new GruenbeckParameter('D_A_2_1',    '1. Austauscher - Restzeit'); }
    public static function getA1LetzteRegeneration() {          return new GruenbeckParameter('D_A_3_1',    '1. Austauscher - Letzte Regeneration'); }
    public static function getA1Ueber() {                       return new GruenbeckParameter('D_A_3_2',    '1. Austauscher - Ueber',                    'regeneration_percent'); }
    
    public static function getA2AktuellerDurchfluss() {         return new GruenbeckParameter('D_A_1_4',    '2. Austauscher - Aktueller Durchfluss'); }
    public static function getA2Restkapazitaet() {              return new GruenbeckParameter('D_A_1_5',    '2. Austauscher - Restkapazitaet'); }
    public static function getA2Kapazitaetszahl() {             return new GruenbeckParameter('D_A_1_8',    '2. Austauscher - Kapazitaetszahl'); }
    public static function getA2Restzeit() {                    return new GruenbeckParameter('D_A_2_4',    '2. Austauscher - Restzeit'); }
    public static function getA2LetzteRegeneration() {          return new GruenbeckParameter('D_A_3_4',    '2. Austauscher - Letzte Regeneration'); }
    public static function getA2Ueber() {                       return new GruenbeckParameter('D_A_3_5',    '2. Austauscher - Ueber'); }
    
    public static function getVerschAktuellerDurchfluss() {     return new GruenbeckParameter('D_A_1_9',    'Aktueller Durchfluss'); }
    public static function getVerschIstwertWeichwasserhaerte() {return new GruenbeckParameter('D_A_1_6',    'Istwert Weichwasserhaerte'); }
    public static function getDurchflussParallelbetrieb() {     return new GruenbeckParameter('D_K_3',      'Parallelbetrieb Spitzenwert (nur MC32)'); }
    public static function getDurchflussUeberschreitung() {     return new GruenbeckParameter('D_K_4',      'Überschreitung Nenndurchfluss in min (nur MC32)'); }
    public static function getDurchflussA1Spitze() {            return new GruenbeckParameter('D_K_14',     'Austauscher 1 Spitzenwert'); }
    public static function getDurchflussA1Ueberschreitung() {   return new GruenbeckParameter('D_K_15',     'Überschreitung Nenndurchfluss A1 in min'); }
    public static function getDurchflussA2Spitze() {            return new GruenbeckParameter('D_K_16',     'Austauscher 2 Spitzenwert'); }
    public static function getDurchflussA2Ueberschreitung() {   return new GruenbeckParameter('D_K_17',     'Überschreitung Nenndurchfluss A2 in min'); }
                                                                
    public static function getWeichwasserMengeA1() {            return new GruenbeckParameter('D_K_18',     'Weichwassermenge Austauscher 1'); }
    public static function getWeichwasserMengeA2() {            return new GruenbeckParameter('D_K_19',     'Weichwassermenge Austauscher 2 (nur MC32)'); }
    public static function getRohwasserMenge() {                return new GruenbeckParameter('D_K_20',     'Rohwassermenge Verschneidung (nur MC32)'); }
    public static function getNachspeisemenge() {               return new GruenbeckParameter('D_K_21',     'Nachspeisemenge'); }
    
    public static function getAll() {
        $retVal = array();
        
        $retVal[] = GruenbeckParameter::getAktuellerRegenerationsschritt();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT1();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT2();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT3();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT4();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT5();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT6();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT7();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT8();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT9();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT10();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT11();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT12();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT13();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT14();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT15();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT16();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT17();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT18();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT19();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT20();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT21();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT22();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT23();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT24();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT25();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT26();
        $retVal[] = GruenbeckParameter::getWasserverbrauchT27();
        $retVal[] = GruenbeckParameter::getWasserverbrauchGestern();
        
        $retVal[] = GruenbeckParameter::getRohwasserhaerte();
        $retVal[] = GruenbeckParameter::getSollwertWeichwasserhaerte();
        $retVal[] = GruenbeckParameter::getInstallateurName();
        $retVal[] = GruenbeckParameter::getInstallateurTelefon();
        $retVal[] = GruenbeckParameter::getInstallateurEmail();
        $retVal[] = GruenbeckParameter::getSprache();
        $retVal[] = GruenbeckParameter::getHaerteeinheit();
        $retVal[] = GruenbeckParameter::getDatum();
        $retVal[] = GruenbeckParameter::getUhrzeit();
        $retVal[] = GruenbeckParameter::getAutomatischeZeitumstellung();
        $retVal[] = GruenbeckParameter::getRegenerationszeitpunkt();
        $retVal[] = GruenbeckParameter::getRegeneration1();
        $retVal[] = GruenbeckParameter::getArbeitsweise();
        $retVal[] = GruenbeckParameter::getDisplayAktivStandby();
        $retVal[] = GruenbeckParameter::getServiceIntervalldauer();
        $retVal[] = GruenbeckParameter::getLeuchtringFunktion();
        $retVal[] = GruenbeckParameter::getMailWeiterleitung1();
        $retVal[] = GruenbeckParameter::getMailWeiterleitung2();
        $retVal[] = GruenbeckParameter::getMailWeiterleitung3();
        $retVal[] = GruenbeckParameter::getMailSMTPServerAdresse();
        $retVal[] = GruenbeckParameter::getMailSMTPServerPort();
        $retVal[] = GruenbeckParameter::getMailSMTPServerBenutzername();
        $retVal[] = GruenbeckParameter::getMailSMTPServerPasswort();
        $retVal[] = GruenbeckParameter::getMailEMail();
        $retVal[] = GruenbeckParameter::getMailTelefon();
        $retVal[] = GruenbeckParameter::getMailNachname();
        $retVal[] = GruenbeckParameter::getMailText();
        $retVal[] = GruenbeckParameter::getMailTestemail();
        $retVal[] = GruenbeckParameter::getGesamtdurchfluss();
        $retVal[] = GruenbeckParameter::getSalzreichweite();
        $retVal[] = GruenbeckParameter::getAnzeigewert();
        //$retVal[] = GruenbeckParameter::getZaehlerRegeneration();
        //$retVal[] = GruenbeckParameter::getZaehlerWeichwassermenge();
        $retVal[] = GruenbeckParameter::getTageBisNaechsteWartung();
        
        $retVal[] = GruenbeckParameter::getWLANIP();
        $retVal[] = GruenbeckParameter::getWLANDefaultGateway();
        $retVal[] = GruenbeckParameter::getWLANPrimaryDNS();
        $retVal[] = GruenbeckParameter::getWLANSecondaryDNS();
        $retVal[] = GruenbeckParameter::getWLANStatus();
        
        $retVal[] = GruenbeckParameter::getAPIP();
        $retVal[] = GruenbeckParameter::getAPSSID();
        $retVal[] = GruenbeckParameter::getAPStatus();
        
        $retVal[] = GruenbeckParameter::getSalzverbrauchProJahr();
        $retVal[] = GruenbeckParameter::getSalzverbrauchT1();
        $retVal[] = GruenbeckParameter::getSalzverbrauchT2();
        $retVal[] = GruenbeckParameter::getSalzverbrauchT3();
        $retVal[] = GruenbeckParameter::getSalzverbrauchT4();
        $retVal[] = GruenbeckParameter::getSalzverbrauchT5();
        $retVal[] = GruenbeckParameter::getSalzverbrauchT6();
        $retVal[] = GruenbeckParameter::getSalzverbrauchT7();
        $retVal[] = GruenbeckParameter::getSalzverbrauchT8();
        $retVal[] = GruenbeckParameter::getSalzverbrauchT9();
        $retVal[] = GruenbeckParameter::getSalzverbrauchT10();
        $retVal[] = GruenbeckParameter::getSalzverbrauchT11();
        $retVal[] = GruenbeckParameter::getSalzverbrauchT12();
        $retVal[] = GruenbeckParameter::getSalzverbrauchT13();
        $retVal[] = GruenbeckParameter::getSalzverbrauchT14();
        $retVal[] = GruenbeckParameter::getRegenerationProzentsatz1();
        
        $retVal[] = GruenbeckParameter::getInbetriebnahmeDatum();
        $retVal[] = GruenbeckParameter::getMailStatusLetzteEmail();
        $retVal[] = GruenbeckParameter::getRestkapazitaetAustauscher1();
        $retVal[] = GruenbeckParameter::getRestkapazitaetAustauscher2();
        
        $retVal[] = GruenbeckParameter::getAustauscherInBetrieb();
        $retVal[] = GruenbeckParameter::getDatumNaechsteRegeneration();
        
        $retVal[] = GruenbeckParameter::getA1AktuellerDurchfluss();
        $retVal[] = GruenbeckParameter::getA1Restkapazitaet();
        $retVal[] = GruenbeckParameter::getA1Kapazitaetszahl();
        $retVal[] = GruenbeckParameter::getA1Restzeit();
        $retVal[] = GruenbeckParameter::getA1LetzteRegeneration();
        $retVal[] = GruenbeckParameter::getA1Ueber();
        
        $retVal[] = GruenbeckParameter::getA2AktuellerDurchfluss();
        $retVal[] = GruenbeckParameter::getA2Restkapazitaet();
        $retVal[] = GruenbeckParameter::getA2Kapazitaetszahl();
        $retVal[] = GruenbeckParameter::getA2Restzeit();
        $retVal[] = GruenbeckParameter::getA2LetzteRegeneration();
        $retVal[] = GruenbeckParameter::getA2Ueber();
        
        $retVal[] = GruenbeckParameter::getVerschAktuellerDurchfluss();
        $retVal[] = GruenbeckParameter::getVerschIstwertWeichwasserhaerte();
        //$retVal[] = GruenbeckParameter::getDurchflussParallelbetriebSpitze();
        //$retVal[] = GruenbeckParameter::getDurchflussUeberschreitung();
        //$retVal[] = GruenbeckParameter::getDurchflussA1Spitze();
        //$retVal[] = GruenbeckParameter::getDurchflussA1Ueberschreitung();
        //$retVal[] = GruenbeckParameter::getDurchflussA2Spitze();
        //$retVal[] = GruenbeckParameter::getDurchflussA2Ueberschreitung();
        //$retVal[] = GruenbeckParameter::getWeichwasserMengeA1();
        //$retVal[] = GruenbeckParameter::getWeichwasserMengeA2();
        //$retVal[] = GruenbeckParameter::getRohwasserMenge();
        //$retVal[] = GruenbeckParameter::getNachspeisemenge();
        
        return $retVal;
    }
}
?>