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
$translation = 'Arabic (����)';
$translator_name = '���������� �����';
$translator_email = 'webmaster@mostathmr.com';
$translator_url = 'http://www.mostathmr.com/';

// Set this to the character encoding of your translation
$LNG['charset'] = "windows-1256";

// Global
$LNG['g_form_submit_short'] = "����";
$LNG['g_username'] = "��� ��������";
$LNG['g_url'] = "���� ������";
$LNG['g_title'] = "��� ������";
$LNG['g_description'] = "�����";
$LNG['g_category'] = "�����"; // 4.1.0
$LNG['g_email'] = "����������������";
$LNG['g_banner_url'] = "���� ������";
$LNG['g_password'] = "����� �����";
$LNG['g_average'] = "�������";
$LNG['g_today'] = "�����";
$LNG['g_yesterday'] = "�����";
$LNG['g_daily'] = "������"; // 5.0
$LNG['g_this_month'] = "����� ������"; // 5.0
$LNG['g_last_month'] = "����� ������"; // 5.0
$LNG['g_monthly'] = "������"; // 5.0
$LNG['g_this_week'] = "������� ������"; // 5.0
$LNG['g_last_week'] = "������� ������"; // 5.0
$LNG['g_weekly'] = "��������"; // 5.0
$LNG['g_pv'] = '�������'; // 5.0
$LNG['g_overall'] = '��������'; // 5.0
$LNG['g_in'] = '�������'; // 5.0
$LNG['g_out'] = '������'; // 5.0
$LNG['g_unq_pv'] = "������� ������"; // 5.0
$LNG['g_tot_pv'] = "������ ���������"; // 5.0
$LNG['g_unq_in'] = "������� ������"; // 5.0
$LNG['g_tot_in'] = "������ ���������"; // 5.0
$LNG['g_unq_out'] = "������ ������"; // 5.0
$LNG['g_tot_out'] = "������ ��������"; // 5.0
$LNG['g_invalid_u_or_p'] = "��� �������� ������� ����� ��� ���� � ������ ����� ��������."; // 5.0
$LNG['g_invalid_u'] = "��� �������� ��� ���� � ������ ����� ��������."; // 5.0
$LNG['g_invalid_p'] = "����� ����� ��� ���� � ������ ����� ��������."; // 5.0
$LNG['g_session_expired'] = "����� ���� ����� � ������ ����� ������ �� ����."; // 5.0
$LNG['g_error'] = "����� ������"; // 5.0
$LNG['g_delete_install'] = "��� �� ���� ���� ��� ������� install.php ��� ����� ��������."; // 5.0
$LNG['g_ip'] = "��� ���� ��"; // 5.2.0

// Edit Account
$LNG['edit_header'] = "����� ����";
$LNG['edit_info_edited'] = "�� ����� ������ �����.";
$LNG['edit_password_blank'] = "����� ������ �������� ����� ������ �������"; // 4.0
$LNG['edit_delay'] = "���� �������� ��� �������� �� ��� ������ ��� ��������"; // 5.2.0

// Gateway Page
$LNG['gateway_header'] = "������ ������ ��������";
$LNG['gateway_text'] = "���� ���� �� ��� ������ � ���� ��� ������ �� ������ ������.";
$LNG['gateway_vote'] = "���� ������";
$LNG['gateway_no_vote'] = "���� ���� �����"; // 5.0

// Install
$LNG['install_header'] = "����� ��������";
$LNG['install_welcome'] = "������ ��� �� ���� ����� �������� � �� ������ �������� �� ������ ������ ����� �������.";
$LNG['install_sql_prefix'] = "����� ����� ������� - ����� ������� �� ���� ����� ���� �� ���� ��� ����� �������� �����";
$LNG['install_error_chmod'] = "�� ������ ������� ��� ��� sql.php ���� �� ������ ������� 666.";
$LNG['install_error_sql'] = "����� ����� ������ �������� ������ ������ ����� ������� �� ������� ����� ��������.";
$LNG['install_done'] = "�� ����� �������� ����� � �� ���� ���� �������� �����.";
$LNG['install_your'] = "����� ��������";
$LNG['install_admin'] = "���� ������";
$LNG['install_manual'] = "�������";
$LNG['upgrade_header'] = "�������";
$LNG['upgrade_welcome'] = "������ ��� �� ���� ����� �������� � ��� ����� ���� �� ��� ���� �� ����� ��������.";
$LNG['upgrade_version'] = "���� �� ����� �������� ��� ������� %s."; // 5.0.1
$LNG['upgrade_error_version'] = "������� ���� ��� ������� 4.1.0 ��� ���.";
$LNG['upgrade_done'] = "�� ����� �������� ����� � �� ���� ��� ������� �����.";
$LNG['install_mailing_list'] = "��� ��� ���� �������� �������� �������� ���� ���� ����� ����� . ���� ������ ��� �� ������� ������ �������� ��������� ������� "; // 5.2.0

// Join
$LNG['join_header'] = "����";
$LNG['join_enter_text'] = "���� ���� ��� ���� �� ������ �����:"; // 4.2.2
$LNG['join_enter_text_read'] = "�� ������ �������"; // 5.2.0
$LNG['join_user'] = "�����"; // 5.0
$LNG['join_website'] = "������"; // 5.0
$LNG['join_banner_size'] = "(���� ���  %sx%s)"; // 5.2.0
$LNG['join_error_username'] = "���� ��� ������ ���� : ����� ������� ���� �� ����� �� ���� �� ����� �� ���� �����."; // 5.0
$LNG['join_error_username_duplicate'] = "��� ������ ��� ���� ���� ���� �� ���."; // 5.0
$LNG['join_error_url'] = "���� ���� ������ ���� ����.";
$LNG['join_error_email'] = "���� ���� �������� ����.";
$LNG['join_error_title'] = "���� ��� ������.";
$LNG['join_error_password'] = "���� ��� ���.";
$LNG['join_error_confirm_password'] = "����� ����� ��� �����"; // 5.2.0
$LNG['join_error_urlbanner'] = "���� ���� ����� ������ . ����� ����� ��� ��� �� ���� ���"; // 5.2.0
$LNG['join_error_time'] = "�� ��� ������ ������."; // 4.2.0
$LNG['join_error_captcha'] = "������ ������� ���� ������ ��� �� ������."; // 4.2.2
$LNG['join_error_question'] = "����� ����� . ���� ���� ����� ��� ��� ���� ������� ."; // 5.2.0
$LNG['join_thanks'] = "����� �������� ! ���� ��� ������� ������ �� ����� ������ �����.";
$LNG['join_change_warning'] = "�� ����� �� ����� ������.";
$LNG['join_welcome'] = "����� �� �� %s";
$LNG['join_welcome_admin'] = "�� ������ ��� ���� �� ������.";
$LNG['join_approve'] = "���� ��������� ��� ���� ������ �� ������ ��� ������ ������ ���� . �� ��� ������� ������ ���� ����� ��������� �������� ������ ������ "; // 5.2.0
$LNG['join_type'] = "��� �������"; // 5.1.0
$LNG['join_standard'] = "�����"; // 5.1.0
$LNG['join_error_top'] = "��� ��� ������� . ������ �������� ��� ���� "; // 5.2.0
$LNG['join_ban_top'] = "������ ����� ��� ������ ������ �� ��� ���� ������"; // 5.2.0
$LNG['join_security'] = "������"; // 5.2.0
$LNG['join_confirm_password'] = "����� ���� ������"; // 5.2.0

// Link Code
$LNG['link_code_header'] = "��� �������"; // 5.0

// Lost Password
$LNG['lost_pw_header'] = "���� ����� �����"; // 5.0
$LNG['lost_pw_forgot'] = "�� ���� ����� ����� �"; // 5.0
$LNG['lost_pw_get'] = "������� ����� �����"; // 5.0
$LNG['lost_pw_emailed'] = "������ ������ ����� ���������� ������ ���������."; // 5.0
$LNG['lost_pw_email'] = "������ ���� ������ ���� ��� ������:"; // 5.0
$LNG['lost_pw_new'] = "���� ���� ������ �������"; // 5.0
$LNG['lost_pw_set_new'] = "������ ���� ������ �������"; // 5.0
$LNG['lost_pw_finish'] = "�� ������ ���� ������ ������� ���� �������."; // 5.0

// Main Page
$LNG['main_header'] = "�������"; // 5.0
$LNG['main_all'] = "��� ����"; // 4.2.0
$LNG['main_method'] = "����� ������";
$LNG['main_members'] = "��� �������";
$LNG['main_menu_rankings'] = "������ ��������";
$LNG['main_menu_join'] = "��� �����";
$LNG['main_menu_random'] = "���� ������";
$LNG['main_menu_search'] = "���� �����";
$LNG['main_menu_lost_code'] = "��� �������"; // 5.0
$LNG['main_menu_lost_password'] = "���� ������"; // 5.0
$LNG['main_menu_edit'] = "����� ����";
$LNG['main_menu_user_cp'] = "���� �������"; // 5.0
$LNG['main_featured'] = "���� ������"; // 4.0.2
$LNG['main_executiontime'] = "��� ������� ������"; // 4.0
$LNG['main_queries'] = "����� ����� ��������"; // 4.0
$LNG['main_powered'] = "Powered by";

// Ranking Table
$LNG['table_stats'] = "��������";
$LNG['table_unique'] = "�����";
$LNG['table_total'] = "�������";
$LNG['table_rank'] = "�������";
$LNG['table_title'] = "������"; // 4.0
$LNG['table_description'] = "�����"; // 4.0
$LNG['table_movement'] = "�������";
$LNG['table_up'] = "�����"; // 5.0
$LNG['table_down'] = "�����"; // 5.0
$LNG['table_neutral'] = "�����"; // 5.0
$LNG['table_your_site_here'] = "�� ����� ���"; // 5.2.0

// Rate and Review
$LNG['rate_header'] = "������� ���������";
$LNG['rate_message'] = "���� �� ������ �����  %s �� ����� �����."; // 5.2.0
$LNG['rate_rating'] = "���������";
$LNG['rate_review'] = "����� - HTML ��� ����"; // 5.0
$LNG['rate_thanks'] = "����� �������.";
$LNG['rate_error'] = "��� ���� ������ ��� ������.";
$LNG['rate_back'] = "���� ����������";
$LNG['rate_email_admin'] = "���� ������ ��� ����� ������"; // 5.1.0

// Search
$LNG['search_header'] = "�����";
$LNG['search_off'] = "���� ����� ����� �� ��� �������.";
$LNG['search_no_sites'] = "����� �� ���� ����� �����."; // 5.0
$LNG['search_prev'] = "������"; // 3.2.1
$LNG['search_next'] = "������"; // 3.2.1
$LNG['search_displaying_results'] = "��� %s ��� %s �� %s ������� ������ �� <b>%s</b>."; // 5.1.0

// Stats
$LNG['stats_header'] = "��������";
$LNG['stats_info'] = "�������";
$LNG['stats_member_since'] = "��� ���"; // 5.0
$LNG['stats_rating_avg'] = "����� ���������";
$LNG['stats_rating_num'] = "��� ���������";
$LNG['stats_rate'] = "����� ������ ��� ������";
$LNG['stats_reviews'] = "�������";
$LNG['stats_allreviews'] = "��� ����"; // 4.0
$LNG['stats_week'] = "�����"; // 5.0
$LNG['stats_highest'] = "������"; // 5.0
$LNG['stats_overall'] = "��������"; // 5.2.0
$LNG['stats_overall_average'] = "������ (����� 10 % "; // 5.2.0
$LNG['stats_overall_total'] = "������� (����)"; // 5.2.0

// ssi.php
$LNG['ssi_top'] = "��� %s 10"; // 4.0
$LNG['ssi_new'] = "%s ������"; // 5.0
$LNG['ssi_all'] = "���� �������"; // 4.0

// User Control Panel // 5.0
$LNG['user_cp_header'] = "���� ���� �������"; // 5.0
$LNG['user_cp_login'] = "����"; // 5.0
$LNG['user_cp_logout'] = "����"; // 5.0
$LNG['user_cp_welcome'] = "������ ��� �� ���� ���� ������� � ������ ������� �� ������ ������ �����."; // 5.0
$LNG['user_cp_logout_message'] = "�� ����� �� ���� ������ �����."; // 5.0
$LNG['user_cp_login_long'] = "������ ������ ��� �������� ���������� �� ��� ������ �������� OpenID"; // 5.1.0
$LNG['user_cp_openid'] = "������ ��������"; // 5.1.0
$LNG['user_cp_openid_error_server'] = "��� ������� ����� ����� ������ �������� %s."; // 5.1.0
$LNG['user_cp_openid_error_join'] = "��� ���� �������� ������ ������� ���� ������ ������ ��"; // 5.1.0
$LNG['user_cp_openid_error_general'] = "��� ��� ������� ������� ��� ����� ������ . ������ ����� ��������"; // 5.1.0
$LNG['user_cp_openid_error_cancel'] = "��� �� ���� ���� �������� ������ .������ ����� ��������"; // 5.1.0
$LNG['user_cp_openid_error_from_server'] = "��� �� �����: %s"; // 5.1.0
$LNG['user_cp_inactive'] = "�� ������ ������ ��� ���� ���� ������� ��� ��� �������� ��� ����� .����� ����� ������ ��������� "; // 5.0.2

// Admin > Approve New Members // 4.0
$LNG['a_approve_header'] = "����� �������"; // 5.0
$LNG['a_approve'] = "�����"; // 4.0
$LNG['a_approve_none'] = "�� ���� ����� ������� �������."; // 4.0
$LNG['a_approve_done'] = "�� ����� ����� �����."; // 4.0
$LNG['a_approve_dones'] = "�� ����� ������� �����."; // 4.0
$LNG['a_approve_sel'] = "������:"; // 5.0

// Admin > Approve Edited Members // 5.2.0
$LNG['a_approve_edited_header'] = "�������� ��� �������� ������� "; // 5.2.0
$LNG['a_approve_edited_none'] = "������ ����� ������� ��������"; // 5.2.0
$LNG['a_approve_edited_old'] = "��� ������� �������"; // 5.2.0
$LNG['a_approve_edited_new'] = "������� ������� �������"; // 5.2.0
$LNG['a_approve_edited_reject'] = "���"; // 5.2.0
$LNG['a_approve_edited_done'] = "��� �������� ��� �������� "; // 5.2.0
$LNG['a_approve_rejected_done'] = "�������� ������"; // 5.2.0

// Admin > Approve New Reviews // 5.0
$LNG['a_approve_rev_header'] = "����� ���������"; // 5.0
$LNG['a_approve_rev_none'] = "�� ���� ������� ����� ��������."; // 5.0
$LNG['a_approve_rev_done'] = "�� ��� ������� �����."; // 5.0
$LNG['a_approve_rev_dones'] = "�� ��� ��������� �����."; // 5.0

// Admin > Backup Database // 5.2.0
$LNG['a_backup_header'] = "��� ����� ��������"; // 5.2.0
$LNG['a_backup_warn'] = "���� ��� ������� ������� ��������.  �� ������ ������� ��� ����� ��� ��� ���� ����� ������ ����� "; // 5.2.0

// Admin > ����� ������� ���������// 5.1.0
$LNG['a_create_page_header'] = "����� ���� �����"; // 5.1.0
$LNG['a_create_page_id'] = "��� ������ ��� �� ���� ����� ������� ���� ������� ������� ���� �� ����� �� ����� (_) ������ (/) ���"; // 5.1.0
$LNG['a_create_page_error_id'] = "Page ID���� ��� �� ������ ���� ��� ����� ������� ���� �� ����� �� ����� (_) ������ (/) ���. ������ ����� ���"; // 5.1.0
$LNG['a_create_page_error_id_duplicate'] = "Page ID���� ���� ���� ��� ���Page ID"; // 5.1.0
$LNG['a_create_page_created'] = "html������ ����� ����� ����� ���� ���� ������ ������ ����� �� �����"; // 5.1.0

// Admin > Delete Member
$LNG['a_del_header'] = "��� ����"; // 5.0
$LNG['a_del_headers'] = "��� �����"; // 5.0
$LNG['a_del_done'] = "�� ��� ������ �����."; // 5.0
$LNG['a_del_dones'] = "�� ��� ������� �����."; // 5.0
$LNG['a_del_warn'] = "��� ����� ��� ���� ��� %s?"; // 5.0
$LNG['a_del_multi'] = "��� %s �������"; //5.0

// Admin > ��� ������� �������� // 5.1.0
$LNG['a_del_bad_word_header'] = "��� ������ ��������"; // 5.1.0
$LNG['a_del_bad_word_headers'] = "��� ������� ��������"; // 5.1.0
$LNG['a_del_bad_word_done'] = "�� ��� ������ ��������."; // 5.1.0
$LNG['a_del_bad_word_dones'] = "�� ��� ������� ��������"; // 5.1.0
$LNG['a_del_bad_word_warn'] = "�� ��� ����� �� ����� �� ���  %s  ������� ��������?"; //5.1.0
$LNG['a_del_bad_word_multi'] = "��� %s �������"; //5.1.0
$LNG['a_del_bad_word_invalid_id'] = "���� ������ ���� ID. ������ ��� ��������"; // 5.1.0

// Admin > Delete Ban // 5.2.0
$LNG['a_del_ban_header'] = "����� ����� ������� �������"; // 5.2.0
$LNG['a_del_ban_headers'] = "����� ������� ������� �������"; // 5.2.0
$LNG['a_del_ban_done'] = "�� ����� ����� ������� �������"; // 5.2.0
$LNG['a_del_ban_dones'] = "�� ����� ������� ������� �������"; // 5.2.0
$LNG['a_del_ban_warn'] = "�� ��� ����� �� ����� %s �� ������� ��������"; // 5.2.0
$LNG['a_del_ban_multi'] = "����� %s ���������"; // 5.2.0
$LNG['a_del_ban_invalid_id'] = "��� �� ����� ����� ������� �������.  ������ ����� ��������"; // 5.2.0

// Admin > ��� ������� �������� // 5.1.0
$LNG['a_del_page_header'] = "��� ������"; // 5.1.0
$LNG['a_del_page_headers'] = "��� �������"; // 5.1.0
$LNG['a_del_page_done'] = "�� ��� ������."; // 5.1.0
$LNG['a_del_page_dones'] = "�� ��� �������"; // 5.1.0
$LNG['a_del_page_warn'] = "�� ��� ����� �����  %s?"; //5.1.0
$LNG['a_del_page_multi'] = "��� �������%s"; //5.1.0
$LNG['a_del_page_invalid_id'] = "���� �����.������ ��� ��������"; // 5.1.0

// Admin > Delete Review // 5.0
$LNG['a_del_rev_header'] = "��� �����"; // 5.0
$LNG['a_del_rev_headers'] = "��� �������"; // 5.0
$LNG['a_del_rev_done'] = "�� ��� ������� �����."; // 5.0
$LNG['a_del_rev_dones'] = "�� ��� ��������� �����."; // 5.0
$LNG['a_del_rev_warn'] = "��� ����� ��� ���� ��� ��� �������?"; //5.0
$LNG['a_del_rev_warns'] = "��� ����� ��� ���� ��� ��� ���������?"; //5.0
$LNG['a_del_rev_invalid_id'] = "�� ���� ����� ���� ����� ������ ����� ��������"; // 5.0

// Admin > Edit Member
$LNG['a_edit_header'] = "����� ����"; // 5.0
$LNG['a_edit_site_is'] = "����� ������"; // 4.0
$LNG['a_edit_active'] = "���� (���� �� �������)"; // 4.0
$LNG['a_edit_inactive'] = "��� ���� (�� ���� �� �������)"; // 5.0
$LNG['a_edit_edited'] = "�� ����� ������ �����.";

// Admin > ����� ������� �������� // 5.1.0
$LNG['a_edit_bad_word_header'] = "����� ������ ��������"; // 5.1.0
$LNG['a_edit_bad_word_edited'] = "�� ����� ������ ��������"; // 5.1.0

// Admin > Edit Ban // 5.2.0
$LNG['a_edit_ban_header'] = "����� ����� �������� �������"; // 5.2.0
$LNG['a_edit_ban_edited'] = "�� ����� ������ ������� �� ������� �������"; // 5.2.0

// Admin >����� ������� �������� // 5.1.0
$LNG['a_edit_page_header'] = "����� ������ ��������"; // 5.1.0
$LNG['a_edit_page_content'] = "������� - ������� ������� ����� HTML ���"; // 5.1.0
$LNG['a_edit_page_edited'] = "�� ����� ������"; // 5.1.0

// Admin > Edit Review // 5.0
$LNG['a_edit_rev_header'] = "����� �����"; // 5.0
$LNG['a_edit_rev_edited'] = "�� ����� ������� �����.";

// Admin > Email Members
$LNG['a_email_header'] = "������ �������"; // 5.0
$LNG['a_email_subject'] = "�������"; // 4.2.0
$LNG['a_email_message'] = "�� �������"; // 4.2.0
$LNG['a_email_msg_sent'] = "�� ������� ��� %s"; // 5.0
$LNG['a_email_not_sent'] = "�� ��� ������� ��� %s"; // 5.0
$LNG['a_email_sent'] = "%s �� ������� ��� �������."; // 4.2.0
$LNG['a_email_failed'] = "%s �� ��� ������� ��� �������."; // 4.2.0

// Admin > Logout
$LNG['a_logout_message'] = "�� ����� �� ���� ���� ������ ����� �����."; // 5.0

// Admin > Main
$LNG['a_header'] = "���� ���� ������ �����"; // 5.0
$LNG['a_main'] = "����� �� � ����� ����� �������� �� ������� �� ������."; // 5.0
$LNG['a_main_approve'] = "���� ��� ���� ����� �������."; // 5.0
$LNG['a_main_approves'] = "���� %s ���� ����� �������."; // 5.0
$LNG['a_main_approve_edit'] = "���� 1 ���� �� ����� ������ ��������"; // 5.2.0
$LNG['a_main_approve_edits'] = "���� ����  %s ���� �� ������ ������� ��������"; // 5.2.0
$LNG['a_main_approve_rev'] = "���� ����� ���� ����� �������."; // 5.0
$LNG['a_main_approve_revs'] = "���� %s ����� ����� �������."; // 5.0
$LNG['a_main_your'] = "������� ������"; // 5.0
$LNG['a_main_latest'] = "��� �����"; // 5.0
$LNG['a_main_new'] = "<a href=\"http://www.aardvarkind.com/\">Aardvark Topsites PHP Website</a>"; // 5.0

// Admin > Manage Members
$LNG['a_man_header'] = "������ �������"; // 5.0
$LNG['a_man_actions'] = "�������"; // 4.2.0
$LNG['a_man_edit'] = "�����"; // 4.2.0
$LNG['a_man_delete'] = "���"; // 4.2.0
$LNG['a_man_email'] = "������"; // 4.2.0
$LNG['a_man_all'] = "����� ����"; // 5.0
$LNG['a_man_none'] = "��� �������"; // 5.0
$LNG['a_man_del_sel'] = "��� ������"; // 5.0

// Admin > ����� ������� �������� // 5.1.0
$LNG['a_man_bad_words_header'] = "����� ������� ������"; // 5.1.0
$LNG['a_man_bad_words_instructions'] = " �� ��� ��������� \"h***\" �� ��� ������ ������  \"hell\"  ���� ������ �������� ���� ���� �����. ���� : ������ �����"; // 5.1.
$LNG['a_man_bad_words_instructions_matching'] = "���� ����� �� ���� ����� ��� �� ������� ���� �����  \"h***\" ���� Global \"shell\" and \"hello���� ���� ������ ��� ���� ������� ���� ���� �����"; // 5.1.0
$LNG['a_man_bad_words_word'] = "����"; // 5.1.0
$LNG['a_man_bad_words_replacement'] = "�������"; // 5.1.0
$LNG['a_man_bad_words_matching'] = "��������"; // 5.1.0
$LNG['a_man_bad_words_exact'] = "�����"; // 5.1.0
$LNG['a_man_bad_words_global'] = "����"; // 5.1.0
$LNG['a_man_bad_words_filter'] = "������� ��������"; // 5.1.0
$LNG['a_man_bad_words_filtered'] = "\"%s\" ����� ��� ����� ������� ������"; // 5.1.0

// Admin > Manage Ban // 5.2.0
$LNG['a_man_ban_header'] = "������� �������"; // 5.2.0
$LNG['a_man_ban_instructions'] = "���� ��� ������ �� ����� �� ������ ���� �������� ����� . ����� ���� ����� , ������ , ������� , ��� �������� , ���� ���� ��  �� ������ . ����� ��� ����� ������ ���� ������ �� ������ � ������� ����������"; // 5.2.0
$LNG['a_man_ban_words_instructions_matching'] = "����� ����� ����� ��� ������ ����� , ��� ��� Global ����� �� �� ����� ��� ����� ���� ����� ��� ����� ���� http://www.yahoo.com ���� ����� �� ���� ����� ��� ���� http://www.yahoo.com �� �� ���� ����� ��� �� ������"; // 5.2.0
$LNG['a_man_ban_string'] = "���"; // 5.2.0
$LNG['a_man_ban_field'] = "���"; // 5.2.0
$LNG['a_man_ban_blacklisted'] = "\"%s\" ���� ��� ������� �������."; // 5.2.0

// Admin > ����� ������� �������� // 5.1.0
$LNG['a_man_pages_header'] = "������ �������� ��������"; // 5.1.0

// Admin > Manage Reviews // 5.0
$LNG['a_man_rev_header'] = "������ ���������"; // 5.0
$LNG['a_man_rev_enter'] = "������ ��������� ���� ��� �������� �����."; // 5.0
$LNG['a_man_rev_id'] = "ID"; // 5.0
$LNG['a_man_rev_rev'] = "�������"; // 5.0
$LNG['a_man_rev_date'] = "�������"; // 5.0

// Admin > Menu
$LNG['a_menu'] = "�������";
$LNG['a_menu_main'] = "������ ������"; // 5.0
$LNG['a_menu_approve'] = "����� �������";
$LNG['a_menu_approve_edits'] = "�������� ��� �������"; // 5.2.0
$LNG['a_menu_manage'] = "������ �������"; // 4.2.0
$LNG['a_menu_settings'] = "��������� ��������"; // 5.0
$LNG['a_menu_manage_bad_words'] = "���� ������� ��������"; // 5.1.0
$LNG['a_menu_manage_ban'] = "������� �������"; // 5.2.0
$LNG['a_menu_backup'] = "���� �������� ������ ��������"; // 5.2.0
$LNG['a_menu_skins'] = "�������� ��������"; // 5.0
$LNG['a_menu_approve_reviews'] = "����� ���������"; // 5.0
$LNG['a_menu_manage_reviews'] = "������ ���������"; // 5.0
$LNG['a_menu_email'] = "������ �������";
$LNG['a_menu_delete_review'] = "��� �������";
$LNG['a_menu_logout'] = "����";
$LNG['a_menu_delete'] = "��� ���";
$LNG['a_menu_edit'] = "����� ���";
$LNG['a_menu_create_page'] = "����� �������� ��������"; // 5.1.0
$LNG['a_menu_manage_pages'] = "������ �������� ��������"; // 5.1.0
$LNG['a_header_members'] = "�������"; // 5.0
$LNG['a_header_settings'] = "���������"; // 5.0
$LNG['a_header_tools'] = "�����"; // 5.2.0
$LNG['a_header_reviews'] = "���������"; // 5.0
$LNG['a_header_pages'] = "������� ��������"; // 5.1.0

// Admin > Settings
$LNG['a_s_header'] = "��������� ��������";
$LNG['a_s_help'] = "��������"; // 5.1.0

$LNG['a_s_general'] = "�������� ������";
$LNG['a_s_admin_password'] = "���� ���� ���� ������";
$LNG['a_s_list_name'] = "��� ������";
$LNG['a_s_list_url'] = "���� ���� ��������";
$LNG['a_s_default_language'] = "����� ����������";
$LNG['a_s_your_email'] = "����� ����������";

$LNG['a_s_sql'] = "������� ����� ��������";
$LNG['a_s_sql_type'] = "��� �������"; // 4.1.0
$LNG['a_s_sql_host'] = "������";
$LNG['a_s_sql_database'] = "��� ����� ��������";
$LNG['a_s_sql_username'] = "��� �������� �������";
$LNG['a_s_sql_password'] = "����� ����� �������";

$LNG['a_s_ranking'] = "������ �������";
$LNG['a_s_num_list'] = "��� ������� �� ������"; // 5.0
$LNG['a_s_ranking_period'] = "����� ������"; // 5.0
$LNG['a_s_ranking_method'] = "����� ����� ����������"; // 5.0
$LNG['a_s_ranking_average'] = "������� �������� �� �� ���� %s"; // 5.0
$LNG['a_s_featured_member'] = '��� ���� ������ - ��� �� ���� ������� {$featured_member} ��� wrapper.html ��� ����� ��� ������.'; // 4.1.0
$LNG['a_s_top_skin_num'] = "��� ������� ���� ���� �� ���� ��������";
$LNG['a_s_ad_breaks'] = "���� ������� ��� ������  - (���� ����� ������)<a href=\"http://www.aardvarktopsitesphp.com/manual/ad_breaks.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_fill_blank_rows'] = "���� ����� ������ �������� ������� \"{$LNG['table_your_site_here']}\""; // 5.2.0

$LNG['a_s_member'] = "������ �������";
$LNG['a_s_active_default'] = "���� �� ����� ������� �� ��� ������";
$LNG['a_s_active_default_review'] = "���� �� ����� ��������� �� ��� ������";
$LNG['a_s_delete_after'] = "��� ������ ���� ��� ����� ��� ������� ����� ������ ( �� ��� ������ ��� ������� )"; // 4.1.0
$LNG['a_s_email_admin_on_join'] = "���� ����� ������ ��� ������ ��� ����"; // 5.1.0
$LNG['a_s_email_admin_on_review'] = "���� ������ ��� ����� ����� ����"; // 5.1.0
$LNG['a_s_max_banner_width'] = "���� ��� ����� �� ������ ( �� ��� ������ ��� ������� )"; // 4.2.0
$LNG['a_s_max_banner_height'] = "���� ������ ����� �� ������ ( �� ��� ������ ��� ������� )"; // 4.2.0
$LNG['a_s_default_banner'] = "����� ���� ������� ��� ��� ����� ���� ������";

$LNG['a_s_button'] = "������ ��������";
$LNG['a_s_ranks_on_buttons'] = "������� ���� ������� -  <a href=\"http://www.aardvarktopsitesphp.com/manual/buttons.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_stat_buttons'] = "�������� ������"; // 4.2.0
$LNG['a_s_button_url'] = "If Yes/No - ������ ���� ����� �� ����� �������"; // 4.0
$LNG['a_s_button_dir'] = "If Yes - ���� ���� ������ �� �����"; // 4.0
$LNG['a_s_button_ext'] = "If Yes - ���������� ������� (gif, png, jpg, etc.)"; // 4.0
$LNG['a_s_button_num'] = "If Yes - ��� �������� ������ ���������"; // 4.0
$LNG['a_s_google_friendly_links'] = "����� ����� ������ ����� - <a href=\"http://www.aardvarktopsitesphp.com/manual/google_friendly_links.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0

$LNG['a_s_gateway'] = "���� ����� ���� ���� �� �������";
$LNG['a_s_captcha'] = "Word verification on join (���� ������� ��� ������� (������� �� ������) - <a href=\"http://www.aardvarktopsitesphp.com/manual/word_verification.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.1.0
$LNG['a_s_security_question'] = "������ ������ �������� ���� ������  (����� �����)  - <a href=\"http://www.aardvarktopsitesphp.com/manual/security_question.php\" class=\"help\" target=\"_blank\">{$LNG['a_s_help']}</a>"; // 5.2.0

$LNG['a_s_other'] = "������ ������";
$LNG['a_s_search'] = "���� �����";
$LNG['a_s_time_offset'] = "����� ��� ������� ( ������� )";

$LNG['a_s_on'] = "����";
$LNG['a_s_off'] = "��� ����";
$LNG['a_s_days'] = "����";
$LNG['a_s_months'] = "����";
$LNG['a_s_weeks'] = "������"; // 4.2.0
$LNG['a_s_yes'] = "���";
$LNG['a_s_no'] = "��";
$LNG['a_s_answer'] = "������"; // 5.2.0

$LNG['a_s_updated'] = "�� ����� ��������� �����.";

// Admin > Skins and Categories // 5.0
$LNG['a_skins_header'] = "�������� ��������"; // 5.0
$LNG['a_skins_default'] = "���������"; // 5.0
$LNG['a_skins_set_default'] = "����� ���������"; // 5.0
$LNG['a_skins_anon'] = "����"; // 5.0
$LNG['a_skins_default_done'] = "�� ������ ����� ������� �����."; // 5.0
$LNG['a_skins_categories_done'] = "�� ������ ����� ������� ����� �����."; // 5.0
$LNG['a_skins_new_category_done'] = "�� ����� ��� ���� �����."; // 5.0
$LNG['a_skins_delete_done'] = "�� ��� ����� �����."; // 5.0
$LNG['a_skins_delete_error'] = "� ���� ��� ����� ���� ���� �� ���� ��� ��� ����� ��� ���� �� ������"; // 5.1.0
$LNG['a_skins_edit_done'] = "�� ����� ����� �����."; // 5.0
$LNG['a_skins_invalid_skin'] = "����� ��� �����: %s.  ���� ����� ��������."; // 5.0
$LNG['a_skins_categories'] = "�������"; // 5.0
$LNG['a_skins_new_category'] = "��� ��� ����"; // 5.0
$LNG['a_skins_set_skins'] = "����� ���� �����"; // 5.0
$LNG['a_skins_edit_category'] = "����� ���"; // 5.0
$LNG['a_skins_category_name'] = "��� �����"; // 5.0
$LNG['a_skins_diff_skins'] = "��� ���� �� ���� ����� ����� ����� ���� �� �������."; // 5.0
?>
