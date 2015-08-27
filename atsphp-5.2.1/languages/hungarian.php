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
  die("A k�zvetlen hozz�f�r�s nem enged�lyezett.");
}

// When you make a new translation, fill out the following four variables to
// get credit for you work.
$translation = 'Hungarian (magyar nyelv)';
$translator_name = 'Varanka Zolt�n';
$translator_email = 'webmester@novoportal.hu';
$translator_url = 'http://novoportal.hu/';

// Set this to the character encoding of your translation
$LNG['charset'] = "iso-8859-2";

// Global
$LNG['g_form_submit_short'] = "OK";
$LNG['g_username'] = "Felhaszn�l�n�v";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "C�m";
$LNG['g_description'] = "Le�r�s";
$LNG['g_category'] = "Kateg�ria"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_banner_url'] = "Banner URL";
$LNG['g_password'] = "Jelsz�";
$LNG['g_average'] = "�tlag";
$LNG['g_today'] = "Ma";
$LNG['g_yesterday'] = "Tegnap";
$LNG['g_daily'] = "Napi"; // 5.0
$LNG['g_this_month'] = "E havi"; // 5.0
$LNG['g_last_month'] = "Utols� havi"; // 5.0
$LNG['g_monthly'] = "Havi"; // 5.0
$LNG['g_this_week'] = "E heti"; // 5.0
$LNG['g_last_week'] = "M�lt heti"; // 5.0
$LNG['g_weekly'] = "Heti"; // 5.0
$LNG['g_pv'] = "Oldal megtekint�sek"; // 5.0
$LNG['g_overall'] = "�sszefoglal�"; // 5.0
$LNG['g_in'] = "Bemen�"; // 5.0
$LNG['g_out'] = "Kimen�"; // 5.0
$LNG['g_unq_pv'] = "Egyedi megtekint�sek"; // 5.0
$LNG['g_tot_pv'] = "�sszes megtekint�s"; // 5.0
$LNG['g_unq_in'] = "Egyedi bej�v�"; // 5.0
$LNG['g_tot_in'] = "�sszes bej�v�"; // 5.0
$LNG['g_unq_out'] = "Egyedi kimen�"; // 5.0
$LNG['g_tot_out'] = "�sszes kimen�"; // 5.0
$LNG['g_invalid_u_or_p'] = "�rv�nytelen felhaszn�l�n�v vagy jelsz�. Pr�b�lja meg �jra!"; // 5.0
$LNG['g_invalid_u'] = "�rv�nytelen felhaszn�l�n�v. Pr�b�lja meg �jra!"; // 5.0
$LNG['g_invalid_p'] = "�rv�nytelen jelsz�. Pr�b�lja meg �jra!"; // 5.0
$LNG['g_session_expired'] = "A munkamenet lej�rt. Pr�b�lja meg �jra!"; // 5.0
$LNG['g_error'] = "Hiba"; // 5.0
$LNG['g_delete_install'] = "Biztons�gi okokb�l, t�r�lje a kor�bbi telep�t�si k�nyvt�rat, miel�tt a szkriptet futtatja!"; // 5.0
$LNG['g_ip'] = "IP c�m"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "Regisztr�ci� szerkeszt�se";
$LNG['edit_info_edited'] = "A regisztr�ci� szerkeszt�se sikeres volt.";
$LNG['edit_password_blank'] = "A jelenlegi jelsz� megtart�s�hoz hagyja �resen!"; // 4.0
$LNG['edit_delay'] = "A webhely c�m�nek �s URL-j�nek megv�ltoztat�s�t az adminisztr�tor hagyja j�v�, a v�ltoztat�s csak ut�na l�p �rv�nybe."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Topsites �tj�r� oldal";
$LNG['gateway_text'] = "A csal�s megakad�lyoz�s�hoz egy �tj�r� oldal lett telep�tve. Kattintson az al�bbi linkre a lista megtekint�s�hez!";
$LNG['gateway_vote'] = "Bel�p�s szavaz�ssal";
$LNG['gateway_no_vote'] = "Bel�p�s szavaz�s n�lk�l"; // 5.0

// Install
$LNG['install_header'] = "Telep�t�s";
$LNG['install_welcome'] = "�dv�zli �nt az Aardvark Topsites PHP 5. A szkript telep�t�s�hez t�ltse ki az al�bbi �rlapot!";
$LNG['install_sql_prefix'] = "T�bla el�tag - csak akkor v�ltoztassa meg, ha ugyanabban az adatb�zisban t�bb list�t futtat!";
$LNG['install_error_chmod'] = "A settings_sql.php nem �rhat�. �gyeljen a 666 jogosults�g be�ll�t�sra!";
$LNG['install_error_sql'] = "Nem lehet kapcsol�dni az adatb�zishoz. L�pjen vissza �s ellen�rizze az SQL be�ll�t�sokat!";
$LNG['install_done'] = "Az �n Topsites list�ja sikeresen telep�t�sre ker�lt. T�r�lje ezt a k�nyvt�rat most!";
$LNG['install_your'] = "Az �n Topsites List�ja";
$LNG['install_admin'] = "Adminisztr�ci�";
$LNG['install_manual'] = "K�zik�nyv";
$LNG['upgrade_header'] = "Friss�t�s";
$LNG['upgrade_welcome'] = "�dv�zli �nt az Aardvark Topsites PHP 5. A friss�t�s el�tt ne felejtse el az adatokat elmenteni!";
$LNG['upgrade_version'] = "Ellen�rizze, hogy a friss�t�s az %s verzi�r�l t�rt�nik!"; // 5.1.0
$LNG['upgrade_error_version'] = "A friss�t�s csak az Aardvark Topsites PHP 4.1.0 bagy magasabb verzi� eset�ben t�mogatott.";
$LNG['upgrade_done'] = "Az �n Topsites list�ja sikeresen friss�t�sre ker�lt. T�r�lje ezt a k�nyvt�rat most!";
$LNG['install_mailing_list'] = "Ha szeretne csatlakozni az Aardvark Topsites PHP levelez�list�j�hoz, adja meg az email c�m�t lentebb! Ez egy lista a szkriptet �rint� olyan fontos bejelent�sekr�l mint az �j kiad�s �s biztons�gi tan�csok."; // 5.2.0

// Join
$LNG['join_header'] = "Csatlakoz�s";
$LNG['join_enter_text'] = "Adja meg az al�bbi k�pen l�that� sz�veget!"; // 4.2.2
$LNG['join_enter_text_read'] = "Nem olvashat�?"; // 5.2.0
$LNG['join_user'] = "Felhaszn�l�"; // 5.0
$LNG['join_website'] = "Webhely"; // 5.0
$LNG['join_banner_size'] = "(Maxim�lis m�ret: %s x %s)"; // 5.2.0
$LNG['join_error_username'] = "�rv�nyes felhaszn�l�nevet adjon meg! Csak �kezetn�lk�li bet�ket, sz�mokat, al�h�z�sjelet �s k�t�jelet haszn�ljon!"; // 5.0
$LNG['join_error_username_duplicate'] = "�rv�nyes felhaszn�l�nevet adjon meg! Ez a felhaszn�l�n�v m�r foglalt!"; // 5.0
$LNG['join_error_url'] = "�rv�nyes URL-t adjon meg!";
$LNG['join_error_email'] = "�rv�nyes email c�met adjon meg!";
$LNG['join_error_title'] = "Adja meg a webhely�nek megnevez�s�t (c�m)!";
$LNG['join_error_password'] = "Adja meg a jelsz�t!";
$LNG['join_error_confirm_password'] = "A jelszavak nem egyeznek!"; // 5.2.0
$LNG['join_error_urlbanner'] = "�rv�nyes bannert adjon meg! Hagyja �resen a mez�t, ha nem akar bannert megadni!"; // 5.2.0
$LNG['join_error_time'] = "Ne friss�tse a csatlakoz�s j�v�hagy�si oldalt!"; // 4.2.0
$LNG['join_error_captcha'] = "A megadott sz� nem egyezik a k�pen lev�vel!"; // 4.2.2
$LNG['join_error_question'] = "Helytelen v�lasz. Jav�tsa annak bizony�t�s�ra, hogy �n nem robot, hanem val�s szem�ly!"; // 5.2.0
$LNG['join_thanks'] = "K�sz�nj�k, hogy csatlakozott �n is! Helyezze el ezt a k�dot az �rt�kelni k�v�nt webhelyen!";
$LNG['join_change_warning'] = "Ha megv�ltoztatja a k�dot, val�sz�n�leg nem fog m�k�dni.";
$LNG['join_welcome'] = "�dv�z�lj�k a(z) %s webhelyen!";
$LNG['join_welcome_admin'] = "�j tag csatlakozott az �n Topsites list�j�hoz!";
$LNG['join_approve'] = "K�sz�nj�k a csatlakoz�st! Weboldala beker�l a list�ba, amint az adminisztr�tor azt j�v�hagyja.  A tov�bbi inform�ci�kat egy emailben k�ldj�k el a j�v�hagy�s ut�n."; // 5.2.0
$LNG['join_type'] = "Regisztr�ci� t�pus"; // 5.1.0
$LNG['join_standard'] = "Szabv�nyos"; // 5.1.0
$LNG['join_error_top'] = "Hiba t�rt�nt a bek�ld�skor. Jav�tsa ki az al�bbi hib�t!"; // 5.2.0
$LNG['join_ban_top'] = "A bek�ld�tt adatok olyat tartaznak, amelyet az adminisztr�tor letiltott."; // 5.2.0
$LNG['join_security'] = "Biztons�g"; // 5.2.0
$LNG['join_confirm_password'] = "Jelsz� ellen�rz�s"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "Linkk�d"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Elfelejtett jelsz�"; // 5.0
$LNG['lost_pw_forgot'] = "Elfelejtette a jelszav�t?"; // 5.0
$LNG['lost_pw_get'] = "Jelsz� k�r�se"; // 5.0
$LNG['lost_pw_emailed'] = "A tov�bbi instrukci�k�rt n�zze meg postal�d�j�t!"; // 5.0
$LNG['lost_pw_email'] = "Az �j jelsz� megismer�s�hez navig�ljon az al�bbi URL-re:"; // 5.0
$LNG['lost_pw_new'] = "Adjon meg egy �j jelsz�t!"; // 5.0
$LNG['lost_pw_set_new'] = "�j jelsz� be�ll�t�sa"; // 5.0
$LNG['lost_pw_finish'] = "Jelszav�t be�ll�tottuk a most megadottra!"; // 5.0

// Main Page
$LNG['main_header'] = "Lista"; // 5.0
$LNG['main_all'] = "�sszes webhely"; // 4.2.0
$LNG['main_method'] = "�rt�kel�si m�dszer";
$LNG['main_members'] = "Tagok";
$LNG['main_menu_rankings'] = "Lista";
$LNG['main_menu_join'] = "Regisztr�ci�";
$LNG['main_menu_random'] = "V�letlen tag";
$LNG['main_menu_search'] = "Keres�s";
$LNG['main_menu_lost_code'] = "Elveszett k�d"; // 5.0
$LNG['main_menu_lost_password'] = "Elveszett jelsz�"; // 5.0
$LNG['main_menu_edit'] = "Tag inf� szerkeszt�s";
$LNG['main_menu_user_cp'] = "Felhaszn�l�i vez�rl�pult"; // 5.0
$LNG['main_featured'] = "Kimelt taf"; // 4.0.2
$LNG['main_executiontime'] = "Szkript futtat�si id�"; // 4.0
$LNG['main_queries'] = "SQL lek�rdez�sek"; // 4.0
$LNG['main_powered'] = "T�mogat�:";

// Ranking Table
$LNG['table_stats'] = "Statisztika";
$LNG['table_unique'] = "Egyedi";
$LNG['table_total'] = "�sszes";
$LNG['table_rank'] = "�rt�kel�s";
$LNG['table_title'] = "C�m"; // 4.0
$LNG['table_description'] = "Le�r�s"; // 4.0
$LNG['table_movement'] = "�thelyez�s";
$LNG['table_up'] = "Fel"; // 5.0
$LNG['table_down'] = "Le"; // 5.0
$LNG['table_neutral'] = "Semleges"; // 5.0
$LNG['table_your_site_here'] = "Az �n webhelye"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "�rt�kel�s �s �ttekint�s";
$LNG['rate_message'] = "�rja be az �rt�kel�st �s az �ttekint�st %s r�sz�re az al�bbi �rlap seg�ts�g�vel!"; // 5.2.0
$LNG['rate_rating'] = "�rt�kel�s";
$LNG['rate_review'] = "�ttekint�s - HTML nem enged�lyezett"; // 5.0
$LNG['rate_thanks'] = "K�sz�nj�k az �rt�kel�st!";
$LNG['rate_error'] = "M�r �rt�kelte ezt a webhelyet!";
$LNG['rate_back'] = "Vissza a statisztik�hoz";
$LNG['rate_email_admin'] = "�j �ttekint�s �rkezett a TopSites list�ba."; // 5.1.0

// Search
$LNG['search_header'] = "Keres�s";
$LNG['search_off'] = "A keres�si lehet�s�g ki van kapcsolva.";
$LNG['search_no_sites'] = "Nincs a felt�teleknek megfelel� webhely."; // 5.0
$LNG['search_prev'] = "El�z�"; // 3.2.1
$LNG['search_next'] = "K�vetkez�"; // 3.2.1
$LNG['search_displaying_results'] = "Megjelen�t�s: %s - %s / %s (<b>%s</b>)"; // 5.1.0

// Stats
$LNG['stats_header'] = "Statisztika";
$LNG['stats_info'] = "Inf�";
$LNG['stats_member_since'] = "Regisztr�ci� ideje"; // 5.0
$LNG['stats_rating_avg'] = "�tlagos �rt�kel�s";
$LNG['stats_rating_num'] = "�rt�kel�sek sz�ma";
$LNG['stats_rate'] = "Webhely �rt�kel�se �s �ttekint�se";
$LNG['stats_reviews'] = "�ttekint�sek";
$LNG['stats_allreviews'] = "�sszes �ttekint�s megjelen�t�se"; // 4.0
$LNG['stats_week'] = "H�t"; // 5.0
$LNG['stats_highest'] = "Legmagasabb"; // 5.0
$LNG['stats_overall'] = "Teljes statisztika"; // 5.2.0
$LNG['stats_overall_average'] = "�tlagos (utols� 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "�sszes (mindenkori)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Cs�cs %s webhely"; // 4.0
$LNG['ssi_new'] = "%s leg�jabb tag"; // 5.0
$LNG['ssi_all'] = "�sszes webhely"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Felhaszn�l�i vez�rl�pult"; // 5.0
$LNG['user_cp_login'] = "Bejelentkez�s"; // 5.0
$LNG['user_cp_logout'] = "Kijelentkez�s"; // 5.0
$LNG['user_cp_welcome'] = "�dv�z�lj�k a felhaszn�l�i vez�rl�pulton! Haszn�lja a baloldali linkeket a regisztr�ci�ja kezel�s�hez!"; // 5.0
$LNG['user_cp_logout_message'] = "�n kijelentkezett a felhaszn�l�i vez�rl�pultr�l."; // 5.0
$LNG['user_cp_login_long'] = "Jelentkezzen be felhaszn�l�i nev�vel, jelszav�val vagy OpenID azonos�t�j�val!"; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Nem tal�lhat� OpenID szerver: %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "A vez�rl�pult el�r�s�hez regisztr�lnia kell a TopSites list�ban!"; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Hiba t�rt�nt a bejelentkez�s k�zben. Pr�b�lja �jra!"; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "A feldolgoz�shoz hozz�f�r�s kell. Pr�b�lja �jra!"; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Hiba a szerveren: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "YNem f�rhet hozz� a felhaszn�l�i vez�rl�pulthoz addig, ameddig a webhelye j�v�hagy�sra nem ker�l. Amint j�v�hagyj�k, �n kap egy levelet."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "�j tagok j�v�hagy�sa"; // 5.0
$LNG['a_approve'] = "J�v�hagy"; // 4.0
$LNG['a_approve_none'] = "Nincs j�v�hagy�sra v�r� tag."; // 4.0
$LNG['a_approve_done'] = "A tag j�v�hagy�sra ker�lt."; // 4.0
$LNG['a_approve_dones'] = "A tagok j�v�hagy�sra ker�ltek."; // 4.0
$LNG['a_approve_sel'] = "Kiv�lasztottakal:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "Szerkesztett tagok j�v�hagy�sa"; // 5.2.0
$LNG['a_approve_edited_none'] = "Nincs j�v�hagy�sra v�r� szerkeszt�s."; // 5.2.0
$LNG['a_approve_edited_old'] = "El�z� c�m �s URL"; // 5.2.0
$LNG['a_approve_edited_new'] = "Szerkesztett c�m �s URL"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Visszautas�t"; // 5.2.0
$LNG['a_approve_edited_done'] = "A v�ltoz�sok j�v�hagyva."; // 5.2.0
$LNG['a_approve_rejected_done'] = "A v�ltoz�sok visszautas�tva."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "�j �ttekint�sek"; // 5.0
$LNG['a_approve_rev_none'] = "Nincs j�v�hagy�sra v�r� �ttekint�s."; // 5.0
$LNG['a_approve_rev_done'] = "Az �ttekint�s j�v�hagyva."; // 5.0
$LNG['a_approve_rev_dones'] = "Az �ttekint�sek j�v�hagyva."; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "Adatb�zis ment�s"; // 5.2.0
$LNG['a_backup_warn'] = "Ment�st hoz l�tre a tagokr�l, a statisztik�r�l �s a be�ll�t�sokr�l. Ha sok tag van, ez hosszabb ideig eltarthat �s nagy f�jlt eredm�nyez."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Egyedi oldal k�sz�t�s"; // 5.1.0
$LNG['a_create_page_id'] = "Oldalazonos�t� - Az URL-ben ker�l haszn�latra, ez�rt csak �kezet n�lk�li bet�ket, sz�mokat, al�h�z�sjelet �s k�t�jelet tartalmazhat"; // 5.1.0
$LNG['a_create_page_error_id'] = "Az oldalazonos�t� csak csak �kezet n�lk�li bet�ket, sz�mokat, al�h�z�sjelet �s k�t�jelet tartalmazhat. L�pjen vissza �s jav�tsa az oldalazonos�t� �rt�k�t!"; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "M�r van egy ilyen oldalazonos�t�j� oldal. L�pjen vissza �s v�lasszon m�s oldalazonos�t�t!"; // 5.1.0
$LNG['a_create_page_created'] = "Az oldal l�trej�tt. K�zzel adjon egy linket a wrapper.html f�jlban ehhez: %s"; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Tag t�rl�se"; // 5.0
$LNG['a_del_headers'] = "Tagok t�rl�se"; // 5.0
$LNG['a_del_done'] = "A tag t�r�lve."; // 5.0
$LNG['a_del_dones'] = "A tagok t�r�lve."; // 5.0
$LNG['a_del_warn'] = "Biztosan t�rli ezt a tagot: %s?"; // 5.0
$LNG['a_del_multi'] = "ez a(z) %s tag"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Cenz�r�zott sz� t�rl�se"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Cenz�r�zott szavak t�rl�se"; // 5.1.0
$LNG['a_del_bad_word_done'] = "A cenz�r�zott sz� t�r�lve."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "A cenz�r�zott szavak t�r�lve."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Biztosan t�rli a(z) %s sz�t a cenz�r�zott szavak list�j�b�l?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "ez a(z) %s sz�"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "�rv�nytelen cenz�r�zott sz� azonos�t�. Pr�b�lja �jra!"; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "Feketelista bejegyz�s t�rl�se"; // 5.2.0
$LNG['a_del_ban_headers'] = "Feketelista bejegyz�sek t�rl�se"; // 5.2.0
$LNG['a_del_ban_done'] = "A feketelista bejegyz�s t�r�lve."; // 5.2.0
$LNG['a_del_ban_dones'] = "A feketelista bejegyz�sek t�r�lve."; // 5.2.0
$LNG['a_del_ban_warn'] = "Biztosan t�rli a(z) %s bejegyz�st a feketelist�b�l?"; //5.2.0
$LNG['a_del_ban_multi'] = "ez a(z) %s bejegyz�s"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "�rv�nytelen feketelista bejegyz�s azonos�t�. Pr�b�lja �jra!"; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Egyedi oldal t�rl�se"; // 5.1.0
$LNG['a_del_page_headers'] = "Egyedi oldalak t�rl�se"; // 5.1.0
$LNG['a_del_page_done'] = "Az egyedi oldal t�r�lve."; // 5.1.0
$LNG['a_del_page_dones'] = "Az egyedi oldalak t�r�lve."; // 5.1.0
$LNG['a_del_page_warn'] = "Biztosan t�rli: %s?"; //5.1.0
$LNG['a_del_page_multi'] = "ez a(z) %s oldal"; //5.1.0
$LNG['a_del_page_invalid_id'] = "�rv�nytelen egyedi oldal azonos�t�. Pr�b�lja �jra!"; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "�ttekint�s t�rl�se"; // 5.0
$LNG['a_del_rev_headers'] = "�ttekint�sek t�rl�se"; // 5.0
$LNG['a_del_rev_done'] = "Az �ttekint�s t�r�lve."; // 5.0
$LNG['a_del_rev_dones'] = "Az �ttekint�sek t�r�lve."; // 5.0
$LNG['a_del_rev_warn'] = "Biztosan t�rli ezt az �ttekint�s?"; //5.0
$LNG['a_del_rev_warns'] = "Biztosan t�rli ezeket az �ttekint�seket?"; //5.0
$LNG['a_del_rev_invalid_id'] = "�rv�nytelen �ttekint�s azonos�t�. Pr�b�lja �jra!"; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Tag szerkeszt�s"; // 5.0
$LNG['a_edit_site_is'] = "Ez a webhely"; // 4.0
$LNG['a_edit_active'] = "akt�v (list�zva)"; // 4.0
$LNG['a_edit_inactive'] = "inakt�v (nincs list�zva)"; // 5.0
$LNG['a_edit_edited'] = "A tag szerkesztve.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Cenz�r�zott sz�� szerkeszt�s"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "A cenz�r�zott sz� szerkesztve."; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "Feketelista bejegyz�s szerkeszt�se"; // 5.2.0
$LNG['a_edit_ban_edited'] = "A feketelista bejegyz�s szerkesztve."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Egyedi oldal szerkeszt�se"; // 5.1.0
$LNG['a_edit_page_content'] = "Tartalom - itt haszn�lhat HTML k�dot"; // 5.1.0
$LNG['a_edit_page_edited'] = "Az oldal szerkesztve."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "�ttekint�s szerkeszt�se"; // 5.0
$LNG['a_edit_rev_edited'] = "A �ttekint�s szerkesztve.";

// Admin > Email Members
$LNG['a_email_header'] = "Email tagoknak"; // 5.0
$LNG['a_email_subject'] = "T�rgy"; // 4.2.0
$LNG['a_email_message'] = "�zenet"; // 4.2.0
$LNG['a_email_msg_sent'] = "Email elk�ldve: %s"; // 5.0
$LNG['a_email_not_sent'] = "Az email nem k�ldhet� el: %s"; // 5.0
$LNG['a_email_sent'] = "%s tagnak lett email elk�ldve."; // 4.2.0
$LNG['a_email_failed'] = "%s tagnak nem lett email elk�ldve."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Kijelentkezett az adminisztr�ci�s fel�letr�l."; // 5.0

// Admin > Main
$LNG['a_header'] = "Adminisztr�ci�"; // 5.0
$LNG['a_main'] = "�dv�z�lj�k az adminisztr�ci�ban! Haszn�lja a baloldali linkeket a Topsites lista szerkeszt�s�hez!"; // 5.0
$LNG['a_main_approve'] = "Jelenleg 1 webhely v�r j�v�hagy�sra."; // 5.0
$LNG['a_main_approves'] = "Jelenleg %s webhely v�r j�v�hagy�sra."; // 5.0
$LNG['a_main_approve_edit'] = "Jelenleg 1 webhely szerkeszt�se v�r j�v�hagy�sra."; // 5.2.0
$LNG['a_main_approve_edits'] = "Jelenleg %s webhely szerkeszt�se v�r j�v�hagy�sra."; // 5.2.0
$LNG['a_main_approve_rev'] = "Jelenleg 1 �ttekint�s v�r j�v�hagy�sra."; // 5.0
$LNG['a_main_approve_revs'] = "Jelenleg %s �ttekint�s v�r j�v�hagy�sra."; // 5.0
$LNG['a_main_your'] = "Az �n verzi�ja:"; // 5.0
$LNG['a_main_latest'] = "Legfrissebb verzi�"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Tagok kezel�se"; // 5.0
$LNG['a_man_actions'] = "M�veletek"; // 4.2.0
$LNG['a_man_edit'] = "Szerkeszt"; // 4.2.0
$LNG['a_man_delete'] = "T�r�l"; // 4.2.0
$LNG['a_man_email'] = "Email"; // 4.2.0
$LNG['a_man_all'] = "Mindent kijel�l"; // 5.0
$LNG['a_man_none'] = "Kijel�l�st megsz�ntet"; // 5.0
$LNG['a_man_del_sel'] = "Kijelt�ltek t�rl�se"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Cs�nya szavak sz�r�"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Adjon meg egy sz�t �s annak helyettes�t�s�t! P�ld�ul: \"hell\" a sz� mez�ben �s \"h***\" a helyettes�t� mez�ben."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "A pontos egyez�s csak pontosan megadott sz�n�l van. Glob�lis egyez�sn�l b�rmelyikkel, ami tartalmazza a sz�t. �gy glob�lis egyez�sn�l a \"hell\" egyezhet a \"shell\" �s \"hello\" szavakkal."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Sz�"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Helyettes�t�s"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Egyez�s"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Pontos"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Glob�lis"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Sz�sz�r�"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" hozza�dva a cs�nyaszavak sz�r�h�z."; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "Feketelista"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Webhelyek �s felhaszn�l�k kitilt�s�hoz t�ltse ki az al�bbi �rlapot!  Amikor egy tag regisztr�l, az URL, az email c�m, a felhaszn�l�n�v �s az IP c�m ellen�rz�sre ker�l. A webhely szerkeszt�sekor az URL �s az email c�m ker�l ellen�rz�sre.<br /><br />A feketelista nem �rinti a l�tez� tagokat."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "A pontos egyez�s csak pontosan megadott stringn�l. Glob�lis egyez�sn�l b�rmelyikkel, ami tartalmazza a stringet. �gy glob�lis egyez�sn�l a http://www.yahoo.com/ egyezhet b�rmely http://www.yahoo.com/ sz�veget tartalmaz� URL-ben, a pontos egyez�sn�l csak a http://www.yahoo.com/ akad fenn a sz�r�n."; // 5.2.0
$LNG['a_man_ban_string'] = "String"; // 5.2.0
$LNG['a_man_ban_field'] = "Mez�"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" hozz�adva a feketelist�hoz."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Egyedi oldalak kezel�se"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "�ttekint�sek kezel�se"; // 5.0
$LNG['a_man_rev_enter'] = "Egy webhely �ttekint�s�nek kezel�s�hez adja meg a tag felhaszn�l�nev�t!"; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "�ttekint�s"; // 5.0
$LNG['a_man_rev_date'] = "D�tum"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Men�";
$LNG['a_menu_main'] = "F�oldal"; // 5.0
$LNG['a_menu_approve'] = "�j tagok j�v�hagy�sa";
$LNG['a_menu_approve_edits'] = "Szerkesztett tagok j�v�hagy�sa"; // 5.2.0
$LNG['a_menu_manage'] = "Tagok kezel�se"; // 4.2.0
$LNG['a_menu_settings'] = "Be�ll�t�sok v�ltoztat�sa"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Cs�nyasz� sz�r�"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Feketelista"; // 5.2.0
$LNG['a_menu_backup'] = "Adatb�zis biztons�gi ment�s"; // 5.2.0
$LNG['a_menu_skins'] = "Sablonok �s kateg�ri�k"; // 5.0
$LNG['a_menu_approve_reviews'] = "�j �ttekint�s j�v�hagy�sa"; // 5.0
$LNG['a_menu_manage_reviews'] = "�ttekint�sek kezel�se"; // 5.0
$LNG['a_menu_email'] = "Email tagoknak";
$LNG['a_menu_delete_review'] = "�ttekint�s t�rl�se";
$LNG['a_menu_logout'] = "Kijelentkez�s";
$LNG['a_menu_delete'] = "Tag t�rl�s";
$LNG['a_menu_edit'] = "Tag szerkeszt�s";
$LNG['a_menu_create_page'] = "Egyedi oldal l�trehoz�s"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Egyedi oldalak kezel�se"; // 5.1.0
$LNG['a_header_members'] = "Tagok"; // 5.0
$LNG['a_header_settings'] = "Be�ll�t�sok"; // 5.0
$LNG['a_header_tools'] = "Eszk�z�k"; // 5.2.0
$LNG['a_header_reviews'] = "�ttekint�sek"; // 5.0
$LNG['a_header_pages'] = "Egyedi oldalak"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Be�ll�t�sok v�ltoztat�sa";
$LNG['a_s_help'] = "S�g�"; // 5.1.0

$LNG['a_s_general'] = "�ltal�nos be�ll�t�sok";
$LNG['a_s_admin_password'] = "Adminisztr�tori jelsz�";
$LNG['a_s_list_name'] = "Az �n TopSites list�j�nak a neve";
$LNG['a_s_list_url'] = "A TopSites k�nyvt�r URL-je";
$LNG['a_s_default_language'] = "Alap�rtelmezett nyelv";
$LNG['a_s_your_email'] = "Az �n email c�me";

$LNG['a_s_sql'] = "SQL Sbe�ll�t�sk";
$LNG['a_s_sql_type'] = "Adatb�zist�pus"; // 4.1.0
$LNG['a_s_sql_host'] = "Kiszolg�l�";
$LNG['a_s_sql_database'] = "Adatb�zis";
$LNG['a_s_sql_username'] = "Felhaszn�l�n�v";
$LNG['a_s_sql_password'] = "Jelsz�";

$LNG['a_s_ranking'] = "�rt�kel�si be�ll�t�sok";
$LNG['a_s_num_list'] = "Tagok sz�ma oldalank�nt"; // 5.0
$LNG['a_s_ranking_period'] = "�rt�kel�si peri�dus"; // 5.0
$LNG['a_s_ranking_method'] = "�rt�kel�si met�dus"; // 5.0
$LNG['a_s_ranking_average'] = "�rt�kel�s �tlag vagy %s szerint"; // 5.0
$LNG['a_s_featured_member'] = 'Kiemelt tag - {$featured_member} tagot hozz� kell adni a wrapper.html-hez miut�n bekapcsolta ezt a lehet�s�get.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Tagok sz�ma, akik a _top sablont haszn�lj�k:";
$LNG['a_s_ad_breaks'] = "Hirdet�sek megjelen�t�se rangok ut�n (vessz�vel elv�lasztva) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "�res sorok felt�lt�se �zenettel: \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Tag be�ll�t�sok";
$LNG['a_s_active_default'] = "Az �j tagokat j�v� kell hagyni a list�ba ker�l�s el�tt";
$LNG['a_s_active_default_review'] = "Az �j �rt�kel�seket j�v� kell hagyni a list�ba ker�l�s el�tt";
$LNG['a_s_delete_after'] = "Inakt�v tagok t�rl�se ennyi nap ut�n (0 kikapcsol�s)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Email k�ld�s az adminisztr�tornak �j tag regisztr�ci�jakor"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Email k�ld�s az adminisztr�tornak �j �rt�kel�s bek�ld�sekor"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Tagok banner�nek maxim�lis sz�less�ge (0 kikapcsol�s)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Tagok banner�nek maxim�lis magass�ga (0 kikapcsol�s)"; // 4.2.0
$LNG['a_s_default_banner'] = "Alap�rtelmezett banner azon tagoknak, akik nem �ll�tanak be bannert";

$LNG['a_s_button'] = "Gomb be�ll�t�sok";
$LNG['a_s_ranks_on_buttons'] = "Rangok gombokon -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Statisztika gombokon"; // 4.2.0
$LNG['a_s_button_url'] = "Ha Igen/Nem - a tagok webhely�n megjelen� alap�rtelmezett gomb URL-je"; // 4.0
$LNG['a_s_button_dir'] = "Ha Igen - a gombokat t�rol� k�nyvt�r URL-je"; // 4.0
$LNG['a_s_button_ext'] = "Ha Igen - gombok kiterjeszt�se (gif, png, jpg, stb.)"; // 4.0
$LNG['a_s_button_num'] = "Ha Igen - elk�sz�tett gombok sz�ma"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google-bar�t linkek - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "�tj�r� oldal a csal�sok elfog�s�ra";
$LNG['a_s_captcha'] = "Sz� ellen�rz�s regisztr�ci�kor a spammerek kiv�d�s�re - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Biztons�gi k�rd�s �s v�lasz a spammerek kiv�d�s�re (hagyja �resen a letilt�shoz!) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Egy�b be�ll�t�sok";
$LNG['a_s_search'] = "Keres�s";
$LNG['a_s_time_offset'] = "Id�elt�r�s a szervert�l (�r�ban)";

$LNG['a_s_on'] = "Be";
$LNG['a_s_off'] = "Ki";
$LNG['a_s_days'] = "nap";
$LNG['a_s_months'] = "h�nap";
$LNG['a_s_weeks'] = "h�t"; // 4.2.0
$LNG['a_s_yes'] = "Igen";
$LNG['a_s_no'] = "Nem";
$LNG['a_s_answer'] = "V�lasz"; // 5.2.0

$LNG['a_s_updated'] = "A be�ll�t�sai friss�t�sre ker�ltek.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Sminkek �s kateg�ri�k"; // 5.0
$LNG['a_skins_default'] = "Alap�rtelmezett smink"; // 5.0
$LNG['a_skins_set_default'] = "Alap�rtelmezett smink be�ll�t�sa"; // 5.0
$LNG['a_skins_anon'] = "N�vtelen"; // 5.0
$LNG['a_skins_default_done'] = "Az alap�rtelmezett smink be�ll�t�sra ker�lt."; // 5.0
$LNG['a_skins_categories_done'] = "A kateg�ria sminkek be�ll�t�sra ker�ltek."; // 5.0
$LNG['a_skins_new_category_done'] = "Az �j kateg�ria l�trej�tt."; // 5.0
$LNG['a_skins_delete_done'] = "A kateg�ria t�rl�sre ker�lt."; // 5.0
$LNG['a_skins_delete_error'] = "A kateg�ria nem t�r�lhet�, mert a rendszerben legal�bb egy kateg�ria megl�te sz�ks�ges."; // 5.1.0
$LNG['a_skins_edit_done'] = "A kateg�ria szerkeszt�se sikeres volt."; // 5.0
$LNG['a_skins_invalid_skin'] = "�rv�nytelen smink: %s. Pr�b�lja meg �jra!"; // 5.0
$LNG['a_skins_categories'] = "Kateg�ri�k"; // 5.0
$LNG['a_skins_new_category'] = "�j kateg�ria l�trehoz�sa"; // 5.0
$LNG['a_skins_set_skins'] = "Kateg�ria smink szerkeszt�se"; // 5.0
$LNG['a_skins_edit_category'] = "Kateg�ria szerkeszt�se"; // 5.0
$LNG['a_skins_category_name'] = "Kateg�ria n�v"; // 5.0
$LNG['a_skins_diff_skins'] = "Ha k�l�nb�z� kateg�ri�khoz k�l�nb�z� sminkeket szeretne rendelni, v�lasszon az al�bbiak k�z�l!"; // 5.0
?>
