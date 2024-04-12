<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Социальные сети', 'your-textdomain-here' ),
		'desc'             => esc_html__( '', 'your-textdomain-here' ),
		'id'               => 'social-text',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'whatsapp',
				'type'     => 'text',
				'title'    => esc_html__( 'WhatsApp', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'vk',
				'type'     => 'text',
				'title'    => esc_html__( 'Vkontakte', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => '2gis',
				'type'     => 'text',
				'title'    => esc_html__( '2GIS', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'yandex',
				'type'     => 'text',
				'title'    => esc_html__( 'Yandex', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
		),
	)
);
