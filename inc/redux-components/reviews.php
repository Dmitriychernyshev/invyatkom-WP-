<?php
/**
 * Redux Framework section config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Отзывы', 'your-textdomain-here' ),
		'id'         => 'reviews',
		'subsection' => true,
		'fields'     => array(
            array(
				'id'       => 'reviews_1',
				'type'     => 'section',
				'title'    => esc_html__( 'Первый отзыв', 'your-textdomain-here' ),
			),
			array(
				'id'       => 'name_1',
				'type'     => 'text',
				'title'    => esc_html__( 'Имя и фамилия', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'job_1',
				'type'     => 'text',
				'title'    => esc_html__( 'Должность', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'avatar_1',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Фотография клиента', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'       => 'review_1',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Отзыв', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'date_1',
				'type'     => 'text',
				'title'    => esc_html__( 'Дата публикации', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'link_1',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на полный отзыв', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'thank_1',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Благодарственное письмо', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
            array(
				'id'       => 'reviews_2',
				'type'     => 'section',
				'title'    => esc_html__( 'Второй отзыв', 'your-textdomain-here' ),
			),
			array(
				'id'       => 'name_2',
				'type'     => 'text',
				'title'    => esc_html__( 'Имя и фамилия', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'job_2',
				'type'     => 'text',
				'title'    => esc_html__( 'Должность', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'avatar_2',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Фотография клиента', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'       => 'review_2',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Отзыв', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'date_2',
				'type'     => 'text',
				'title'    => esc_html__( 'Дата публикации', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'link_2',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на полный отзыв', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'thank_2',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Благодарственное письмо', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'       => 'reviews_3',
				'type'     => 'section',
				'title'    => esc_html__( 'Третий отзыв', 'your-textdomain-here' ),
			),
			array(
				'id'       => 'name_3',
				'type'     => 'text',
				'title'    => esc_html__( 'Имя и фамилия', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'job_3',
				'type'     => 'text',
				'title'    => esc_html__( 'Должность', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'avatar_3',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Фотография клиента', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'       => 'review_3',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Отзыв', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'date_3',
				'type'     => 'text',
				'title'    => esc_html__( 'Дата публикации', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'link_3',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка на полный отзыв', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'           => 'thank_3',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Благодарственное письмо', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
		),
	)
);