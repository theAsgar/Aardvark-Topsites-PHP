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
$translation = 'Polish (Polski)';
$translator_name = 'zolw';
$translator_email = 'zolwio@gmail.com';
$translator_url = 'http://www.toplista.mojeforum.net/';

// Set this to the character encoding of your translation
$LNG['charset'] = "ISO-8859-2";

// Global
$LNG['g_form_submit_short'] = "Wy�lij";
$LNG['g_username'] = "U�ytkownik";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Tytu�";
$LNG['g_description'] = "Opis";
$LNG['g_category'] = "Kategoria"; // 4.1.0
$LNG['g_email'] = "Email";
$LNG['g_banner_url'] = "Adres bannera";
$LNG['g_password'] = "Has�o";
$LNG['g_average'] = "�rednia";
$LNG['g_today'] = "Dzi�";
$LNG['g_yesterday'] = "Wczoraj";
$LNG['g_daily'] = "Dziennie"; // 5.0
$LNG['g_this_month'] = "W tym miesi�cu"; // 5.0
$LNG['g_last_month'] = "W zesz�ym miesi�cu"; // 5.0
$LNG['g_monthly'] = "Miesi�cznie"; // 5.0
$LNG['g_this_week'] = "W tym tygodniu"; // 5.0
$LNG['g_last_week'] = "W zesz�ym tygodniu"; // 5.0
$LNG['g_weekly'] = "Tygodniowo"; // 5.0
$LNG['g_pv'] = 'Wy�wietle�'; // 5.0
$LNG['g_overall'] = 'Og�lnie'; // 5.0
$LNG['g_in'] = 'Wej��'; // 5.0
$LNG['g_out'] = 'Wyj��'; // 5.0
$LNG['g_unq_pv'] = "Unikalnych klikni��"; // 5.0
$LNG['g_tot_pv'] = "Wszystkich klikni��"; // 5.0
$LNG['g_unq_in'] = "Unikalnych wej��"; // 5.0
$LNG['g_tot_in'] = "Razem wej��"; // 5.0
$LNG['g_unq_out'] = "Unikalnych wyj��"; // 5.0
$LNG['g_tot_out'] = "Razem wyj��"; // 5.0
$LNG['g_invalid_u_or_p'] = "Nieprawid�owa nazwa u�ytkownika lub has�o. Spr�buj ponownie."; // 5.0
$LNG['g_invalid_u'] = "Nieprawid�owa nazwa u�ytkownika. Spr�buj ponownie."; // 5.0
$LNG['g_invalid_p'] = "Nieprawid�owe has�o. Spr�buj ponownie."; // 5.0
$LNG['g_session_expired'] = "Twoja sesja wygas�a. Spr�buj ponownie."; // 5.0
$LNG['g_error'] = "B��d"; // 5.0
$LNG['g_delete_install'] = "Z powod�w bezpiecze�stwa musisz usun�� katalog install przed pierwszym uruchomieniem skryptu."; // 5.0
$LNG['g_ip'] = "Adres IP"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "Edytuj konto.";
$LNG['edit_info_edited'] = "Edycja konta zako�czona powodzeniem.";
$LNG['edit_password_blank'] = "Zostaw puste aby zachowa� obecne has�o"; // 4.0
$LNG['edit_delay'] = "Zanim zmiany w tytule i adresie URL przynis� efekt, musz� zosta� zaakceptowane przez administratora."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Bramka toplisty";
$LNG['gateway_text'] = "Z powodu oszustw bramka zosta�a zawieszona. Kliknij poni�szy link aby przej�� do rankingu";
$LNG['gateway_vote'] = "Wejd� i g�osuj";
$LNG['gateway_no_vote'] = "Wejd� bez g�osowania"; // 5.0

// Install
$LNG['install_header'] = "Instalacja";
$LNG['install_welcome'] = "Witamy w Aardvark Topsites PHP 5.  Wype�nij poni�szy formularz aby zainstalowa� skrypt.";
$LNG['install_sql_prefix'] = "Prefix tabeli - zmie� tylko gdy u�ywasz wiecej ni� jednej toplisty w tej samej bazie danych.";
$LNG['install_error_chmod'] = "B��d zapisu do settings_sql.php.  Upewnij si� ze nada�e� CHMOD 666 dla settings_sql.php.";
$LNG['install_error_sql'] = "Nie mo�na po��czy� si� z baz� danych. Sprawd� czy wpisane dane s� poprawne.";
$LNG['install_done'] = "Twoja toplista zosta�a zainstalowana pomy�lnie! Skasuj teraz ten katalog.";
$LNG['install_your'] = "Twoja lista toplist";
$LNG['install_admin'] = "Administrator";
$LNG['install_manual'] = "Manual";
$LNG['upgrade_header'] = "Aktualizacja";
$LNG['upgrade_welcome'] = "Witaj w Aardvark Topsites PHP 5.  Przed przyst�pieniem do aktualizacji pamietaj aby zapisa� kopie bezpiecze�stwa twoich danych.";
$LNG['upgrade_version'] = "Upewnij si� ze aktualizujesz z wersji %s."; // 5.1.0
$LNG['upgrade_error_version'] = "Aktualizacj� mo�na wykona� tylko z Aardvark Topsites PHP 4.1.0 lub wy�szej.";
$LNG['upgrade_done'] = "Twoja toplista zosta�a uaktualniona.  Skasuj ten katalog.";
$LNG['install_mailing_list'] = "Je�li chcia�by�/chcia�aby� do��czy� listy mailowej Aardvark Topsites PHP, wpisz poni�ej sw�j e-mial. jest to lista o niskiej intensywno�ci zawieraj�ca wa�ne og�oszenia o skrypcie, takie jak nowe wersje i rady dotycz�ce bezpiecze�stwa."; // 5.2.0

// Join
$LNG['join_header'] = "Do��cz";
$LNG['join_enter_text'] = "Przepisz tekst z obrazka poni�ej:"; // 4.2.2
$LNG['join_enter_text_read'] = "Nie mo�esz odczyta�?"; // 5.2.0
$LNG['join_user'] = "U�ytkownik"; // 5.0
$LNG['join_website'] = "Strona WWW"; // 5.0
$LNG['join_banner_size'] = "(Maksymalna wielko��: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Wprowad� poprawn� nazw� u�ytkownika: u�ywaj tylko liter, cyfr, podkre�le� dolnych."; // 5.0
$LNG['join_error_username_duplicate'] = "Wprowad� poprawn� nazw� u�ytkownika: istnieje ju� u�ytkownik o takiej nazwie."; // 5.0
$LNG['join_error_url'] = "Wprowad� poprawny adres URL.";
$LNG['join_error_email'] = "Wprowad� poprawny adres email.";
$LNG['join_error_title'] = "Wprowad� tytu� strony.";
$LNG['join_error_password'] = "Wprowad� has�o.";
$LNG['join_error_confirm_password'] = "Podane has�a nie s� takie same."; // 5.2.0
$LNG['join_error_urlbanner'] = "Wprowad� poprawny banner.  Zostaw puste je�li nie posiadasz."; // 5.2.0
$LNG['join_error_time'] = "Nie od�wie�aj strony z potwierdzeniem rejestracji!"; // 4.2.0
$LNG['join_error_captcha'] = "Wpisane s�owo r�ni si� od wy�wietlonego na obrazie."; // 4.2.2
$LNG['join_error_question'] = "Twoja odpowied� jest niepoprawna. Prosz� popraw j� aby potwierdzi� �e jeste� cz�owiekiem a nie botem."; // 5.2.0
$LNG['join_thanks'] = "Dziekujemy za zapisanie si�. Wstaw na stronie poni�szy kod.";
$LNG['join_change_warning'] = "Je�li zmienisz kod, zliczanie g�os�w z twojej strony mo�e nie dzia�a�.";
$LNG['join_welcome'] = "Witaj w %s";
$LNG['join_welcome_admin'] = "Nowy u�ytkownik do��czy� do toplisty.";
$LNG['join_approve'] = "Dzi�kuj� za przy��czenie si�!  Twoja strona pojawi si� na li�cie gdy administrator toplisty j� zatwierdzi.  Otrzymasz e-mail z informacj� gdy zostanie ona zatwierdzona."; // 5.2.0
$LNG['join_type'] = "Typ konta"; // 5.1.0
$LNG['join_standard'] = "Standardowy"; // 5.1.0
$LNG['join_error_top'] = "Znaleziono b�ad w twoim podaniu.  Prosz� skorygowa� b��d poni�ej."; // 5.2.0
$LNG['join_ban_top'] = "Twoje podanie zawiera tre�ci zabronione przez administratora toplisty."; // 5.2.0
$LNG['join_security'] = "Bezpiecze�stwo"; // 5.2.0
$LNG['join_confirm_password'] = "Potwierd� has�o"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "Kod linka"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Zapomniane has�o"; // 5.0
$LNG['lost_pw_forgot'] = "Zapomnia�e�/a� has�a?"; // 5.0
$LNG['lost_pw_get'] = "Odzyskaj has�o"; // 5.0
$LNG['lost_pw_emailed'] = "Sprawd� poczt� w celu uzyskania dalszych instrukcji."; // 5.0
$LNG['lost_pw_email'] = "Aby wybra� nowe has�o, kliknij na poni�szy link"; // 5.0
$LNG['lost_pw_new'] = "Wpisz nowe has�o:"; // 5.0
$LNG['lost_pw_set_new'] = "Ustaw nowe has�o:"; // 5.0
$LNG['lost_pw_finish'] = "Has�o zmienione."; // 5.0

// Main Page
$LNG['main_header'] = "Ranking"; // 5.0
$LNG['main_all'] = "Wszystkie strony"; // 4.2.0
$LNG['main_method'] = "Sortowanie";
$LNG['main_members'] = "U�ytkownicy";
$LNG['main_menu_rankings'] = "Ranking";
$LNG['main_menu_join'] = "Do��cz";
$LNG['main_menu_random'] = "Losowy u�ytkownik";
$LNG['main_menu_search'] = "Szukaj";
$LNG['main_menu_lost_code'] = "Zapomniany kod"; // 5.0
$LNG['main_menu_lost_password'] = "Zapomniane has�o"; // 5.0
$LNG['main_menu_edit'] = "Edytuj informacje o u�ytkowniku";
$LNG['main_menu_user_cp'] = "Panel kontrolny u�ytkownika"; // 5.0
$LNG['main_featured'] = "Wspierany u�ytkownik"; // 4.0.2
$LNG['main_executiontime'] = "Czas wykonania skrytpu:"; // 4.0
$LNG['main_queries'] = "Zapyta� do SQL"; // 4.0
$LNG['main_powered'] = "Powered by";

// Ranking Table
$LNG['table_stats'] = "Statystyka";
$LNG['table_unique'] = "Unikalnych";
$LNG['table_total'] = "Razem";
$LNG['table_rank'] = "Pozycja";
$LNG['table_title'] = "Tytu�"; // 4.0
$LNG['table_description'] = "Opis"; // 4.0
$LNG['table_movement'] = "Zminana pozycji";
$LNG['table_up'] = "W g�r�"; // 5.0
$LNG['table_down'] = "W d�"; // 5.0
$LNG['table_neutral'] = "Bez zmian"; // 5.0
$LNG['table_your_site_here'] = "Twoja strona"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "Oce� i skomentuj";
$LNG['rate_message'] = "Prosz� wpisa� ocen� i komentarz dla %s w polu poni�ej."; // 5.2.0
$LNG['rate_rating'] = "Oceny";
$LNG['rate_review'] = "Komentarz - HTML nie dozwolony!"; // 5.0
$LNG['rate_thanks'] = "Dzi�kujemy za ocen�!";
$LNG['rate_error'] = "Ju� ocenia�e� t� stron�.";
$LNG['rate_back'] = "Powr�t do statystyk.";
$LNG['rate_email_admin'] = "Nowy komentarz zosta� napisany w twojej topli�cie."; // 5.1.0

// Search
$LNG['search_header'] = "Szukaj";
$LNG['search_off'] = "Szukanie zosta�o wy��czone.";
$LNG['search_no_sites'] = "Przepraszamy, nic nie znale�iono."; // 5.0
$LNG['search_prev'] = "Poprzeni"; // 3.2.1
$LNG['search_next'] = "Nast�pny"; // 3.2.1
$LNG['search_displaying_results'] = "Wy�wietlanie %s do %s z %s wynik�w dla <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "Statystyka";
$LNG['stats_info'] = "Info";
$LNG['stats_member_since'] = "Do��czy�"; // 5.0
$LNG['stats_rating_avg'] = "�rednia ocen";
$LNG['stats_rating_num'] = "Liczba ocen";
$LNG['stats_rate'] = "Oce� i skomentuj t� stron�";
$LNG['stats_reviews'] = "Komentarze";
$LNG['stats_allreviews'] = "Poka� wszystkie komentarze"; // 4.0
$LNG['stats_week'] = "Tygodniowo"; // 5.0
$LNG['stats_highest'] = "Najwy�sze"; // 5.0
$LNG['stats_overall'] = "Og�lne statystyki"; // 5.2.0
$LNG['stats_overall_average'] = "�rednia (Ostatnie 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Razem (Dotychczas)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "Top %s Sites"; // 4.0
$LNG['ssi_new'] = "%s nowych u�ytkownik�w"; // 5.0
$LNG['ssi_all'] = "Wszystkie strony"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Panel kontrolny u�ytkownika"; // 5.0
$LNG['user_cp_login'] = "Zaloguj"; // 5.0
$LNG['user_cp_logout'] = "Wyloguj"; // 5.0
$LNG['user_cp_welcome'] = "Witaj w panelu kontrolnym u�ytkownika.  Za pomoc� odno�nik�w po lewej mo�esz zarz�dza� swoim kontem."; // 5.0
$LNG['user_cp_logout_message'] = "Zosta�e� wylogowany."; // 5.0
$LNG['user_cp_login_long'] = "Zaloguj ze swoj� nazw� u�ytkownika i has�em albo twoim OpenID."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "Nie znale�iono OpenID server dla %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Musisz najpierw do��czy� do rankingu zanim b�dziesz m�g� wej�� w panel kontrolny u�ytkownika."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Wyst�pi� b��d w czasie przetwarzania twoich danych.  Prosz� spr�bowa� jeszcze raz."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "You must grant access to proceed.  Please try again."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "B��d z serwera: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Nie mo�esz dosta� si� do panelu u�ytkownika, dop�ki twoja strona nie zostanie zaakceptowana przez administratora. Otrzymasz e-mail z informacj� gdy zostanie ona zatwierdzona."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Zaakceptuj nowych u�ytkownik�w"; // 5.0
$LNG['a_approve'] = "Zaakceptuj"; // 4.0
$LNG['a_approve_none'] = "Brak oczekuj�cych na akceptacj�."; // 4.0
$LNG['a_approve_done'] = "U�ytkownik zaakceptowany."; // 4.0
$LNG['a_approve_dones'] = "U�ytkownicy zostali zaakceptowani."; // 4.0
$LNG['a_approve_sel'] = "Zaznaczeni:"; // 5.0

// Admin > Zatwierd� zmienianych u�ytkownik�w // 5.2.0
$LNG['a_approve_edited_header'] = "Zatwierd� zmienianych u�ytkownik�w"; // 5.2.0
$LNG['a_approve_edited_none'] = "Nie ma wpis�w czekaj�cych na akceptacj�."; // 5.2.0
$LNG['a_approve_edited_old'] = "Poprzedni tytu� i adres"; // 5.2.0
$LNG['a_approve_edited_new'] = "Zmieniony tytu� i adres"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Odmowa"; // 5.2.0
$LNG['a_approve_edited_done'] = "Zmiany zosta�y zaakceptowane."; // 5.2.0
$LNG['a_approve_rejected_done'] = "Zmiany zosta�y odrzucone."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Zaakceptuj nowe komentarze."; // 5.0
$LNG['a_approve_rev_none'] = "Brak komentarzy do akceptacji."; // 5.0
$LNG['a_approve_rev_done'] = "Komentarz zaakceptowany."; // 5.0
$LNG['a_approve_rev_dones'] = "Komentarze zaakceptowane."; // 5.0

// Admin > Kopia zapasowa bazy danych // 5.2.0
$LNG['a_backup_header'] = "Kopia zapasowa bazy danych"; // 5.2.0
$LNG['a_backup_warn'] = "Zostanie stworzona kopia twoich u�ytkownik�w, statystyk i ustawie�. Je�li masz du�o u�ytkownik�w, mo�e to zaj�� du�o czasu i zostanie stworzony du�y plik."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Stw�rz w�asn� stron�"; // 5.1.0
$LNG['a_create_page_id'] = "ID strony - b�dzie u�ywane w URL, wi�c mo�e zawiera� tylko litery, liczby, podkre�lenia dolne"; // 5.1.0
$LNG['a_create_page_error_id'] = "ID strony mo�e zawiera� tylko litery, liczby, podkre�lenia dolne.  Prosz� wr�ci� i poprawi� ID strony."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Ju� istnieje strona o takim ID.  Prosz� wr�ci� i wybra� nowe."; // 5.1.0
$LNG['a_create_page_created'] = "Strona stworzona.  Musisz r�cznie doda� link do %s w wrapper.html."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "Usu� u�ytkownika"; // 5.0
$LNG['a_del_headers'] = "Usu� u�ytkownik�w"; // 5.0
$LNG['a_del_done'] = "U�ytkownik usuni�ty."; // 5.0
$LNG['a_del_dones'] = "U�ytkownicy usuni�ci."; // 5.0
$LNG['a_del_warn'] = "Czy na pewno usun�� %s?"; // 5.0
$LNG['a_del_multi'] = "ci %s u�ytkownicy"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Usu� filtrowane s�owo"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Usu� filtrowane s�owa"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Filtrowane s�owo zosta�o usuni�te."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Filtrowane s�owa zosta�y usuni�te."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "Czy napewno chcesz usun�� %s z listy filtrowanych s��w?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "te %s s�owa"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Nieprawid�owe ID filtrowanego s�owa.  Prosz� spr�bowa� ponownie."; // 5.1.0

// Admin > Usu�/zablokuj // 5.2.0
$LNG['a_del_ban_header'] = "Usu� wpis z czarnej listy"; // 5.2.0
$LNG['a_del_ban_headers'] = "Usu� wpisy z czarnej listy"; // 5.2.0
$LNG['a_del_ban_done'] = "Wips zosta� usuni�ty z czarnej listy."; // 5.2.0
$LNG['a_del_ban_dones'] = "Wipsy zosta�y usuni�te z czarnej listy."; // 5.2.0
$LNG['a_del_ban_warn'] = "Czy jeste� pewien, �e chcesz usun�� %s z czarnej listy?"; //5.2.0
$LNG['a_del_ban_multi'] = "te %s wpisy"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "Nieprawid�owy ID czarnej listy.  Prosz� spr�buj ponownie."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Usu� w�asn� stron�"; // 5.1.0
$LNG['a_del_page_headers'] = "Usu� w�asne strony"; // 5.1.0
$LNG['a_del_page_done'] = "W�asna strona zosta�a usuni�ta."; // 5.1.0
$LNG['a_del_page_dones'] = "W�asne strony zosta�a usuni�te."; // 5.1.0
$LNG['a_del_page_warn'] = "Na pewno usun�� %s?"; //5.1.0
$LNG['a_del_page_multi'] = "te %s strony"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Nieprawid�owy ID strony.  Prosz� spr�bowa� ponownie."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Usu� kometnarz"; // 5.0
$LNG['a_del_rev_headers'] = "Usu� kometnarze"; // 5.0
$LNG['a_del_rev_done'] = "Komentarz usuni�ty."; // 5.0
$LNG['a_del_rev_dones'] = "Komentarze usuni�te."; // 5.0
$LNG['a_del_rev_warn'] = "Czy napewno skasowa� ten komentarz?"; //5.0
$LNG['a_del_rev_warns'] = "Czy napewno skasowa� te komentarze?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Niepoprawny ID komentarza.  Prosz� spr�bowa� ponownie."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "Edytuj u�ytkownika"; // 5.0
$LNG['a_edit_site_is'] = "Ta strona jest"; // 4.0
$LNG['a_edit_active'] = "Aktywna (na li�cie)"; // 4.0
$LNG['a_edit_inactive'] = "Nieaktywna (poza list�)"; // 5.0
$LNG['a_edit_edited'] = "U�ytkownik wyedytowany.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Edytuj filtrowane s�owo"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Filtrowane s�owo zosta�o wyedytowane."; // 5.1.0

// Admin > Edytuj blokad� // 5.2.0
$LNG['a_edit_ban_header'] = "Edytuj zablokowany wpis"; // 5.2.0
$LNG['a_edit_ban_edited'] = "Zablokowany wpis zosta� wyedytowany."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Edytuj w�asn� stron�"; // 5.1.0
$LNG['a_edit_page_content'] = "Zawarto�� - mo�esz u�ywa� tu HTML"; // 5.1.0
$LNG['a_edit_page_edited'] = "Strona wyedytowana."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Edit Review"; // 5.0
$LNG['a_edit_rev_edited'] = "The review has been edited.";

// Admin > Email Members
$LNG['a_email_header'] = "Wy�lij email do u�ytkownik�w"; // 5.0
$LNG['a_email_subject'] = "Temat"; // 4.2.0
$LNG['a_email_message'] = "Wiadomo��"; // 4.2.0
$LNG['a_email_msg_sent'] = "E-mail wys�any do %s"; // 5.0
$LNG['a_email_not_sent'] = "Nie mo�na wys�a� e-mial do %s"; // 5.0
$LNG['a_email_sent'] = "%s u�ytkownik�w dostanie e-mial."; // 4.2.0
$LNG['a_email_failed'] = "%s u�ytkownik�w nie dostanie e-maila."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Zosta�e� wylogowany z panelu administracyjnego."; // 5.0

// Admin > Main
$LNG['a_header'] = "Administracja"; // 5.0
$LNG['a_main'] = "Witaj w administracji.  U�yj odno�nik�w po lewej aby administrowa� stron�."; // 5.0
$LNG['a_main_approve'] = "1 strona czeka na akceptacj�."; // 5.0
$LNG['a_main_approves'] = "%s stron czeka na akceptacj�."; // 5.0
$LNG['a_main_approve_edit'] = "Jedna strona czeka na twoja akceptacj�."; // 5.2.0
$LNG['a_main_approve_edits'] = "S� %s strony czekaj�ce na twoj� akceptacj�."; // 5.2.0
$LNG['a_main_approve_rev'] = "1 komentarz czeka na akceptacj�."; // 5.0
$LNG['a_main_approve_revs'] = "%s komentarzy czeka na akceptacje."; // 5.0
$LNG['a_main_your'] = "Wersja"; // 5.0
$LNG['a_main_latest'] = "Najnowsza wersja"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "Zarz�dzaj u�ytkownikami"; // 5.0
$LNG['a_man_actions'] = "Dzia�anie"; // 4.2.0
$LNG['a_man_edit'] = "Edytuj"; // 4.2.0
$LNG['a_man_delete'] = "Usu�"; // 4.2.0
$LNG['a_man_email'] = "E-mail"; // 4.2.0
$LNG['a_man_all'] = "Zaznacz wszystkich"; // 5.0
$LNG['a_man_none'] = "Odznacz wszystkich"; // 5.0
$LNG['a_man_del_sel'] = "Usu� zaznaczonych"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "Filter zawarto�ci"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "Wpisz s�owo i jego zastepnik poni�ej.  Np: na s�owo \"cholera\" w s�owie podstawowym \"ch***\" w zast�pniku."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Dok�adne dopasowywanie zast�pi tylko dok�adnie takie s�owo.  Globalne dopasowywanie zast�pi wszystko co zawiera to s�owo w sobie.  Np, globalne dopasowanie s�owa \"hell\" zast�pi  \"shell\" and \"hello\""; // 5.1.0
$LNG['a_man_bad_words_word'] = "S�owo"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "Zast�pnik"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Dopasowywanie"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Dok�adne"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Globalne"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Filtruj s�owo"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" zosta�o dodane do filtra."; // 5.1.0

// Admin > Zarz�dzanie zablokowanymi // 5.2.0
$LNG['a_man_ban_header'] = "Czarna lista"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Aby zablokowa� strony i u�ytkownik�w z toplisty, wype�nij poni�szy formularz.  Gdy u�ytkownik do��cza, adres URL, email, nazwa u�ytkownika, i adres IP s� sprawdzane.  Gdy strona jest edytowana, adres URL i email s� sprawdzane.<br /><br />Czarna lisa nie wp�ynie na twoich obecnych u�ytkownik�w."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "Dok�adne dopasowywanie zadzia�a tylko gdy b�dzie mu odpowiada� identyczny ci�g znak�w.  Globalne dopasowywanie zadzia�a gdy cokolwiek zawiera dany ci�g zank�w.  Wi�c, globalne doasowywanie do http://www.yahoo.com/ b�dzie pasowa� do ka�dej strony zawieraj�cej http://www.yahoo.com/ w adresie URL, podczas gdy dok�adne dopasowywanie http://www.yahoo.com/ b�dzie pasowa� tylko do tego adresu URL."; // 5.2.0
$LNG['a_man_ban_string'] = "Ci�g"; // 5.2.0
$LNG['a_man_ban_field'] = "Pole"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" zosta�a dodana do czarnej listy."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Zarz�dzaj w�asnymi stronami"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Zarz�dzaj komentarzami"; // 5.0
$LNG['a_man_rev_enter'] = "Aby zarz�dza� komentarzami wpisz ID u�ytkownika poni�ej."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Komentarz"; // 5.0
$LNG['a_man_rev_date'] = "Data"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Menu";
$LNG['a_menu_main'] = "G�owna"; // 5.0
$LNG['a_menu_approve'] = "Zaakceptuj nowych u�ytkownik�w";
$LNG['a_menu_approve_edits'] = "Zaakceptuj u�ytkownik�w"; // 5.2.0
$LNG['a_menu_manage'] = "Zarz�dzaj u�ytkownikami"; // 4.2.0
$LNG['a_menu_settings'] = "Zmie� ustawienia"; // 5.0
$LNG['a_menu_manage_bad_words'] = "Filtr zawarto�ci"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Czarna lista"; // 5.2.0
$LNG['a_menu_backup'] = "Kopia bazy danych"; // 5.2.0
$LNG['a_menu_skins'] = "Sk�ry i kategorie"; // 5.0
$LNG['a_menu_approve_reviews'] = "Zaakceptuj komentarze"; // 5.0
$LNG['a_menu_manage_reviews'] = "Zarz�dzaj komentarzami"; // 5.0
$LNG['a_menu_email'] = "E-mail do u�ytkownik�w";
$LNG['a_menu_delete_review'] = "Usu� komentarz";
$LNG['a_menu_logout'] = "Wyloguj";
$LNG['a_menu_delete'] = "Usu� u�ytkownika";
$LNG['a_menu_edit'] = "Edytuj u�ytkownika";
$LNG['a_menu_create_page'] = "Dodaj w�asn� stron�"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Zarz�dzaj w�asnymi stronami"; // 5.1.0
$LNG['a_header_members'] = "U�ytkownicy"; // 5.0
$LNG['a_header_settings'] = "Ustawienia"; // 5.0
$LNG['a_header_tools'] = "Narz�dzia"; // 5.2.0
$LNG['a_header_reviews'] = "Komentarze"; // 5.0
$LNG['a_header_pages'] = "W�asne strony"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Zmie� ustawienia";
$LNG['a_s_help'] = "Pomoc"; // 5.1.0

$LNG['a_s_general'] = "Ustawienia g��wne";
$LNG['a_s_admin_password'] = "Has�o administratora";
$LNG['a_s_list_name'] = "Nazwa toplisty";
$LNG['a_s_list_url'] = "Adres katalogu toplisty";
$LNG['a_s_default_language'] = "J�zyk";
$LNG['a_s_your_email'] = "Tw�j adres e-mail";

$LNG['a_s_sql'] = "Ustawienia SQL";
$LNG['a_s_sql_type'] = "Typ bazy danych"; // 4.1.0
$LNG['a_s_sql_host'] = "Host";
$LNG['a_s_sql_database'] = "Baza danych";
$LNG['a_s_sql_username'] = "Login";
$LNG['a_s_sql_password'] = "Haslo";

$LNG['a_s_ranking'] = "Ustawienia rankingu";
$LNG['a_s_num_list'] = "Liczba u�ytkownik�w na stron�"; // 5.0
$LNG['a_s_ranking_period'] = "Okres rankingu"; // 5.0
$LNG['a_s_ranking_method'] = "Metoda rankingu"; // 5.0
$LNG['a_s_ranking_average'] = "Ranking og�lny czy poprostu %s"; // 5.0
$LNG['a_s_featured_member'] = 'Wspierany u�ytkownik - Musisz dodac {$featured_member} do wrapper.html po aktywowaniu tej opcji.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Liczba u�ytkownik�w the _top skin";
$LNG['a_s_ad_breaks'] = "Pokazuj reklamy miedzy tymi pozycjami (separate with commas) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "Wype�nij wolne przestrzenie s�owami: \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "Ustawienia u�ytkownika";
$LNG['a_s_active_default'] = "Wymagaj akceptacji nowych u�ytkownik�w";
$LNG['a_s_active_default_review'] = "Wymagaj akceptacji nowych komentarzy";
$LNG['a_s_delete_after'] = "Usu� nieaktywnych u�ytkownik�w po dniach (ustaw 0 aby wy��czy�)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Wy�lij e-mial gdy dodano u�ytkownika"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Wy�lij e-mail gdy dodano komentarz"; // 5.1.0
$LNG['a_s_max_banner_width'] = "Maksymalna szeroko�� bannera (ustaw 0 aby wy��czy�)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "Maksymalna wysoko�� bannera (ustaw 0 aby wy��czy�)"; // 4.2.0
$LNG['a_s_default_banner'] = "Domy�lny banner dla tych co nie posiadaj�";

$LNG['a_s_button'] = "Ustawienia przycisk�w";
$LNG['a_s_ranks_on_buttons'] = "Pozycja na przycisku -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Przycisk statystyk"; // 4.2.0
$LNG['a_s_button_url'] = "Je�li tak/nie - adres do domy�lnego przycisku"; // 4.0
$LNG['a_s_button_dir'] = "Je�li tak - adres do katalogu z przyciskami"; // 4.0
$LNG['a_s_button_ext'] = "Je�li tak - rozszerzenie przycisku(gif, png, jpg, itd.)"; // 4.0
$LNG['a_s_button_num'] = "Je�li tak - ilo�� zrobionych przycisk�w"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google-friendly links - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Strona bramki do obrony przed oszustwami";
$LNG['a_s_captcha'] = "Weryfikacja obrazkowa (przeciw spamowi) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Pytanie i odpowied� kontrolna w celu zablokowania spammer�w (zostaw puste aby wy��czy�) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Inne ustawienia";
$LNG['a_s_search'] = "Szukaj";
$LNG['a_s_time_offset'] = "Czas offsetu serwera (w godzinach)";

$LNG['a_s_on'] = "On";
$LNG['a_s_off'] = "Off";
$LNG['a_s_days'] = "Dni";
$LNG['a_s_months'] = "Miesi�cy";
$LNG['a_s_weeks'] = "Tygodni"; // 4.2.0
$LNG['a_s_yes'] = "Tak";
$LNG['a_s_no'] = "Nie";
$LNG['a_s_answer'] = "Odpowied�"; // 5.2.0

$LNG['a_s_updated'] = "Ustawienia zaktualizowane.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "Sk�ry i kategorie"; // 5.0
$LNG['a_skins_default'] = "Domy�lna sk�ra"; // 5.0
$LNG['a_skins_set_default'] = "Ustaw domy�ln� sk�r�"; // 5.0
$LNG['a_skins_anon'] = "Anonimowy"; // 5.0
$LNG['a_skins_default_done'] = "Domy�lna sk�ra ustawiona."; // 5.0
$LNG['a_skins_categories_done'] = "Kategoria sk�r ustawiona."; // 5.0
$LNG['a_skins_new_category_done'] = "Stworzono now� kategori�."; // 5.0
$LNG['a_skins_delete_done'] = "Kategoria usuni�ta."; // 5.0
$LNG['a_skins_delete_error'] = "Nie mo�esz usun�� ostatniej kategorii."; // 5.1.0
$LNG['a_skins_edit_done'] = "Kategoria wyedytowana."; // 5.0
$LNG['a_skins_invalid_skin'] = "Nieprawid�owa sk�ra: %s.  Prosz� spr�bowa� ponownie."; // 5.0
$LNG['a_skins_categories'] = "Kategorie"; // 5.0
$LNG['a_skins_new_category'] = "Stw�rz now� kategori�"; // 5.0
$LNG['a_skins_set_skins'] = "Ustaw sk�r� kategorii"; // 5.0
$LNG['a_skins_edit_category'] = "Edytuj kategori�"; // 5.0
$LNG['a_skins_category_name'] = "Nazwa kategorii"; // 5.0
$LNG['a_skins_diff_skins'] = "Wybierz poni�ej je�li chcesz r�ne sk�ry do r�nych kategorii."; // 5.0
?>
