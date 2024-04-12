<?php
/**
 * Redux Framework slides config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Сотрудники', 'your-textdomain-here' ),
		'id'         => 'employ',
		'desc'       => esc_html__( '', 'your-textdomain-here' ),
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'employ-slides',
				'type'        => 'slides',
				'title'       => esc_html__( 'Добавить/редактировать сотрудника', 'your-textdomain-here' ),
				'placeholder' => array(
					'title'         => esc_html__( 'Имя и Фамилия', 'your-textdomain-here' ),
					'url'   => esc_html__( 'Должность', 'your-textdomain-here' ),
				),
				'show' => array(
					'url' => true,
					'description' => false,
					'title' => true
				)
			),
		),
	)
);
