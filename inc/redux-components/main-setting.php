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
		'title'            => esc_html__( 'Основные настройки', 'your-textdomain-here' ),
		'desc'             => esc_html__( '', 'your-textdomain-here' ),
		'id'               => 'setting-text',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'weekday',
				'type'     => 'text',
				'title'    => esc_html__( 'График работы - будни', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'weekend',
				'type'     => 'text',
				'title'    => esc_html__( 'График работы - выходные', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'tel',
				'type'     => 'text',
				'title'    => esc_html__( 'Телефон', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'email',
				'type'     => 'text',
				'title'    => esc_html__( 'Почта', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'index',
				'type'     => 'text',
				'title'    => esc_html__( 'Индекс', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'city',
				'type'     => 'text',
				'title'    => esc_html__( 'Город', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'street',
				'type'     => 'text',
				'title'    => esc_html__( 'Улица', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'room',
				'type'     => 'text',
				'title'    => esc_html__( 'Помещение', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'inn',
				'type'     => 'text',
				'title'    => esc_html__( 'ИНН', 'your-textdomain-here' ),
				'desc'     => esc_html__( '', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
		),
	)
);
