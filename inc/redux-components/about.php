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
		'title'            => esc_html__( 'Описание компании', 'your-textdomain-here' ),
		'desc'             => esc_html__( '', 'your-textdomain-here' ),
		'id'               => 'about-text',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'about',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст описания', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
		),
	)
);
