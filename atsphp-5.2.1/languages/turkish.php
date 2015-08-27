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
$translation = 'Turkish (T�rk�e)';
$translator_name = 'M.Bahattin EKEN';
$translator_email = 'admin@sitelerimiz.biz';
$translator_url = 'http://www.sitelerimiz.biz/';

// Set this to the character encoding of your translation
$LNG['charset'] = "iso-8859-9";

// Global
$LNG['g_form_submit_short'] = "Git";
$LNG['g_username'] = "Kullan�c�";
$LNG['g_url'] = "URL";
$LNG['g_title'] = "Ba�l�k";
$LNG['g_description'] = "A��klama";
$LNG['g_category'] = "Kategori"; // 4.1.0
$LNG['g_email'] = "E-mail";
$LNG['g_banner_url'] = "Banner URL";
$LNG['g_password'] = "�ifre";
$LNG['g_average'] = "Ortalama";
$LNG['g_today'] = "Bug�n";
$LNG['g_yesterday'] = "D�n";
$LNG['g_daily'] = "G�nl�k"; // 5.0
$LNG['g_this_month'] = "Bu ay"; // 5.0
$LNG['g_last_month'] = "Ge�en ay"; // 5.0
$LNG['g_monthly'] = "Ayl�k"; // 5.0
$LNG['g_this_week'] = "Bu Hafta"; // 5.0
$LNG['g_last_week'] = "Ge�en Hafta"; // 5.0
$LNG['g_weekly'] = "Haftal�k"; // 5.0
$LNG['g_pv'] = 'G�sterimler'; // 5.0
$LNG['g_overall'] = 'Toplam'; // 5.0
$LNG['g_in'] = 'Giri�ler'; // 5.0
$LNG['g_out'] = '��k��lar'; // 5.0
$LNG['g_unq_pv'] = "Tekil sayfa g�sterimi"; // 5.0
$LNG['g_tot_pv'] = "Toplam sayfa g�sterimi"; // 5.0
$LNG['g_unq_in'] = "Tekil giri�ler"; // 5.0
$LNG['g_tot_in'] = "Toplam giri�ler"; // 5.0
$LNG['g_unq_out'] = "Tekil ��k��lar"; // 5.0
$LNG['g_tot_out'] = "Toplam ��k��lar"; // 5.0
$LNG['g_invalid_u_or_p'] = "Yanl�� kullan�c� ad� ya da �ifre. L�tfen tekrar deneyin."; // 5.0
$LNG['g_invalid_u'] = "Yanl�� kullan�c� ad�.  L�tfen tekrar deneyin."; // 5.0
$LNG['g_invalid_p'] = "Yanl�� �ifre.  L�tfen tekrar deneyin."; // 5.0
$LNG['g_session_expired'] = "Oturumunuz sonland�.  L�tfen tekrar deneyin."; // 5.0
$LNG['g_error'] = "Hata"; // 5.0
$LNG['g_delete_install'] = "G�venlik sebebiyle, siteyi �al��t�rmadan �nce install klas�r�n� silin."; // 5.0
$LNG['g_ip'] = "IP Adres"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "Bilgilerinizi d�zenleyin";
$LNG['edit_info_edited'] = "Bilgileriniz ba�ar�yla de�i�tirildi.";
$LNG['edit_password_blank'] = "Eski �ifrenizi kullanmak istiyorsan�z buray� bo� b�rak�n"; // 4.0
$LNG['edit_delay'] = "Sitenizin ba�l���n� de�i�tirin, de�i�ikli�in g�r�lebilmesi i�in url'nin admin taraf�ndan onaylanmas� gerekmektedir."; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "Giri�";
$LNG['gateway_text'] = "Toplist'e girmek i�in a�a��daki linki t�klay�n�z.";
$LNG['gateway_vote'] = "Oy vererek giri�.";
$LNG['gateway_no_vote'] = "Oy vermeden giri�."; // 5.0

// Install
$LNG['install_header'] = "Kurulum";
$LNG['install_welcome'] = "Aardvark Topsites PHP 5 kurulumuna ho�geldiniz.  Scripti y�klemek i�in a�a��daki alanlar� doldurun.";
$LNG['install_sql_prefix'] = "Tablo �n eki - sadece ayn� veritaban�nda birden fazla listeyle �al���yorsan�z de�i�tirin";
$LNG['install_error_chmod'] = "settings_sql.php dosyas�na yaz�lam�yor. settings_sql.php dosyan�z�n CHMOD de�erini 666 yap�n�z.";
$LNG['install_error_sql'] = "SQL veritaban�yla ba�lant� kurulam�yor.  L�tfen geri gelip SQL ayarlar�n�z� kontrol edin.";
$LNG['install_done'] = "Toplistiniz kurulmu�tur.  Install klas�r�n� silebilirsiniz.";
$LNG['install_your'] = "Toplist Listeniz";
$LNG['install_admin'] = "Y�netim";
$LNG['install_manual'] = "K�lavuz";
$LNG['upgrade_header'] = "Y�kselt";
$LNG['upgrade_welcome'] = "Aardvark Topsites PHP 5 y�kseltmesine ho�geldiniz.  Y�kseltmeden �nce t�m bilgilerinizin yede�ini almay� unutmay�n.";
$LNG['upgrade_error_version'] = "Y�kseltme sadece Aardvark Topsites PHP 4.1.0 veya daha �st versiyonlar i�indir.";
$LNG['upgrade_done'] = "Toplistiniz y�kseltilmi�tir.  Install klas�r�n� silebilirsiniz.";
$LNG['upgrade_version'] = "L�tfen %s versiyonundan y�ksletti�inize emin olun."; // 5.1.0
$LNG['install_mailing_list'] = "E�er Aardvark Topsites PHP mail listesine kat�lmak istiyorsan�z, a�a��ya mail adresinizi giriniz.  Scriptler hakk�nda �nemli duyurular�n oldu�u bir liste, �rne�in yeni versiyon ve g�venlik tavsiyeleri gibi."; // 5.2.0

// Join
$LNG['join_header'] = "Site Ekle";
$LNG['join_enter_text'] = "Resimdeki yaz�y� girin:"; // 4.2.2
$LNG['join_enter_text_read'] = "Okuyamad�n�z m�?"; // 5.2.0
$LNG['join_user'] = "Kullan�c� Ad�"; // 5.0
$LNG['join_website'] = "Web Sitesi"; // 5.0
$LNG['join_banner_size'] = "(Maksimum boyut: %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "Ge�erli bir kulan�c� ad� girin: Sadece rakam,harf,alt �izgi ve tire kullanabilirsiniz."; // 5.0
$LNG['join_error_username_duplicate'] = "Ge�erli bir kulan�c� ad� girin: Bu kullan�c� ad� kullan�lmaktad�r."; // 5.0
$LNG['join_error_url'] = "Ge�erli bir URL giriniz.";
$LNG['join_error_email'] = "Ge�erli bir e-mail giriniz.";
$LNG['join_error_title'] = "Siteniz i�in bir ba�l�k giriniz.";
$LNG['join_error_password'] = "Bir �ifre giriniz.";
$LNG['join_error_confirm_password'] = "Parolalar uyu�mad�."; // 5.2.0
$LNG['join_error_urlbanner'] = "Ge�erli bir banner giriniz.  E�er yoksa bo� b�rak�n�z."; // 5.2.0
$LNG['join_error_time'] = "L�tfen yeniden y�klemeyiniz."; // 4.2.0
$LNG['join_error_captcha'] = "Girdi�iniz yaz� resimdeki yaz�yla uyu�muyor."; // 4.2.2
$LNG['join_error_question'] = "Cevab�n�z hatal�.  L�tfen cevab�n�z� d�zeltin."; // 5.2.0
$LNG['join_thanks'] = "Te�ekk�rler siteniz eklendi! A�a��daki kodu sitenize ekleyiniz.";
$LNG['join_change_warning'] = "Kodda de�i�iklik yaparsan�z �al��mayabilir.";
$LNG['join_welcome'] = "%s'e Hosgeldiniz";
$LNG['join_welcome_admin'] = "Yeni bir �ye kat�ld�.";
$LNG['join_approve'] = "Kat�ld���n�z i�in te�ekk�r ederiz! Admin onaylad��� zaman siteniz listelenecektir. Siteniz onayland��� zaman emailinize daha detayl� bilg g�nderilecektir."; // 5.2.0
$LNG['join_type'] = "Hesap Tipi"; // 5.1.0
$LNG['join_standard'] = "Standart"; // 5.1.0
$LNG['join_error_top'] = "Ba�vurunuzda bir hata bulundu. L�tfen d�zeltiniz."; // 5.2.0
$LNG['join_ban_top'] = "Ba�vurunuz i�eri�inizde admin taraf�ndan yasaklanan bilgiler bulunmaktad�r."; // 5.2.0
$LNG['join_security'] = "G�venlik"; // 5.2.0
$LNG['join_confirm_password'] = "Parolay� Do�rulay�n"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "HTML Kodu"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "Kay�p �ifre"; // 5.0
$LNG['lost_pw_forgot'] = "�ifrenizi mi unuttunuz?"; // 5.0
$LNG['lost_pw_get'] = "�ifreyi sor"; // 5.0
$LNG['lost_pw_emailed'] = "�ifrenizi de�i�tirmeniz i�in gerekli bilgiler e-mailinize yolland�."; // 5.0
$LNG['lost_pw_email'] = "Yeni bir �ifre belirlemek i�in a�a��daki URLye gidiniz:"; // 5.0
$LNG['lost_pw_new'] = "Yeni �ifrenizi giriniz"; // 5.0
$LNG['lost_pw_set_new'] = "Yani �ifrenizi ayarlay�n�z"; // 5.0
$LNG['lost_pw_finish'] = "Yeni �ifreniz se�ti�iniz �ifre ile de�i�tirildi."; // 5.0

// Main Page
$LNG['main_header'] = "Anasayfa"; // 5.0
$LNG['main_all'] = "T�m Siteler"; // 4.2.0
$LNG['main_method'] = "S�ralama metodu";
$LNG['main_members'] = "�yeler";
$LNG['main_menu_rankings'] = "S�ralama";
$LNG['main_menu_join'] = "Site Ekle";
$LNG['main_menu_random'] = "Rastgele";
$LNG['main_menu_search'] = "Arama";
$LNG['main_menu_lost_code'] = "HTML Kodu"; // 5.0
$LNG['main_menu_lost_password'] = "Kay�p �ifre"; // 5.0
$LNG['main_menu_edit'] = "�ye Bilgileri";
$LNG['main_menu_user_cp'] = "�ye Kontrol Paneli"; // 5.0
$LNG['main_featured'] = "G�n�n �yesi"; // 4.0.2
$LNG['main_executiontime'] = "Script Derleme S�resi"; // 4.0
$LNG['main_queries'] = "SQL Sorgular�"; // 4.0
$LNG['main_powered'] = "Destekleyen";

// Ranking Table
$LNG['table_stats'] = "�statistikler";
$LNG['table_unique'] = "Tekil";
$LNG['table_total'] = "�o�ul";
$LNG['table_rank'] = "Puan";
$LNG['table_title'] = "Ba�l�k"; // 4.0
$LNG['table_description'] = "A��klama"; // 4.0
$LNG['table_movement'] = "Hareket";
$LNG['table_up'] = "Yukar�"; // 5.0
$LNG['table_down'] = "A�a��"; // 5.0
$LNG['table_neutral'] = "Sabit"; // 5.0
$LNG['table_your_site_here'] = "Sitenizi Ekleyin"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "Oy ver ve yorum yap";
$LNG['rate_message'] = "L�tfen %s i�in puan verin ve yorumunuzu yaz�n."; // 5.2.0
$LNG['rate_rating'] = "Puan";
$LNG['rate_review'] = "Yorum"; // 5.0
$LNG['rate_thanks'] = "Puan�n�z ve yorumunuz i�in te�ekk�rler!";
$LNG['rate_error'] = "Bu siteye zaten oy verip yorum yapm��s�n�z.";
$LNG['rate_back'] = "�statistiklere d�n";
$LNG['rate_email_admin'] = "Listeye yeni bir yorum eklenmi�tir."; // 5.1.0

// Search
$LNG['search_header'] = "Arama";
$LNG['search_off'] = "Arama �zelli�i iptal edilmi�tir.";
$LNG['search_no_sites'] = "Arad���n�zla ilgili bir site bulunamad�."; // 5.0
$LNG['search_prev'] = "�nceki"; // 3.2.1
$LNG['search_next'] = "Sonraki"; // 3.2.1
$LNG['search_displaying_results'] = "%s ile %s aras�nda %s adet sonu� <b>%s</b> i�in g�steriliyor."; // 5.1.0

// Stats
$LNG['stats_header'] = "�statistikler";
$LNG['stats_info'] = "Bilgi";
$LNG['stats_member_since'] = "Kay�t Zaman�"; // 5.0
$LNG['stats_rating_avg'] = "Ortalama Puan";
$LNG['stats_rating_num'] = "S�ralama say�s�";
$LNG['stats_rate'] = "Siteye puan verin ve yorum yap�n";
$LNG['stats_reviews'] = "Yorumlar";
$LNG['stats_allreviews'] = "T�m yorumlar� g�ster"; // 4.0
$LNG['stats_week'] = "Hafta"; // 5.0
$LNG['stats_highest'] = "En Y�ksek"; // 5.0
$LNG['stats_overall'] = "Detayl� �statistikler"; // 5.2.0
$LNG['stats_overall_average'] = "Ortalama (Son 10 %s)"; // 5.2.0
$LNG['stats_overall_total'] = "Toplam (T�m Zamanlar)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "En iyi %s Site"; // 4.0
$LNG['ssi_new'] = "En Yeni %s �ye"; // 5.0
$LNG['ssi_all'] = "T�m Siteler"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "Kullan�c� Kontrol Paneli"; // 5.0
$LNG['user_cp_login'] = "Giri�"; // 5.0
$LNG['user_cp_logout'] = "��k��"; // 5.0
$LNG['user_cp_welcome'] = "Kullan�c� kontrol paneline ho�geldiniz. Sol taraftaki men�y� kullanarak hesab�n�z� y�netebilirsiniz."; // 5.0
$LNG['user_cp_logout_message'] = "Kullan�c� kontrol panelinden ��k�� yapt�n�z."; // 5.0
$LNG['user_cp_login_long'] = "Kullan�c� ad� ve �ifrenizle ya da OpenID ile giri� yap�n."; // 5.1.0
$LNG['user_cp_openid'] = "OpenID"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "%s i�in OpenID bulunamad�."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "Kontrol paneline girmeden �nce topliste �ye olman�z gerekmektedir."; // 5.1.0
$LNG['user_cp_openid_error_general'] = "Giri� yap�l�rken hata olu�tu.L�tfen tekrar deneyin."; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "Girmeniz i�in onaylaman�z gerekmektedir.L�tfen tekrar deneyin."; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "Server Hatas�: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "Siteniz onaylanmad��� s�rece kullan�c� kontrol paneline giremezsiniz. Siteniz onayland��� zaman bir email alacaks�n�z."; // 5.2.0

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "Yeni Site Onaylama"; // 5.0
$LNG['a_approve'] = "Onayla"; // 4.0
$LNG['a_approve_none'] = "Bekleyen ba�vuru yok."; // 4.0
$LNG['a_approve_done'] = "Site ba�ar�yla onayland�."; // 4.0
$LNG['a_approve_dones'] = "Siteler ba�ar�yla onayland�."; // 4.0
$LNG['a_approve_sel'] = "Se�ilenler:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "�ye De�i�ikliklerini Onayla"; // 5.2.0
$LNG['a_approve_edited_none'] = "Onay bekleyen d�zenleme yok."; // 5.2.0
$LNG['a_approve_edited_old'] = "�nceki Ba�l�k ve URL"; // 5.2.0
$LNG['a_approve_edited_new'] = "D�zenlenen Ba�l�k ve URL"; // 5.2.0
$LNG['a_approve_edited_reject'] = "Reddet"; // 5.2.0
$LNG['a_approve_edited_done'] = "De�i�iklikler onayland�."; // 5.2.0
$LNG['a_approve_rejected_done'] = "De�i�iklikler reddedildi."; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "Yeni Yorum Onaylama"; // 5.0
$LNG['a_approve_rev_none'] = "Bekleyen yorum yok."; // 5.0
$LNG['a_approve_rev_done'] = "Yorum ba�ar�yla onayland�."; // 5.0
$LNG['a_approve_rev_dones'] = "Yorumlar ba�ar�yla onayland�."; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "Veritaban� Yedekle"; // 5.2.0
$LNG['a_backup_warn'] = "Kullan�c�lar�n�z�n,istatistiklerinizin ve ayarlar�n�z�n bir yede�i olu�turacakt�r. E�er �ok fazla �yeniz var ise i�lem biraz uzun s�rebilir."; // 5.2.0

// Admin > Create Custom Page // 5.1.0
$LNG['a_create_page_header'] = "Yeni Sayfa Olu�tur"; // 5.1.0
$LNG['a_create_page_id'] = "Sayfa ID - Bu URL verilirken kullan�lacakt�r, sadece harf, say�, alt�izgi ve tire i�erebilir"; // 5.1.0
$LNG['a_create_page_error_id'] = "Sayfa IDleri sadece harf, say�, alt�izgi ve tire i�erebilir.  L�tfen geri gidip sayfa IDsini de�i�tirin."; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Bu sayfa IDsinde sayfa bulunmaktad�r.  L�tfen geri gidip ba�ka bir sayfa IDsi se�in."; // 5.1.0
$LNG['a_create_page_created'] = "Sayfa olu�turuldu.  L�tfen elle %s da wrapper.html i�inde link verin."; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "�ye Sil"; // 5.0
$LNG['a_del_headers'] = "�yeleri Sil"; // 5.0
$LNG['a_del_done'] = "�ye ba�ar�yla silindi."; // 5.0
$LNG['a_del_dones'] = "�yeler ba�ar�yla silindi."; // 5.0
$LNG['a_del_warn'] = "%s adl� kullan�c�y� silmek istedi�inize emin misiniz??"; // 5.0
$LNG['a_del_multi'] = "Bu %s adl� �yeler"; //5.0

// Admin > Delete Bad Word // 5.1.0
$LNG['a_del_bad_word_header'] = "Filtreli Kelimeyi Sil"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "Filtreli Kelimeleri Sil"; // 5.1.0
$LNG['a_del_bad_word_done'] = "Filtreli Kelime Silindi."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "Filtreli Kelimeler Silindi."; // 5.1.0
$LNG['a_del_bad_word_warn'] = "%s kelimesini listeden silmek istiyormusunuz?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "Bu %s kelimelerini"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "Yanl�� filtreli kelime IDsi.  L�tfen tekrar deneyin."; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "Kara Listeden Sil"; // 5.2.0
$LNG['a_del_ban_headers'] = "Kara Listeden Sil."; // 5.2.0
$LNG['a_del_ban_done'] = "Bilgi kara listeden silinmi�tir."; // 5.2.0
$LNG['a_del_ban_dones'] = "Bilgiler kara listeden silinmi�tir."; // 5.2.0
$LNG['a_del_ban_warn'] = "%s kara listeden silinecektir, emin misiniz?"; //5.2.0
$LNG['a_del_ban_multi'] = "bu %s giri�"; //5.2.0
$LNG['a_del_ban_invalid_id'] = "Hatal� kara liste ID'si.  L�tfen tekrar deneyin."; // 5.2.0

// Admin > Delete Custom Page // 5.1.0
$LNG['a_del_page_header'] = "Yeni Sayfay� Sil"; // 5.1.0
$LNG['a_del_page_headers'] = "Yeni Sayfalar� Sil"; // 5.1.0
$LNG['a_del_page_done'] = "Yeni Sayfa Silindi."; // 5.1.0
$LNG['a_del_page_dones'] = "Yeni Sayfalar Silindi."; // 5.1.0
$LNG['a_del_page_warn'] = "%s Bu sayfay� silmek istedi�inize emin misiniz?"; //5.1.0
$LNG['a_del_page_multi'] = "Bu %s adl� sayfalar"; //5.1.0
$LNG['a_del_page_invalid_id'] = "Yanl�� yeni sayfa IDsi.  L�tfen tekrar deneyin."; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "Yorum Sil"; // 5.0
$LNG['a_del_rev_headers'] = "Yorumlar� Sil"; // 5.0
$LNG['a_del_rev_done'] = "Yorum ba�ar�yla silindi."; // 5.0
$LNG['a_del_rev_dones'] = "Yorumlar ba�ar�yla silindi."; // 5.0
$LNG['a_del_rev_warn'] = "Yorumu silmek istedi�inize emin misiniz?"; //5.0
$LNG['a_del_rev_warns'] = "Yorumlar� silmek istedi�inize emin misiniz?"; //5.0
$LNG['a_del_rev_invalid_id'] = "Bu id numaras�na sahip yorum yok."; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "�ye D�zenle"; // 5.0
$LNG['a_edit_site_is'] = "�yenin sitesi"; // 4.0
$LNG['a_edit_active'] = "Aktif (Listelenen)"; // 4.0
$LNG['a_edit_inactive'] = "�naktif (Listelenmeyen)"; // 5.0
$LNG['a_edit_edited'] = "�ye ba�ar�yla d�zenlendi.";

// Admin > Edit Bad Word // 5.1.0
$LNG['a_edit_bad_word_header'] = "Filtreli Kelimeleri Y�net"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "Filtreli Kelimeler D�zenlendi."; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "Kara Listeyi D�zenle"; // 5.2.0
$LNG['a_edit_ban_edited'] = "Kara liste d�zenlendi."; // 5.2.0

// Admin > Edit Custom Page // 5.1.0
$LNG['a_edit_page_header'] = "Yeni Sayfay� De�i�tir"; // 5.1.0
$LNG['a_edit_page_content'] = "��erik - HTML kodu kullanabilirsiniz"; // 5.1.0
$LNG['a_edit_page_edited'] = "Sayfa De�i�tirildi."; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "Yorum D�zenle"; // 5.0
$LNG['a_edit_rev_edited'] = "Yorum ba�ar�yla d�zenlendi.";

// Admin > Email Members
$LNG['a_email_header'] = "�yelere Mesaj"; // 5.0
$LNG['a_email_subject'] = "Konu"; // 4.2.0
$LNG['a_email_message'] = "Mesaj"; // 4.2.0
$LNG['a_email_msg_sent'] = "E-mail %s adl� �yeye g�nderildi"; // 5.0
$LNG['a_email_not_sent'] = "E-mail %s adl� �yeye g�nderilemedi"; // 5.0
$LNG['a_email_sent'] = "%s adl� �yelere mail g�nderildi."; // 4.2.0
$LNG['a_email_failed'] = "%s adl� �yelere mail g�nderilemedi."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "Y�netim panelinden ba�ar�yla ��k�� yapt�n�z."; // 5.0

// Admin > Main
$LNG['a_header'] = "Admin"; // 5.0
$LNG['a_main'] = "Sahip ho�geldin. Sol taraftaki men�den toplisti y�netebilirsin."; // 5.0
$LNG['a_main_approve'] = "1 site onay bekliyor."; // 5.0
$LNG['a_main_approves'] = "%s site onay bekliyor."; // 5.0
$LNG['a_main_approve_edit'] = "Onay bekleyen 1 tane site d�zenlemesi var."; // 5.2.0
$LNG['a_main_approve_edits'] = "Onay bekleyen %s tane site d�zenlemesi var."; // 5.2.0
$LNG['a_main_approve_rev'] = "1 yorum onay bekliyor."; // 5.0
$LNG['a_main_approve_revs'] = "%s yorum onay bekliyor."; // 5.0
$LNG['a_main_your'] = "Kulland���n�z versiyon"; // 5.0
$LNG['a_main_latest'] = "Son versiyon"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarktopsitesphp.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "�ye Y�netimi"; // 5.0
$LNG['a_man_actions'] = "��lemler"; // 4.2.0
$LNG['a_man_edit'] = "D�zenle"; // 4.2.0
$LNG['a_man_delete'] = "Sil"; // 4.2.0
$LNG['a_man_email'] = "Mail At"; // 4.2.0
$LNG['a_man_all'] = "T�m�n� Se�"; // 5.0
$LNG['a_man_none'] = "T�m�n� Se�me"; // 5.0
$LNG['a_man_del_sel'] = "Se�ilenleri Sil"; // 5.0

// Admin > Manage Bad Words // 5.1.0
$LNG['a_man_bad_words_header'] = "K�f�r Filtresi"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = "De�i�ilecek kelimeyi girin.  Mesela  \"hell\" kelimesi ge�en yerlerde \"h***\" �eklinde yaz�lacak."; // 5.1.0
$LNG['a_man_bad_words_instructions_matching'] = "Kesin uyu�ma tam olarak kelime ge�ti�i zaman.  Genel uyu�ma ise yaz�lan kelimenin herhangi bi yerde ge�mesidir.  Mesela \"hell\" kelimesi hem \"shell\" kelimesinde hem de \"hello\" kelimesinde var."; // 5.1.0
$LNG['a_man_bad_words_word'] = "Kelime"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "De�i�tirme"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "Uyu�ma"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "Kesin"; // 5.1.0
$LNG['a_man_bad_words_global'] = "Genel"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "Kelimeyi Filtrele"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" kelimesi filtreli kelime olarak eklendi."; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "Kara Liste"; // 5.2.0
$LNG['a_man_ban_instructions'] = "Herhangi bi siteyi veya kullan�c�y� yasaklamak i�in a�a��daki formu doldurun.  Bir �ye kat�ld��� zaman, URL, email adresi, kullan�c� ad� ve IP adresine g�re kontrol eder.  Site bilgileri de�i�tirildi�i zaman url ve email adresi kontrol edilir.<br /><br />Kara liste mevcut kullan�c�lar� etkilemez."; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "Exact matching will only match the exact string.  Global matching will match anything containing the string.  So, global matching of http://www.yahoo.com/ would match any page with http://www.yahoo.com/ in the URL, while exact matching of http://www.yahoo.com/ would only match that exact URL."; // 5.2.0
$LNG['a_man_ban_string'] = "C�mlecik"; // 5.2.0
$LNG['a_man_ban_field'] = "Alan"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" kara listeye eklenmi�tir."; // 5.2.0

// Admin > Manage Custom Pages // 5.1.0
$LNG['a_man_pages_header'] = "Yeni Sayfalar� Y�net"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "Yorum Y�netimi"; // 5.0
$LNG['a_man_rev_enter'] = "Sitenin yorumlar�n� d�zeltmek i�in l�tfen kullan�c� ad� giriniz.."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "Yorum"; // 5.0
$LNG['a_man_rev_date'] = "Tarih"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "Men�";
$LNG['a_menu_main'] = "Y�netim anasayfas�"; // 5.0
$LNG['a_menu_approve'] = "Yeni �ye ba�vurular�";
$LNG['a_menu_approve_edits'] = "�ye De�i�iklklerini Onayla"; // 5.2.0
$LNG['a_menu_manage'] = "�ye Y�netimi"; // 4.2.0
$LNG['a_menu_settings'] = "Ayarlar"; // 5.0
$LNG['a_menu_manage_bad_words'] = "K�f�r Filtresi"; // 5.1.0
$LNG['a_menu_manage_ban'] = "Kara Liste"; // 5.2.0
$LNG['a_menu_backup'] = "Veritaban�n� Yedekle"; // 5.2.0
$LNG['a_menu_skins'] = "G�r�n�mler ve Kategoriler"; // 5.0
$LNG['a_menu_approve_reviews'] = "Yeni Yorumlar"; // 5.0
$LNG['a_menu_manage_reviews'] = "Yorum Y�netimi"; // 5.0
$LNG['a_menu_email'] = "�yelere Mesaj";
$LNG['a_menu_delete_review'] = "Yorum Sil";
$LNG['a_menu_logout'] = "��k��";
$LNG['a_menu_delete'] = "�ye Sil";
$LNG['a_menu_edit'] = "�ye D�zenle";
$LNG['a_menu_create_page'] = "Yeni Sayfa Olu�tur"; // 5.1.0
$LNG['a_menu_manage_pages'] = "Yeni Sayfalar� Y�net"; // 5.1.0
$LNG['a_header_members'] = "�yeler"; // 5.0
$LNG['a_header_settings'] = "Ayarlar"; // 5.0
$LNG['a_header_tools'] = "Ara�lar"; // 5.2.0
$LNG['a_header_reviews'] = "Yorumlar"; // 5.0
$LNG['a_header_pages'] = "Yeni Sayfalar"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "Ayarlar� De�i�tir";
$LNG['a_s_help'] = "Yard�m"; // 5.1.0

$LNG['a_s_general'] = "Genel Ayarlar";
$LNG['a_s_admin_password'] = "Y�netici �ifresi";
$LNG['a_s_list_name'] = "Toplistinizin ad�";
$LNG['a_s_list_url'] = "Toplist klas�r�n�n URLsi";
$LNG['a_s_default_language'] = "As�l dil";
$LNG['a_s_your_email'] = "E-mail adresiniz";

$LNG['a_s_sql'] = "SQL Ayarlar�";
$LNG['a_s_sql_type'] = "Veritaban� Tipi"; // 4.1.0
$LNG['a_s_sql_host'] = "Sunucu";
$LNG['a_s_sql_database'] = "Veritaban�";
$LNG['a_s_sql_username'] = "Kullan�c� ad�";
$LNG['a_s_sql_password'] = "�ifre";

$LNG['a_s_ranking'] = "Puan Ayarlar�";
$LNG['a_s_num_list'] = "Her sayfada g�sterilecek site say�s�"; // 5.0
$LNG['a_s_ranking_period'] = "S�ralama Periyodu"; // 5.0
$LNG['a_s_ranking_method'] = "S�ralama metodu"; // 5.0
$LNG['a_s_ranking_average'] = "Ortlamaya g�re s�rala ya da %s"; // 5.0
$LNG['a_s_featured_member'] = '�zel �ye - �sterseniz wrapper.html de {$featured_member} de�i�kenine ekleyerek aktif edebilirsiniz.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "Number of members to use the _top skin for";
$LNG['a_s_ad_breaks'] = "Bu s�ralardan sonra reklam koy (Virg�lle ay�rabilirsiniz) - <a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "A�a��daki bo� sat�rlar� \"{$LNG['table_your_site_here']}\" yazarak doldurunuz."; // 5.2.0

$LNG['a_s_member'] = "�ye Ayarlar�";
$LNG['a_s_active_default'] = "Yeni siteler listede g�z�kmeden �nce sizin onay�n�z al�ns�n m�?";
$LNG['a_s_active_default_review'] = "Yeni yorumlar listede g�z�kmeden �nce sizin onay�n�z al�ns�n m�?";
$LNG['a_s_delete_after'] = "Aktif olmayan �yeleri bu zamandan sonra sil (0 yaz�l�rsa kapal� olur)"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "Yeni �ye ba�vurusu size e-mail ile yollans�n m�?"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "Yeni yorum eklendi�inide size e-mail ile yollans�n m�?"; // 5.1.0
$LNG['a_s_max_banner_width'] = "�yelerin maksimum banner geni�li�i (0 yaz�l�rsa kapal� olur)"; // 4.2.0
$LNG['a_s_max_banner_height'] = "�yelerin maksimum banner y�ksekli�i (0 yaz�l�rsa kapal� olur)"; // 4.2.0
$LNG['a_s_default_banner'] = "Banner'� olmayan �yelere ge�erli bir banner koy";

$LNG['a_s_button'] = "Logo Ayarlar�";
$LNG['a_s_ranks_on_buttons'] = "Butonlar �zerinde s�ra no -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "Durum Butonlar�"; // 4.2.0
$LNG['a_s_button_url'] = "<b>Hay�r ise</b> - �ye sitelerde g�z�kecek logo URLsini giriniz"; // 4.0
$LNG['a_s_button_dir'] = "<b>Evet ise</b> - Logolar�n klas�r URLsini giriniz"; // 4.0
$LNG['a_s_button_ext'] = "<b>Evet ise</b> - Logolar�n uzant�s� (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "<b>Evet ise</b> - Se�meli logo say�s�"; // 4.0
$LNG['a_s_google_friendly_links'] = "Google dostu linkler - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "Hileye kar�� giri� kap�s�";
$LNG['a_s_captcha'] = "Giri�te g�rsel do�rulama (spammerlara kar�� koruma) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "Spam engellemek i�in g�venlik sorusu ve cevab� (devre d��� b�rakmak i�in bo� b�rak�n) - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "Di�er Ayarlar";
$LNG['a_s_search'] = "Arama";
$LNG['a_s_time_offset'] = "Server�n�z�n zaman ofseti";

$LNG['a_s_on'] = "A��k";
$LNG['a_s_off'] = "Kapal�";
$LNG['a_s_days'] = "G�nler";
$LNG['a_s_months'] = "Aylar";
$LNG['a_s_weeks'] = "Haftalar"; // 4.2.0
$LNG['a_s_yes'] = "Evet";
$LNG['a_s_no'] = "Hay�r";
$LNG['a_s_answer'] = "Cevap"; // 5.2.0

$LNG['a_s_updated'] = "Ayarlar g�ncellendi.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "G�r�n�mler ve Kategoriler"; // 5.0
$LNG['a_skins_default'] = "Ge�erli G�r�n�m"; // 5.0
$LNG['a_skins_set_default'] = "Ge�erli G�r�n�m Olarak Ayarla"; // 5.0
$LNG['a_skins_anon'] = "Anonim"; // 5.0
$LNG['a_skins_default_done'] = "Ge�erli g�r�n�m olarak ayarland�."; // 5.0
$LNG['a_skins_categories_done'] = "Kategori g�r�n�m� ayarland�."; // 5.0
$LNG['a_skins_new_category_done'] = "Yeni kategori olu�turuldu."; // 5.0
$LNG['a_skins_delete_done'] = "Kategori silindi."; // 5.0
$LNG['a_skins_delete_error'] = "Bu kategori silinemez ��nk� en az bir kategori olmal�d�r."; // 5.1.0
$LNG['a_skins_edit_done'] = "Kategori d�zenlendi."; // 5.0
$LNG['a_skins_invalid_skin'] = "Yanl�� g�r�n�m: %s.  L�tfen ayar�n�z� de�i�tirin."; // 5.0
$LNG['a_skins_categories'] = "Kategoriler"; // 5.0
$LNG['a_skins_new_category'] = "Yeni Kategori Olu�tur"; // 5.0
$LNG['a_skins_set_skins'] = "Kategori G�r�n�mleri Ayarla"; // 5.0
$LNG['a_skins_edit_category'] = "Kategori D�zenle"; // 5.0
$LNG['a_skins_category_name'] = "Kategori Ad�"; // 5.0
$LNG['a_skins_diff_skins'] = "Her kategoriye farkl� bir g�r�n�m� a�a��dan se�iniz."; // 5.0
?>
