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
		'title'            => esc_html__( 'Оффер сайта', 'your-textdomain-here' ),
		'desc'             => esc_html__( '', 'your-textdomain-here' ),
		'id'               => 'home-setting',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'h1',
				'type'     => 'text',
				'title'    => esc_html__( 'Главный заголовок', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'h1-subtitle',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Подзаголовок', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
		),
	)
);
