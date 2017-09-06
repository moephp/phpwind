<?php
defined('WEKIT_VERSION') or exit(403);

/**
 * 后台默认菜单配置信息,菜单配置格式如下：
 * 一个菜单个配置格式中包含: 菜单名称, 路由信息, 菜单图标, 菜单tip, 父节点, 上一个菜单
 * 菜单:  'key' => array('菜单名称', '应用路由', 'icon' , ' tip' ,'父节点key', '上一个菜单key'),
 * 
 * <note>
 * 1. 如果没有填写上一个菜单则默认放置在节点最后.
 * 2. 如果没有父节点则并放置在'上一个菜单之后'.
 * 3. 如果'父节点','上一个菜单'都没有则散落的放置在最外层.
 * </note>
 * 
 * 节点定义: 'Key' => array('节点名称', 子菜单, 'icon', 'tip' ,'父节点key'),
 */
return array(
	'fresh' => array('新鲜事', '', ''),
	'post_fresh' => array('发布新鲜事', 'fresh', '', true)
);
/**=====配置结束于此=====**/
