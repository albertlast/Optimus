<?php

/**
 * .russian language file
 *
 * @package Optimus
 * @author Bugo https://dragomano.ru/mods/optimus
 */

$txt['optimus_main']  = 'Optimus';
$txt['optimus_title'] = '��������� �����������';

$txt['optimus_common_title'] = '����� ���������';
$txt['optimus_common_desc']  = '��������� �������� ������, ��������� �������� ���������� ������� �������� � ���, � ����� ���������/���������� ��������� ����� �����.';

$txt['optimus_main_page']         = '������� ��������';
$txt['optimus_common_info']       = '���������� ����-���� description ����� �������������� � ��������� �� �������� ����������� ������.';
$txt['optimus_portal_compat']     = '���������� � ��������';
$txt['optimus_portal_compat_set'] = array('���', 'PortaMx', 'SimplePortal', 'TinyPortal');
$txt['optimus_portal_index']      = '��������� ������� �������� �������';
$txt['optimus_forum_index']       = '��������� ������� �������� ������';
$txt['optimus_description']       = '�������, �� ���������� �������� ������<br /><span class="smalltext">����� �������� � ����-���� <strong>description</strong>.</span>';

$txt['optimus_all_pages'] = '�������� ��� � ��������';
$txt['optimus_tpl_info']  = '��������� ����������:<br/><strong>{board_name}</strong> &mdash; �������� �������, <strong>{topic_name}</strong> &mdash; �������� ����,<br/><strong>{#}</strong> &mdash; ����� ������� ��������, <strong>{cat_name}</strong> &mdash; �������� ���������, <strong>{forum_name}</strong> &mdash; �������� ������.';
$txt['optimus_board_tpl'] = '������ ��������� ������� ��������';
$txt['optimus_topic_tpl'] = '������ ��������� ������� ���';
$txt['optimus_templates'] = array(
	'board' => array('{board_name}', ' - ���. {#} - ', '{forum_name}'),
	'topic' => array('{topic_name}', ' - ���. {#} - ', '{board_name} - {forum_name}')
);
$txt['optimus_no_first_number']   = '�� �������� ����� �� ������ ��������';
$txt['optimus_board_description'] = '�������� �������� ������� � ����-���� <strong>description</strong>';
$txt['optimus_topic_description'] = '�������� �������� ���� � ����-���� <strong>description</strong><br /><span class="smalltext">��� �������� �������� � ����� ����������� ��� <a href="https://dragomano.ru/translations/topic-descriptions" target="_blank">Topic Descriptions</a>.</span>';
$txt['optimus_404_status']        = '���������� <a href="https://ru.wikipedia.org/wiki/HTTP#.D0.9A.D0.BE.D0.B4.D1.8B_.D1.81.D0.BE.D1.81.D1.82.D0.BE.D1.8F.D0.BD.D0.B8.D1.8F" target="_blank">��� 403/404</a>, � ����������� �� ������� ������������� ��������';
$txt['optimus_404_page_title']    = '404 - �������� �� �������';
$txt['optimus_404_h2']            = '������ 404';
$txt['optimus_404_h3']            = '��������, �� ����� �������� ����� ���.';
$txt['optimus_403_page_title']    = '403 - ������ ��������';
$txt['optimus_403_h2']            = '������ 403';
$txt['optimus_403_h3']            = '��������, �� � ��� ��� ������� � ���� ��������.';

$txt['optimus_extra_title'] = '�������������';
$txt['optimus_extra_desc']  = '��������� ����������������� �����, � ����� ��������� ��������� Open Graph. �������������!';

$txt['optimus_remove_last_bc_item'] = '���������� �������� ������ (��������� ����� �� ����� �������)';
$txt['optimus_correct_prevnext']    = '<a href="http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html" target="_blank">���������� rel="next" � rel="prev"</a> (������������ ��������� � �����)';
$txt['optimus_open_graph']          = '����-���� <a href="http://ruogp.me/" target="_blank">Open Graph</a> ��� ������� ������';
$txt['optimus_og_image']            = '������ �� ����������� �� ��������� ��� Open Graph<br /><span class="smalltext">� ����� ����� �������������� �������� �� ������� ��������� (���� ����).</span>';
$txt['optimus_fb_appid']            = '<a href="https://developers.facebook.com/apps" target="_blank">APP ID</a> <a href="https://www.facebook.com/" target="_blank">Facebook</a> (���� ����)';
$txt['optimus_tw_cards']            = '��� �������� � <a href="https://twitter.com/" target="_blank">Twitter</a> (�������, ����� �������� ��������� <a href="https://dev.twitter.com/cards/overview" target="_blank">��������</a>)';
$txt['optimus_json_ld']             = '�������� <a href="https://json-ld.org/" target="_blank">JSON-LD</a> ��� �<a href="https://developers.google.com/search/docs/data-types/breadcrumbs?hl=' . $txt['lang_dictionary'] . '" target="_blank">������� ������</a>�';

$txt['optimus_verification_title'] = '����������� ����-����';
$txt['optimus_verification_desc']  = '���������� � ��� ������� ������ ����������� ����������� �����, ��� ������������� ����� ������������� �� ����.';

$txt['optimus_codes']          = '����������� ����-����';
$txt['optimus_titles']         = '��������� (������)';
$txt['optimus_name']           = '��� ����';
$txt['optimus_content']        = '��������';
$txt['optimus_meta_info']      = '����������, ���������� ������ ��������, ������������ � ����������� ����-����� (� �� ���� �������).<br />��������: <span class="smalltext">&lt;meta name="<strong>��� ����</strong>" content="<strong>��������</strong>" /&gt;</span>';
$txt['optimus_search_engines'] = array(
	'Google' => array('google-site-verification','<a href="https://www.google.com/webmasters/tools/" target="_blank">����������� ���-�������</a>'),
	'Yandex' => array('yandex-verification', '<a href="https://webmaster.yandex.ru/" target="_blank">������.���������</a>'),
	'Mail'   => array('wmail-verification', '<a href="https://webmaster.mail.ru" target="_blank">����� Mail.Ru - ������� ����������</a>'),
	'Bing'   => array('msvalidate.01', '<a href="https://www.bing.com/toolbox/webmaster/" target="_blank">Bing ���-������</a>')
);

$txt['optimus_counters']      = '��������';
$txt['optimus_counters_desc'] = '���������� � ��������� ������������ �������� ��� �������� ��������� ������.';

$txt['optimus_head_code']       = '��������� �������� � ��������� � ������ <strong>head</strong> (<a href="https://google.ru/analytics/sign_up.html" target="_blank">Google Analytics</a>)';
$txt['optimus_stat_code']       = '������ ��������� �������� (��������, <a href="https://metrika.yandex.ru/" target="_blank">������.�������</a> ��� ���������)';
$txt['optimus_count_code']      = '������� �������� (<a href="https://www.liveinternet.ru/add" target="_blank">LiveInternet</a>, <a href="https://top100.rambler.ru/top100/rules.shtml.ru" target="_blank">Rambler\'s Top100</a> � �. �.)';
$txt['optimus_counters_css']    = '���������� ����� �� ���������� (CSS)';
$txt['optimus_ignored_actions'] = '������������ ������� (actions) &mdash; �� ���� ��������� �������� ������������ �� �����!';
$txt['optimus_ga_note']         = '�� �������: <a href="https://www.simplemachines.ru/index.php?topic=12304.0" target="_blank">�������� ���������� ������� � Google Analytics</a>';

$txt['optimus_robots_title'] = '�������� robots.txt';
$txt['optimus_robots_desc']  = '� ����� ������� ��������� ������ ��� �������� robots.txt.';

$txt['optimus_manage']      = '��������� robots.txt';
$txt['optimus_rules']       = '��������� ������';
$txt['optimus_rules_hint']  = '������ ��������������� ����� ����������� ��� �������� ����� ������ � ������� ������:';
$txt['optimus_robots_hint'] = '���� ����� �������� ����������� ������� ��� �������� ������������:';
$txt['optimus_useful']      = '<a href="https://dragomano.ru/articles/pravilnyj-robotstxt-dlja-smf" target="_blank">���������� robots.txt ��� SMF</a>';
$txt['optimus_links_title'] = '�������� ������';
$txt['optimus_links']       = array(
	'��� ��������� ��������'                             => 'https://beget.com/p1361/ru/articles/htaccess',
	'������������� robots.txt (������� �������)'         => 'https://help.yandex.ru/webmaster/?id=996567',
	'�������� robots.txt'                                => 'https://webmaster.yandex.ru/robots.xml',
	'���������� � �������� ������� � ������� robots.txt' => 'https://support.google.com/webmasters/topic/6061961?hl=ru&ref_topic=4598466',
	'������ ������ � robots.txt'                         => 'https://robotstxt.org.ru/robotstxterrors',
	'��������������� ������ � ��������� ������'          => 'https://1ps.ru/info/?p=383933',
	'�������������� ����������� ������ �����'            => 'https://www.webeffector.ru/?invitation=f1d58982cd75dbe8e19be3d54a6b25fe'
);

$txt['optimus_sitemap_title'] = '����� ������';
$txt['optimus_sitemap_desc']  = 'Optimus ������������� ����������� ������� ������� xml-�����, ��� ��������� �������. ����������� ����� ����� ����� � ����������� �� �������� � <a href="%1$s">���������� �����</a>.';

$txt['optimus_sitemap_enable']      = '������� � ������������ ��������� xml-����� ������';
$txt['optimus_sitemap_link']        = '���������� ������ �� xml-����� � ������� ������';
$txt['optimus_sitemap_boards']      = '��������� � ����� ������ �� ������� ������<br /><span class="smalltext error">�������, �������� ��� ������, ��������� �� �����.</span>';
$txt['optimus_sitemap_topics']      = '��������� � ����� ���� � ����������� ��������� ������';

$txt['optimus_sitemap_rec']        = ' Optimus ���� �� ����� ��������� ����� �� ��������� ������.';
$txt['optimus_sitemap_url_limit']  = '� ����� sitemap ������ ���� �� ����� 50 ����� ������!';
$txt['optimus_sitemap_size_limit'] = '������ ����� %1$s �� ������ ��������� 10 ��!';
$txt['optimus_sitemap_xml_link']   = 'Sitemap XML';

// ��������� �����
$txt['scheduled_task_optimus_sitemap']      = '��������� XML-����� ������';
$txt['scheduled_task_desc_optimus_sitemap'] = '��������� ������������� �������� �����, ���� ������.';

// �������
$txt['optimus_1ps_ads'] = '<h4>������-���� �SEO ����������� � ����������� ����� ��������������</h4>
<p>������� ���������� ���� �� ���� �������! ���������� ��� �������� �� ����������� ���� �� ������� �������� SEO. �� �������� ��������� ��������� ����������, ��� �������������� �������� SEO ����������� ����� � ���������� ��� � ���.</p>
<br/>
<p>�� ��������� ����� ��:
<ul>
<li>����������� � ��������� ������ ��������� ������.</li>
<li>��������� ����������� ����������� ������ ����� � ������������� ���������.</li>
<li>������� �������� ����������� ����������, ������� ���������� ����������� � ������, � ������� ��������� ��������� ���� ����, � ����� ��������� �������, �������� �����������.</li>
<li>�����������, ��� �������������� ������� �� �����.</li>
<li>������� ������������� ����� � ���������� ��������� �� ��������.</li>
</ul>
<br/>
<p><a href="https://go.1ps.ru/promo/?p=383933&fm_promocode=949796R252" target="_blank">������ ��� ��������� ���������</a></p>';
