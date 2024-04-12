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
		'title'            => esc_html__( 'Партнеры', 'your-textdomain-here' ),
		'desc'             => esc_html__( '', 'your-textdomain-here' ),
		'id'               => 'setting-partners',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'partners',
				'type'     => 'gallery',
				'title'    => esc_html__( 'Добавить/Изменить', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Тут можно добавить логотип партнера в карусель', 'your-textdomain-here' ),
			),
		),
	)
);
