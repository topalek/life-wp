=== Plugin Name ===
Stable tag: trunk
Contributors: Tkama
Requires at least: 2.7
Tested up to: 4.7.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Tags: spam, spammer, autospam, spamblock, antispam, anti-spam, protect, comments, ping, trackback, bot, robot, human, captcha, invisible

Light & invisible method to block auto-spam when spam comment is posted. Pings and trackbacks cheks for real backlinks.



== Description ==

Block auto-spam when spam comment is posted. Absolutely invisible for users -- There is no any captcha code. Pings and trackbacks cheks for real backlink.

Install Kama Spamblock also useful even if you have external comment system like "Disqus". Because autospam could posted directly to "wp-comments-post.php" file. The plugin will protect such comments.

Localisation: Russian




== Screenshots ==

1. Plugin settings on standart WordPress <code>Settings > Discussion</code> page.

2. Spam alert, when spam comment detected or if user have javascript disabled in his browser. This alert allows send comment once again, when it was blocked in any nonstandard cases.



== Frequently Asked Questions ==

= On comment post i see message "Antispam block your comment!" is it normal plugin work? =

NO! Plugin invisible for users. You need to go to WordPress "Discussion" setting page. At the bottom you will see "Kama Spamblock settings". Set there correct ID attribute of comment form submit button. This attribute you can get from "souse code" of you site page where comment form is. Look for: type="submit" id="-----"




== Changelog ==

= 1.7.0 =
BUG: Last UP bug fix...

= 1.6.0 =
changed: check logic is little change in order to correctly work with page cache plugins

= 1.5.2 =
added: delete is_singular check for themes where this check work wrong. Now plugin JS showen in all pages

= 1.5.1 =
added: js include from numbers of hooks. If there is no "wp_footer" hook in theme

= 1.5.0 =
added: Russian localization
