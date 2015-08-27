<?php
//===========================================================================\\
// Aardvark Topsites PHP 5.2                                                 \\
// Copyright (c) 2000-2009 Jeremy Scheff.  All rights reserved.              \\
//---------------------------------------------------------------------------\\
// http://www.aardvarktopsitesphp.com/                http://www.avatic.com/ \\
//---------------------------------------------------------------------------\\
// This program is free software; you can redistribute it and/or modify it   \\
// under the terms of the GNU General Public License as published by the     \\
// Free Software Foundation; either version 2 of the License, or (at your    \\
// option) any later version.                                                \\
//                                                                           \\
// This program is distributed in the hope that it will be useful, but       \\
// WITHOUT ANY WARRANTY; without even the implied warranty of                \\
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General \\
// Public License for more details.                                          \\
//===========================================================================\\

if (!defined('ATSPHP')) {
  die("This file cannot be accessed directly.");
}

// When you make a new translation, fill out the following four variables to
// get credit for you work.
$translation = 'Swedish (Svenska)';
$translator_name = 'Topplista.se';
$translator_email = 'info@topplista.se';
$translator_url = 'http://www.topplista.se/';

// Set this to the character encoding of your translation
$LNG['charset'] = "iso-8859-1";

// Global
$LNG['g_form_submit_short'] = "OK";
$LNG['g_username'] = "Anv�ndarnamn";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Titel";
$LNG['g_description'] = "Beskrivning";
$LNG['g_category'] = "Kategori"; // 4.1.0
$LNG['g_email'] = "E-post";
$LNG['g_banner_url'] = "Banner URL";
$LNG['g_password'] = "L�senord";
$LNG['g_average'] = "Genomsnitt";
$LNG['g_today'] = "Idag";
$LNG['g_yesterday'] = "Ig�r";
$LNG['g_daily'] = "Dagligen"; // 5.0
$LNG['g_this_month'] = "Den h�r m�naden"; // 5.0
$LNG['g_last_month'] = "Senaste m�naden"; // 5.0
$LNG['g_monthly'] = "M�natligen"; // 5.0
$LNG['g_this_week'] = "Den h�r veckan"; // 5.0
$LNG['g_last_week'] = "Senaste veckan"; // 5.0
$LNG['g_weekly'] = "Veckovis"; // 5.0
$LNG['g_pv'] = "Sidvisningar"; // 5.0
$LNG['g_overall'] = "Totalt"; // 5.0
$LNG['g_in'] = "In"; // 5.0
$LNG['g_out'] = "Ut"; // 5.0
$LNG['g_unq_pv'] = "Unika sidvisningar"; // 5.0
$LNG['g_tot_pv'] = "Sidvisningar"; // 5.0
$LNG['g_unq_in'] = "Unika in"; // 5.0
$LNG['g_tot_in'] = "In"; // 5.0
$LNG['g_unq_out'] = "Unika ut"; // 5.0
$LNG['g_tot_out'] = "Ut"; // 5.0
$LNG['g_invalid_u_or_p'] = "Felaktigt anv�ndarnamn eller l�senord. F�rs�k igen."; // 5.0
$LNG['g_invalid_u'] = "Felaktigt anv�ndarnamn. F�rs�k igen."; // 5.0
$LNG['g_invalid_p'] = "Felaktigt l�senord. F�rs�k igen."; // 5.0
$LNG['g_session_expired'] = "Din session har g�tt ut. F�rs�k igen."; // 5.0
$LNG['g_error'] = "Fel"; // 5.0
$LNG['g_delete_install'] = "Av s�kerhetssk�l m�ste du ta bort installationsmappen innan scriptet kan k�ras."; // 5.0
$LNG['g_ip'] = "IP-adress"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "�ndra anv�ndarkonto";
$LNG['edit_info_edited'] = "Ditt anv�ndarkonto �ndrades.";
$LNG['edit_password_blank'] = "L�mna f�ltet tomt f�r att beh�lla nuvarande l�senord"; // 4.0
$LNG['edit_delay'] = "�ndringar i titel eller URL m�ste f�rst godk�nnas av topplistans administrat�r innan de visas i topplistan."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Ing�ngssida";
$LNG['gateway_text'] = "Den h�r sidan finns till f�r att f�rhindra fusk. Klicka p� l�nken nedan f�r att komma till topplistan.";
$LNG['gateway_vote'] = "G� in och r�sta";
$LNG['gateway_no_vote'] = "G� in utan att r�sta"; // 5.0

// Install
$LNG['install_header'] = "Installation";
$LNG['install_welcome'] = "V�lkommen till Aardvark Topsites PHP 5. Fyll i formul�ret nedan f�r att installera scriptet.";
$LNG['install_sql_prefix'] = "Tabell-prefix (table prefix) - �ndra bara om det finns mer �n en installation i samma databas";
$LNG['install_error_chmod'] = "Kunde inte skriva till settings_sql.php. Se till att du har satt CHMOD 666 p� settings_sql.php.";
$LNG['install_error_sql'] = "Kunde inte ansluta till SQL-databasen. G� tillbaka och kontrollera inst�llningarna f�r SQL.";
$LNG['install_done'] = "Din topplista installerades. Ta bort katalogen install.";
$LNG['install_your'] = "Din topplista";
$LNG['install_admin'] = "Administration";
$LNG['install_manual'] = "Manual";
$LNG['upgrade_header'] = "Uppgradera";
$LNG['upgrade_welcome'] = "V�lkommen till Aardvark Topsites PHP 5. Se till att du har en backup av databasen innan du uppgraderar.";
$LNG['upgrade_version'] = "Se till att du uppgraderar fr�n version %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Uppgraderingen st�djer bara Aardvark Topsites PHP 4.1.0 eller senare version.";
$LNG['upgrade_done'] = "Din topplista uppgraderades. Ta bort katalogen install.";
$LNG['install_mailing_list'] = "Om du vill prenumerera p� Aardvark Topsites PHP:s nyhetsbrev, skriv in din e-postadress nedan. Nyhetsbrev skickas ut i sparsamt antal och inneh�ller viktiga kung�relser om scriptet, s�som information om uppgraderingar och s�kerhetsrisker."; // 5.2.0

// Join
$LNG['join_header'] = "Registrera ny webbplats";
$LNG['join_enter_text'] = "Skriv in texten som den visas i bilden nedan"; // 4.2.2
$LNG['join_enter_text_read'] = "Sv�rt att tyda?"; // 5.2.0
$LNG['join_user'] = "Anv�ndare"; // 5.0
$LNG['join_website'] = "Webbplats"; // 5.0
$LNG['join_banner_size'] = "(Maximal storlek: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Skriv in ett giltigt anv�ndarnamn: anv�nd bara bokst�ver, siffror, understreck och bindestreck."; // 5.0
$LNG['join_error_username_duplicate'] = "Skriv in ett giltigt anv�ndarnamn: anv�ndarnamnet du skrev anv�nds redan."; // 5.0
$LNG['join_error_url'] = "Skriv in en giltig URL.";
$LNG['join_error_email'] = "Skriv in en giltig e-postadress.";
$LNG['join_error_title'] = "Skriva in en titel f�r din webbplats.";
$LNG['join_error_password'] = "Skriv in ett l�senord..";
$LNG['join_error_confirm_password'] = "L�senorden st�mde in �verens med varandra."; // 5.2.0
$LNG['join_error_urlbanner'] = "Skriv in URL till en giltig banner. L�mna f�ltet tomt om banner saknas."; // 5.2.0
$LNG['join_error_time'] = "Uppdatera inte den h�r sidan."; // 4.2.0
$LNG['join_error_captcha'] = "Ordet du skrev st�mde inte �verens med inneh�llet i bilden."; // 4.2.2
$LNG['join_error_question'] = "Ditt svar var felaktigt. R�tta till detta f�r att intyga att du �r en riktig person och inte en s� kallad bot som spammar automatiskt."; // 5.2.0
$LNG['join_thanks'] = "Tack f�r din registrering! L�gg in den h�r l�nkkoden p� din webbplats f�r att b�rja skicka r�ster.";
$LNG['join_change_warning'] = "Om du �ndrar koden riskerar du att den inte fungerar.";
$LNG['join_welcome'] = "V�lkommen till %s";
$LNG['join_welcome_admin'] = "En ny webbplats har registrerats.";
$LNG['join_approve'] = "Tack f�r din registrering! Din webbplats kommer visas i topplistan s� fort topplistans administrat�r har godk�nt webbplatsen. Du kommer att f� ett e-postmeddelande med mer information n�r din webbplats har godk�nts."; // 5.2.0
$LNG['join_type'] = "Typ av anv�ndarkonto"; // 5.1.0
$LNG['join_standard'] = "Standard"; // 5.1.0
$LNG['join_error_top'] = "Din registrering inneh�ll felaktigheter. R�tta till detta nedan."; // 5.2.0
$LNG['join_ban_top'] = "Din registrering inneh�ll saker som har bannlysts av topplistans administrat�r."; // 5.2.0
$LNG['join_security'] = "S�kerhet"; // 5.2.0
$LNG['join_confirm_password'] = "Bekr�fta l�senord"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "L�nkkod"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Gl�mt l�senordet"; // 5.0
$LNG['lost_pw_forgot'] = "Gl�m l�senordet?"; // 5.0
$LNG['lost_pw_get'] = "�terf� l�senordet"; // 5.0
$LNG['lost_pw_emailed'] = "Du har f�tt e-post med instruktioner."; // 5.0
$LNG['lost_pw_email'] = "F�r att skapa ett nytt l�senord till ditt anv�ndarkonto, g� hit:"; // 5.0
$LNG['lost_pw_new'] = "Skriv in ett nytt l�senord"; // 5.0
$LNG['lost_pw_set_new'] = "V�lj nytt l�senord"; // 5.0
$LNG['lost_pw_finish'] = "Ditt l�senord har �ndrats."; // 5.0

// Main Page
$LNG['main_header'] = "Topplista"; // 5.0
$LNG['main_all'] = "Alla webbplatser"; // 4.2.0
$LNG['main_method'] = "Sortera efter";
$LNG['main_members'] = "Webbplatser";
$LNG['main_menu_rankings'] = "Topplista";
$LNG['main_menu_join'] = "Registrera ny webbplats";
$LNG['main_menu_random'] = "Slumpa en webbplats";
$LNG['main_menu_search'] = "S�k";
$LNG['main_menu_lost_code'] = "Gl�mt koden"; // 5.0
$LNG['main_menu_lost_password'] = "Gl�mt l�senordet"; // 5.0
$LNG['main_menu_edit'] = "�ndra anv�ndaruppgifter";
$LNG['main_menu_user_cp'] = "Kontrollpanel"; // 5.0
$LNG['main_featured'] = "Utvald webbplats"; // 4.0.2
$LNG['main_executiontime'] = "Sidvisningstid"; // 4.0
$LNG['main_queries'] = "SQL-fr�gor"; // 4.0
$LNG['main_powered'] = "Med kraft fr�n";

// Ranking Table
$LNG['table_stats'] = "Statistik";
$LNG['table_unique'] = "Unika";
$LNG['table_total'] = "Totalt";
$LNG['table_rank'] = "Placering";
$LNG['table_title'] = "Titel"; // 4.0
$LNG['table_description'] = "Beskrivning"; // 4.0
$LNG['table_movement'] = "Trend";
$LNG['table_up'] = "Upp"; // 5.0
$LNG['table_down'] = "Ner"; // 5.0
$LNG['table_neutral'] = "Of�r�ndrad"; // 5.0
$LNG['table_your_site_here'] = "Din webbplats h�r"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "Betyg och recension";
$LNG['rate_message'] = "V�lj ett betyg och skriv in en recension �t %s i f�ltet nedan."; // 5.2.0
$LNG['rate_rating'] = "Ge betyg";
$LNG['rate_review'] = "Skriv recension - bara text, ingen HTML"; // 5.0
$LNG['rate_thanks'] = "Tack f�r ditt betyg.";
$LNG['rate_error'] = "Du har redan gett betyg �t den h�r webbplatsen.";
$LNG['rate_back'] = "Tillbaka till statistiken";
$LNG['rate_email_admin'] = "En ny kommentar har skrivits i din topplista."; // 5.1.0

// Search
$LNG['search_header'] = "S�k";
$LNG['search_off'] = "S�kfunktionen har inaktiverats.";
$LNG['search_no_sites'] = "Hittade inga webbplatser i topplistan som matchade din s�kning."; // 5.0
$LNG['search_prev'] = "F�reg�ende"; // 3.2.1
$LNG['search_next'] = "N�sta"; // 3.2.1
$LNG['search_displaying_results'] = "Visar %s till %s av totalt %s s�kresultat p� s�kordet <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Statistik";
$LNG['stats_info'] = "Information";
$LNG['stats_member_since'] = "Registreringsdatum"; // 5.0
$LNG['stats_rating_avg'] = "Betyg i genomsnitt";
$LNG['stats_rating_num'] = "Antal betyg";
$LNG['stats_rate'] = "Ge betyg eller skriv recension";
$LNG['stats_reviews'] = "Recensioner";
$LNG['stats_allreviews'] = "Visa alla recensioner"; // 4.0
$LNG['stats_week'] = "Vecka"; // 5.0
$LNG['stats_highest'] = "H�gst"; // 5.0
$LNG['stats_overall'] = "Allm�n statistik"; // 5.2.0
$LNG['stats_overall_average'] = "I genomsnitt (senaste 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Totalt (sedan starten)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Topp %s webbplatser"; // 4.0
$LNG['ssi_new'] = "%s senaste webbplatserna"; // 5.0
$LNG['ssi_all'] = "Alla webbplatser"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Kontrollpanel"; // 5.0
$LNG['user_cp_login'] = "Logga in"; // 5.0
$LNG['user_cp_logout'] = "Logga ut"; // 5.0
$LNG['user_cp_welcome'] = "V�lkommen till kontrollpanelen. Anv�nd l�nkarna i menyn till v�nster f�r att �ndra ditt anv�ndarkonto."; // 5.0
$LNG['user_cp_logout_message'] = "Du har loggats ut fr�n kontrollpanelen."; // 5.0
$LNG['user_cp_login_long'] = "Logga in med ditt anv�ndarnamn och l�senord eller med ditt OpenID."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Kunde inte hitta en OpenID-server f�r %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Du m�ste registrera dig som anv�ndare f�r att f� tillg�ng till kontrollpanelen."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Ett fel intr�ffade vid inloggningen. G� tillbaka och f�rs�k igen."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Du m�ste ges beh�righet f�r att forts�tta. G� tillbaka och f�rs�k igen."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Felmeddelande fr�n server: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Du kan inte komma �t din kontrollpanel innan din webbplats har godk�nts av topplistans administrat�r. Du kommer att f� ett e-postmeddelande s� fort din webbplats har godk�nts."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Godk�nn nya webbplatser"; // 5.0
$LNG['a_approve'] = "Godk�nn"; // 4.0
$LNG['a_approve_none'] = "Inga webbplatser v�ntar p� godk�nnande."; // 4.0
$LNG['a_approve_done'] = "Webbplatsen godk�ndes."; // 4.0
$LNG['a_approve_dones'] = "Webbplatserna godk�ndes."; // 4.0
$LNG['a_approve_sel'] = "Med markerade:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "Godk�nn �ndrade webbplats"; // 5.2.0
$LNG['a_approve_edited_none'] = "Inga webbplatser har �ndrats."; // 5.2.0
$LNG['a_approve_edited_old'] = "Tidigare titel och URL"; // 5.2.0
$LNG['a_approve_edited_new'] = "�ndrad titel och URL"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Avsl�"; // 5.2.0
$LNG['a_approve_edited_done'] = "�ndringarna godk�ndes."; // 5.2.0
$LNG['a_approve_rejected_done'] = "�ndringarna godk�ndes inte."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Godk�nn nya recensioner"; // 5.0
$LNG['a_approve_rev_none'] = "Inga recensioner v�ntar p� godk�nnande."; // 5.0
$LNG['a_approve_rev_done'] = "Recensionen godk�ndes."; // 5.0
$LNG['a_approve_rev_dones'] = "Recensionerna godk�ndes."; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "S�kerhetskopiera databas"; // 5.2.0
$LNG['a_backup_warn'] = "Detta skapar en backup med alla anv�ndare, statistik och inst�llningar. Om topplistan har m�nga anv�ndare, kan det ta en l�ng stund och generera en stor fil."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Skapa en ny sida"; // 5.1.0
$LNG['a_create_page_id'] = "Sid-ID - det kommer att anv�ndas i URL:en, s� det kan bara inneh�lla bokst�ver, siffror, understreck och bindestreck"; // 5.1.0
$LNG['a_create_page_error_id'] = "Sid-ID:n kan bara inneh�lla bokst�ver, siffror, understreck och bindestreck. G� tillbaka och v�lj ett annat sid-ID."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Det finns redan en sida med detta sid-ID. G� tillbaka och v�lj ett annat sid-ID."; // 5.1.0
$LNG['a_create_page_created'] = "Sidan skapades. Du m�ste l�gga in en l�nk till %s manuellt i wrapper.html."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Ta bort anv�ndarkonto"; // 5.0
$LNG['a_del_headers'] = "Ta bort anv�ndarkonton"; // 5.0
$LNG['a_del_done'] = "Anv�ndarkontot togs bort."; // 5.0
$LNG['a_del_dones'] = "Anv�ndarkontona togs bort."; // 5.0
$LNG['a_del_warn'] = "�r du s�ker p� att du vill ta bort %s?"; // 5.0
$LNG['a_del_multi'] = "dessa %s anv�ndarkonton"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Ta bort filtrerade ord"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Ta bort filtrerade ord"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Det filtrerade ordet har tagits bort."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "De filtrerade orden har tagits bort."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "�r du s�ker p� att du vill ta bort %s fr�n listan �ver filtrerade ord?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "dessa %s ord"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Felaktigt ID-nummer f�r filtrerade ord. G� tillbaka och f�rs�k igen."; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "Ta bort bannlysning"; // 5.2.0
$LNG['a_del_ban_headers'] = "Ta bort bannlysningar"; // 5.2.0
$LNG['a_del_ban_done'] = "Bannlysningen �r nu borttagen."; // 5.2.0
$LNG['a_del_ban_dones'] = "Bannlysningarna �r nu borttagna."; // 5.2.0
$LNG['a_del_ban_warn'] = "�r du s�ker p� att du vill ta bort %s fr�n listan �ver bannlysningar?"; //5.2.0
$LNG['a_del_ban_multi'] = "dessa %s bannlysningar"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "Felaktigt bannlysnings-ID. F�rs�k igen."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Ta bort sida"; // 5.1.0
$LNG['a_del_page_headers'] = "Ta bort sidor"; // 5.1.0
$LNG['a_del_page_done'] = "Sidan togs bort."; // 5.1.0
$LNG['a_del_page_dones'] = "Sidorna togs bort."; // 5.1.0
$LNG['a_del_page_warn'] = "�r du s�ker p� att du vill ta bort %s?"; //5.1.0
$LNG['a_del_page_multi'] = "dessa %s sidor"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Felaktigt sid-ID. G� tillbaka och f�rs�k igen."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Delete Review"; // 5.0
$LNG['a_del_rev_headers'] = "Delete Reviews"; // 5.0
$LNG['a_del_rev_done'] = "The review has been deleted."; // 5.0
$LNG['a_del_rev_dones'] = "The reviews have been deleted."; // 5.0
$LNG['a_del_rev_warn'] = "Are you sure you want to delete this review?"; //5.0
$LNG['a_del_rev_warns'] = "Are you sure you want to delete these reviews?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Invalid review ID.  Please try again."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "�ndra anv�ndaruppgifter"; // 5.0
$LNG['a_edit_site_is'] = "Den h�r webbplatsen �r"; // 4.0
$LNG['a_edit_active'] = "Aktiv (visas)"; // 4.0
$LNG['a_edit_inactive'] = "Inaktiv (dold)"; // 5.0
$LNG['a_edit_edited'] = "Anv�ndaruppgifterna �ndrades.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "�ndra filtrerade ord"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Det filtrerade ordet har �ndrades."; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "�ndra bannlysning"; // 5.2.0
$LNG['a_edit_ban_edited'] = "Bannlysningen �ndrades."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "�ndra sida"; // 5.1.0
$LNG['a_edit_page_content'] = "Inneh�ll - HTML �r till�tet"; // 5.1.0
$LNG['a_edit_page_edited'] = "Sidan �ndrades."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "�ndra recension"; // 5.0
$LNG['a_edit_rev_edited'] = "Recensionen �ndrades.";

// Admin > Email Members
$LNG['a_email_header'] = "Skicka e-post"; // 5.0
$LNG['a_email_subject'] = "�mne"; // 4.2.0
$LNG['a_email_message'] = "Meddelande"; // 4.2.0
$LNG['a_email_msg_sent'] = "E-post skickades till %s"; // 5.0
$LNG['a_email_not_sent'] = "Kunde inte skicka till %s"; // 5.0
$LNG['a_email_sent'] = "Skickade e-post till %s anv�ndare."; // 4.2.0
$LNG['a_email_failed'] = "Kunde inte skicka e-post till %s anv�ndare."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Du �r nu utloggad."; // 5.0

// Admin > Main
$LNG['a_header'] = "Administration"; // 5.0
$LNG['a_main'] = "V�lkommen till administrationen. Anv�nd l�nkarna i menyn till v�nster f�r att administrera din topplista."; // 5.0
$LNG['a_main_approve'] = "1 webbplats v�ntar p� att godk�nnas."; // 5.0
$LNG['a_main_approves'] = "%s webbplatser v�ntar p� att godk�nnas."; // 5.0
$LNG['a_main_approve_edit'] = "1 webbplats har �ndrats och v�ntar p� godk�nnande."; // 5.2.0
$LNG['a_main_approve_edits'] = "%s webbplatser har �ndrats och v�ntar p� godk�nnande."; // 5.2.0
$LNG['a_main_approve_rev'] = "1 recension v�ntar p� att godk�nnas."; // 5.0
$LNG['a_main_approve_revs'] = "%s recensioner v�ntar p� att godk�nnas."; // 5.0
$LNG['a_main_your'] = "Din version"; // 5.0
$LNG['a_main_latest'] = "Senaste versionen"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarkind.com/\">Aardvark Topsites PHP</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Anv�ndare"; // 5.0
$LNG['a_man_actions'] = "Alternativ"; // 4.2.0
$LNG['a_man_edit'] = "�ndra"; // 4.2.0
$LNG['a_man_delete'] = "Ta bort"; // 4.2.0
$LNG['a_man_email'] = "Skicka e-post"; // 4.2.0
$LNG['a_man_all'] = "Markera alla"; // 5.0
$LNG['a_man_none'] = "Avmarkera alla"; // 5.0
$LNG['a_man_del_sel'] = "Ta bort markerade"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Ordfilter"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Skriv in ett ord och vad det ska ers�ttas med nedan. Till exempel, skriv in \"fan\" i ordf�ltet och \"f*n\" i ers�ttningsf�ltet."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Exakt matchning g�r att bara det exakta ordet ers�tts. Global matchning g�r att det g�ller alla ord och meningar d�r bokstavskombinationen f�rekommer. Allts�, global matchning av \"fan\" g�r att ocks� \"fantastisk\" och \"soffan\" �ndras."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Ord"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Ers�ttning"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Matchning"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Exakt"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Globalt"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Filtrera ord"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" har lagts till i ordfiltret."; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "Bannlysningar"; // 5.2.0
$LNG['a_man_ban_instructions'] = "F�r att bannlysna webbplatser och anv�ndare fr�n din topplista, fyll i f�lten nedan. N�r en anv�ndare registrerar sig, kontrolleras URL, e-postadress, anv�ndarnamn och IP-adress. N�r en webbplats �ndras, kontrolleras URL och e-postadress.<br /><br />Nya bannlysningar p�verkar inte redan existerande anv�ndare."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "Exakt matching kommer bara matcha den exakta teckenstr�ngen. Global matchning kommer matcha allt som inneh�ller teckenstr�ngen. S�, global matchning av http://www.topplista.se/ kommer matcha alla webbadresser som inneh�ller http://www.topplista.se/ i webbadressen, medan en exakt matchning av http://www.topplista.se/ bara kommer matcha den enda webbadressen."; // 5.2.0
$LNG['a_man_ban_string'] = "Teckenstr�ng"; // 5.2.0
$LNG['a_man_ban_field'] = "F�lt"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" har lagts till i listan �ver bannlysningar."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "�ndra sidor"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Recensioner"; // 5.0
$LNG['a_man_rev_enter'] = "F�r att �ndra recensioner tillh�rande en webbplats, skriv in webbplatsens anv�ndarnamn nedan."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Recension"; // 5.0
$LNG['a_man_rev_date'] = "Datum"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Meny";
$LNG['a_menu_main'] = "Startsida"; // 5.0
$LNG['a_menu_approve'] = "Godk�nn nya webbplatser";
$LNG['a_menu_approve_edits'] = "Godk�nn �ndrade webbplatser"; // 5.2.0
$LNG['a_menu_manage'] = "Anv�ndare"; // 4.2.0
$LNG['a_menu_settings'] = "Inst�llningar"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Ordfilter"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Bannlysningar"; // 5.2.0
$LNG['a_menu_backup'] = "S�kerhetskopiera databasen"; // 5.2.0
$LNG['a_menu_skins'] = "Stilar och kategorier"; // 5.0
$LNG['a_menu_approve_reviews'] = "Godk�nn nya recensioner"; // 5.0
$LNG['a_menu_manage_reviews'] = "Recensioner"; // 5.0
$LNG['a_menu_email'] = "Skicka e-post";
$LNG['a_menu_delete_review'] = "Ta bort recension";
$LNG['a_menu_logout'] = "Logga ut";
$LNG['a_menu_delete'] = "Ta bort anv�ndare";
$LNG['a_menu_edit'] = "�ndra anv�ndare";
$LNG['a_menu_create_page'] = "Skapa sida"; // 5.1.0
$LNG['a_menu_manage_pages'] = "�ndra sidor"; // 5.1.0
$LNG['a_header_members'] = "Anv�ndare"; // 5.0
$LNG['a_header_settings'] = "Inst�llningar"; // 5.0
$LNG['a_header_tools'] = "Verktyg"; // 5.2.0
$LNG['a_header_reviews'] = "Recensioner"; // 5.0
$LNG['a_header_pages'] = "Sidor med eget inneh�ll"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "�ndra inst�llningar";
$LNG['a_s_help'] = "Hj�lp"; // 5.1.0

$LNG['a_s_general'] = "Allm�nna inst�llningar";
$LNG['a_s_admin_password'] = "L�senord till administration";
$LNG['a_s_list_name'] = "Topplistans namn";
$LNG['a_s_list_url'] = "URL till topplistan";
$LNG['a_s_default_language'] = "Standardspr�k";
$LNG['a_s_your_email'] = "Topplistans e-postadress";

$LNG['a_s_sql'] = "SQL-inst�llningar";
$LNG['a_s_sql_type'] = "Databastyp"; // 4.1.0
$LNG['a_s_sql_host'] = "V�rd";
$LNG['a_s_sql_database'] = "Databas";
$LNG['a_s_sql_username'] = "Anv�ndarnamn";
$LNG['a_s_sql_password'] = "L�senord";

$LNG['a_s_ranking'] = "Placeringar och urval";
$LNG['a_s_num_list'] = "Antal webbplatser att visa per sida"; // 5.0
$LNG['a_s_ranking_period'] = "R�kna statisken utifr�n dagar, veckor eller m�nader"; // 5.0
$LNG['a_s_ranking_method'] = "Sortera efter"; // 5.0
$LNG['a_s_ranking_average'] = "R�kna statistiken fr�n genomsnitt eller bara genom %s"; // 5.0
$LNG['a_s_featured_member'] = 'Utvald webbplats - f�r att funktionen ska fungera m�ste taggen {$featured_member} finns i wrapper.html.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Antal webbplatser som f�r anv�nda _top-stilen";
$LNG['a_s_ad_breaks'] = "Visa annonser efter dessa placeringar (separera med kommatecken) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "Fyll i tomma f�lt i topplistan med ett meddelande d�r det st�r \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Anv�ndare";
$LNG['a_s_active_default'] = "Nyregistrerade webbplatser m�ste godk�nnas innan de f�r visas i topplistan";
$LNG['a_s_active_default_review'] = "Nya recensioner m�ste godk�nnas innan de visas";
$LNG['a_s_delete_after'] = "Ta bort inaktiva anv�ndare efter antal dagar (skriv 0 f�r att inaktivera funktionen)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Skicka e-post till administrat�ren n�r en ny anv�ndare registreras"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Skicka e-post till administrat�ren n�r en ny kommentar skrivits"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Maximal banner-bredd (skriv 0 f�r att inaktivera funktionen)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Maximal banner-h�jd (skriv 0 f�r att inaktivera funktionen)"; // 4.2.0
$LNG['a_s_default_banner'] = "Standard-banner f�r anv�ndare som inte anger en egen banner";

$LNG['a_s_button'] = "Knappinst�llningar";
$LNG['a_s_ranks_on_buttons'] = "Placeringar p� knappar -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Knappar som visar placeringar"; // 4.2.0
$LNG['a_s_button_url'] = "Om ja/nej - webbadress till knappen du vill visa p� dina anv�ndares webbplatser"; // 4.0
$LNG['a_s_button_dir'] = "Om ja - webbadress till mappen med knapparna"; // 4.0
$LNG['a_s_button_ext'] = "Om ja - filtyper (gif, jpg, png och s� vidare)"; // 4.0
$LNG['a_s_button_num'] = "Om ja - Antal knappar - ju h�gre antal, desto mer resurser anv�nder scriptet p� servern"; // 4.0
$LNG['a_s_google_friendly_links'] = "S�kmotorv�nliga l�nkar - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Ing�ngssida f�r att f�rhindra fusk";
$LNG['a_s_captcha'] = "Bildverifiering vid registrering av webbplats (f�rhindrar missbruk) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "S�kerhetfr�ga att besvara f�r att f�rhindra att spamregistreringar (l�mna f�ltet tomt f�r att inaktivera funktionen) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "�vriga inst�llningar";
$LNG['a_s_search'] = "S�kfunktion";
$LNG['a_s_time_offset'] = "Tidskompensation gentemot din server (om du eventullt befinner dig i annan tidszon eller har sommartid/vintertid)";

$LNG['a_s_on'] = "Aktiverat";
$LNG['a_s_off'] = "Inaktiverat";
$LNG['a_s_days'] = "Dagar";
$LNG['a_s_months'] = "M�nader";
$LNG['a_s_weeks'] = "Veckor"; // 4.2.0
$LNG['a_s_yes'] = "Ja";
$LNG['a_s_no'] = "Nej";
$LNG['a_s_answer'] = "Svar"; // 5.2.0

$LNG['a_s_updated'] = "Inst�llningarna uppdaterades.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Stilar och kategorier"; // 5.0
$LNG['a_skins_default'] = "Standardstil"; // 5.0
$LNG['a_skins_set_default'] = "V�lj standardstil"; // 5.0
$LNG['a_skins_anon'] = "Anonym"; // 5.0
$LNG['a_skins_default_done'] = "Standardstilen �ndrades."; // 5.0
$LNG['a_skins_categories_done'] = "Kategoriernas stilar �ndrades."; // 5.0
$LNG['a_skins_new_category_done'] = "Kategorin skapades."; // 5.0
$LNG['a_skins_delete_done'] = "Kategorin togs bort."; // 5.0
$LNG['a_skins_delete_error'] = "Kategorin kunde inte tas bort eftersom det m�ste finnas minst en kategori i topplistan."; // 5.1.0
$LNG['a_skins_edit_done'] = "Kategorin �ndrades."; // 5.0
$LNG['a_skins_invalid_skin'] = "Felaktig stil: %s. F�rs�k igen."; // 5.0
$LNG['a_skins_categories'] = "Kategorier"; // 5.0
$LNG['a_skins_new_category'] = "Skapa ny kategori"; // 5.0
$LNG['a_skins_set_skins'] = "�ndra kategoriernas stilar"; // 5.0
$LNG['a_skins_edit_category'] = "�ndra kategori"; // 5.0
$LNG['a_skins_category_name'] = "Kategorins namn"; // 5.0
$LNG['a_skins_diff_skins'] = "Du kan v�lja att ha olika stilar f�r olika kategorier nedan."; // 5.0
?>
