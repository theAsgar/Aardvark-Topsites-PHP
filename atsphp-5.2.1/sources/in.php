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

class in extends in_out {
  function in() {
    global $CONF, $DB, $FORM;

    if (isset($_SERVER['HTTP_REFERER'])) {
      $referer = $DB->escape($_SERVER['HTTP_REFERER'], 1);
    }

    $go_to_rankings = 0;
    if (isset($FORM['a']) && $FORM['a'] == 'in') {
      $go_to_rankings = 1;
      $username = $DB->escape($FORM['u']);
    }
    else {
      // Get user by referer?
      $good_referer = 0;
      if (isset($referer) && !isset($FORM['a']) && strpos($referer, $CONF['list_url']) === FALSE) {
        // Make sure it's not a search engine
        if (strpos($referer, 'http://www.google.com/search') === FALSE && strpos($referer, 'http://search.yahoo.com') === FALSE && strpos($referer, 'http://search.msn.com') === FALSE) {
          $good_referer = 1;
        }
      }

      if ($good_referer) {
        $username = $this->get_username($referer);
      }
      else {
        $username = '';
      }
    }

    if ($username) {
      list($username_sql) = $DB->fetch("SELECT username FROM {$CONF['sql_prefix']}_sites WHERE username = '{$username}'", __FILE__, __LINE__);
      if ($username_sql == $username) {
        if ($CONF['gateway'] && !isset($FORM['sid'])) {
          $this->gateway($username);
        }
        else {
          if ($CONF['gateway']) {
            $valid = $this->check($username);
          }
          else {
            $valid = 1;
          }

          if ($valid) {
            $this->record($username, 'in');
          }
        }
      }
    }

    if ($go_to_rankings) {
      header("Location: {$CONF['list_url']}/");
      exit;
    }
  }


  function check($username) {
    global $CONF, $FORM;

    require_once("{$CONF['path']}/sources/misc/session.php");
    $session = new session;
    list($type, $data) = $session->get($FORM['sid']);
    $session->delete($FORM['sid']);

    if ($type == 'gateway' && $data == $username) {
      return 1;
    }
    else {
      return 0;
    }
  }

  function gateway($username) {
    global $CONF, $FORM, $TMPL;

    require_once("{$CONF['path']}/sources/misc/session.php");
    $session = new session;
    $TMPL['sid'] = $session->create('gateway', $username);

    $TMPL['username'] = $username;

    echo $this->do_skin('gateway');
    exit;
  }

  function get_username($url) {
    global $CONF, $DB;

    $url = $this->short_url($url);
    $count = 0;

    $username = '';
    while (!$username) {
      list($username) = $DB->fetch("SELECT username FROM {$CONF['sql_prefix']}_sites WHERE short_url = '{$url}'", __FILE__, __LINE__);

      if (!$username) {
        $url = $this->short_url("{$url}.");
      }

      $count++;
      if ($count >= 10) {
        $username = 0;
        break;
      }
    }

    return $username;
  }

  function short_url($url) {
    // Lowercase
    $url = strtolower($url);

    // Get rid of www.
    $url = preg_replace('/\/\/www./', '//', $url);

    // Get rid of trailing slash
    $url = preg_replace('/\/$/', '', $url);

    // Get rid of page after the last slash
    preg_match('/^(http:\/\/.+)\/(.+)/', $url, $matches);
    if (!isset($matches[0])) {
      // Just a domain with a slash at the end
      $url = preg_replace('/^(http:\/\/.+)\//', '\\1', $url);
    }
    else {
      // All other URLs
      // Check to see if after the trailing slash is a file or a directory
      if (strpos($matches[2], '.')) { $url = $matches[1]; }
    }

    return $url;
  }
}
?>
