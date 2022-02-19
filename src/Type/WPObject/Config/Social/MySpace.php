<?php
/**
 * GraphQL Object - SEOSocialMySpace
 *
 * @package WPGraphQL\YoastSEO\Type\WPObject\Config\Social
 * @since @todo
 */

namespace WPGraphQL\YoastSEO\Type\WPObject\Config\Social;

use WPGraphQL\Registry\TypeRegistry;
use WPGraphQL\YoastSEO\Interfaces\Registrable;
use WPGraphQL\YoastSEO\Interfaces\Type;
use WPGraphQL\YoastSEO\Interfaces\TypeWithFields;

/**
 * Class - SEOSocialMySpace
 */
class MySpace implements Registrable, Type, TypeWithFields {
	/**
	 * Type registered in WPGraphQL.
	 *
	 * @var string
	 */
	public static string $type = 'SEOSocialMySpace';

	/**
	 * {@inheritDoc}
	 */
	public static function register( TypeRegistry $type_registry = null ) : void { // phpcs:ignore VariableAnalysis.CodeAnalysis.VariableAnalysis.UnusedVariable
		register_graphql_object_type(
			static::$type,
			[
				// phpcs:ignore
				// 'description' => static::get_description(),
				'fields' => static::get_fields(),
			]
		);
	}

	/**
	 * {@inheritDoc}
	 */
	public static function get_description() : string {
		// @todo update description
		return __( 'The Yoast SEO webmaster fields', 'wp-graphql-yoast-seo' );
	}

	/**
	 * {@inheritDoc}
	 */
	public static function get_fields() : array {
		// @todo add descriptions.
		return [
			'url' => [ 'type' => 'String' ],
		];
	}
}