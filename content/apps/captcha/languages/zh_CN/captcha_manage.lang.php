<?php
//
//    ______         ______           __         __         ______
//   /\  ___\       /\  ___\         /\_\       /\_\       /\  __ \
//   \/\  __\       \/\ \____        \/\_\      \/\_\      \/\ \_\ \
//    \/\_____\      \/\_____\     /\_\/\_\      \/\_\      \/\_\ \_\
//     \/_____/       \/_____/     \/__\/_/       \/_/       \/_/ /_/
//
//   上海商创网络科技有限公司
//
//  ---------------------------------------------------------------------------------
//
//   一、协议的许可和权利
//
//    1. 您可以在完全遵守本协议的基础上，将本软件应用于商业用途；
//    2. 您可以在协议规定的约束和限制范围内修改本产品源代码或界面风格以适应您的要求；
//    3. 您拥有使用本产品中的全部内容资料、商品信息及其他信息的所有权，并独立承担与其内容相关的
//       法律义务；
//    4. 获得商业授权之后，您可以将本软件应用于商业用途，自授权时刻起，在技术支持期限内拥有通过
//       指定的方式获得指定范围内的技术支持服务；
//
//   二、协议的约束和限制
//
//    1. 未获商业授权之前，禁止将本软件用于商业用途（包括但不限于企业法人经营的产品、经营性产品
//       以及以盈利为目的或实现盈利产品）；
//    2. 未获商业授权之前，禁止在本产品的整体或在任何部分基础上发展任何派生版本、修改版本或第三
//       方版本用于重新开发；
//    3. 如果您未能遵守本协议的条款，您的授权将被终止，所被许可的权利将被收回并承担相应法律责任；
//
//   三、有限担保和免责声明
//
//    1. 本软件及所附带的文件是作为不提供任何明确的或隐含的赔偿或担保的形式提供的；
//    2. 用户出于自愿而使用本软件，您必须了解使用本软件的风险，在尚未获得商业授权之前，我们不承
//       诺提供任何形式的技术支持、使用担保，也不承担任何因使用本软件而产生问题的相关责任；
//    3. 上海商创网络科技有限公司不对使用本产品构建的商城中的内容信息承担责任，但在不侵犯用户隐
//       私信息的前提下，保留以任何方式获取用户信息及商品信息的权利；
//
//   有关本产品最终用户授权协议、商业授权与技术服务的详细内容，均由上海商创网络科技有限公司独家
//   提供。上海商创网络科技有限公司拥有在不事先通知的情况下，修改授权协议的权力，修改后的协议对
//   改变之日起的新授权用户生效。电子文本形式的授权协议如同双方书面签署的协议一样，具有完全的和
//   等同的法律效力。您一旦开始修改、安装或使用本产品，即被视为完全理解并接受本协议的各项条款，
//   在享有上述条款授予的权力的同时，受到相关的约束和限制。协议许可范围以外的行为，将直接违反本
//   授权协议并构成侵权，我们有权随时终止授权，责令停止损害，并保留追究相关责任的权力。
//
//  ---------------------------------------------------------------------------------
//
defined('IN_ECJIA') or exit('No permission resources.');

/**
 * ECJIA 验证码管理界面语言包
 */

return array(
	'captcha_manage' 		=> '验证码设置',
	'captcha_note' 			=> '开启验证码需要服务GD库支持，而您的服务器不支持GD。',
	'captcha_setting' 		=> '验证码设置',
	'captcha_turn_on' 		=> '启用验证码',
	'turn_on_note' 			=> '图片验证码可以避免恶意批量评论或提交信息，推荐打开验证码功能。注意: 启用验证码会使得部分操作变得繁琐，建议仅在必需时打开',
	'captcha_register' 		=> '新用户注册',
	'captcha_login' 		=> '用户登录',
	'captcha_comment' 		=> '发表评论',
	'captcha_admin' 		=> '后台管理员登录',
	'captcha_login_fail' 	=> '登录失败时显示验证码',
	'login_fail_note' 		=> '选择“是”将在用户登录失败 3 次后才显示验证码，选择“否”将始终在登录时显示验证码。注意: 只有在启用了用户登录验证码时本设置才有效',
	'captcha_width' 		=> '验证码图片宽度',
	'width_note' 			=> '验证码图片的宽度，范围在 40～145 之间',
	'captcha_height' 		=> '验证码图片高度',
	'height_note' 			=> '验证码图片的高度，范围在 15～50 之间',
		
	/* JS 语言项 */
	'js_languages' => array(
		'setupConfirm' 	=> '启用新的验证码样式将覆盖原来的样式。<br />您确定要启用选定的样式吗？',
		'width_number' 	=> '图片宽度请输入数字!',
		'proper_width' 	=> '图片宽度要在40到145之间!',
		'height_number' => '图片高度请输入数字!',
		'proper_height' => '图片高度要在15到50之间!',
	),
		
	'current_theme' 	=> '当前样式',
	'install_success' 	=> '启用验证码样式成功。',
	'save_ok' 			=> '设置保存成功',
	'save_setting' 		=> '保存设置',
	'captcha_message' 	=> '留言板留言',
	
	//追加
	'click_for_another'	=> '看不清？点击更换另一个验证码。',
	'label_captcha'		=> '验证码：',
	'label_merchant_captcha' => '验证码',
	'captcha_error'		=> '您输入的验证码不正确。',
	'captcha_wrong'		=> '验证码错误！',
	'captcha_right'		=> '验证码正确！',
	
	'admin_captcha_lang' => array(
		'captcha_width_required'	=> '请输入验证码图片宽度！',
		'captcha_width_min'			=> '验证码图片宽度不能小于40！',
		'captcha_width_max'			=> '验证码图片宽度不能大于145！',
		'captcha_height_required'	=> '请输入验证码图片高度！',
		'captcha_height_min'		=> '验证码图片高度不能小于15！',
		'captcha_height_max'		=> '验证码图片高度不能大于50！',
		'setupConfirm'				=> '您确定要更换验证码样式吗？',
		'is_checked'				=> '您已选中此验证码样式！',
		'ok'						=> '确定',
		'cancel'					=> '取消',
	),
	'captcha' 				=> '验证码',
	'modify_code_parameter'	=> '修改验证码参数',
	'install_failed'		=> '启用验证码样式失败。',
	'code_style'			=> '可用验证码样式',
	'enable_code'			=> '启用此验证码',
	'add_code'				=> '添加验证码',
);

// end