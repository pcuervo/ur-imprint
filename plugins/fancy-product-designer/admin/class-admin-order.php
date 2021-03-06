<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


if(!class_exists('FPD_Admin_Order')) {

	class FPD_Admin_Order {

		public function __construct() {

			add_action( 'add_meta_boxes', array( &$this, 'add_meta_boxes' ) );
			add_action( 'woocommerce_admin_order_item_headers', array( &$this, 'add_order_item_header' ) );
			add_action( 'woocommerce_admin_order_item_values', array( &$this, 'admin_order_item_values' ), 10, 3 );
			//add link to product in order mail
			add_action( 'woocommerce_order_item_meta_end', array( &$this, 'add_mail_order_item_link' ), 10, 3 );

		}

		//add meta box to woocommerce orders
		public function add_meta_boxes() {

			add_meta_box(
				'fpd-order',
				__( 'Fancy Product Designer - Order Viewer', 'radykal' ),
				array( &$this, 'output_meta_box'),
				'shop_order',
				'normal',
				'default'
			);

		}

		//add new column to order items table
		public function add_order_item_header() {

			?>
			<th class="fancy-product"><?php _e( 'Fancy Product', 'radykal' ); ?></th>
			<?php

		}

		//add a button to the ordered fancy product
		public function admin_order_item_values( $_product, $item, $item_id ) {

			if( is_object($_product) ) {

				if( isset($item['fpd_data']) ) {

					//corrects the string length
					//http://stackoverflow.com/questions/10152904/unserialize-function-unserialize-error-at-offset
					$fixed_serialized_data = preg_replace_callback ( '!s:(\d+):"(.*?)";!', array( &$this, 'check_serialize_data_length' ), $item['fpd_data'] );
					$fpd_data = @unserialize($fixed_serialized_data);
					$views = strip_tags($fpd_data['fpd_product']);
					$views = fpd_update_image_source($views);

				}
				else {
					return;
				}

				?>
				<td class="fancy-product" width="100px">
					<?php if( isset($views) ) : ?>
						<button class='button button-secondary fpd-show-order-item' data-order='<?php echo str_replace("'", "%27", $views); ?>' id='<?php echo $item_id; ?>'><?php _e( 'Load in Order Viewer', 'radykal' ); ?></button>
					<?php endif; ?>
				</td>
				<?php

			}

		}

		public function add_mail_order_item_link( $item_id, $item, $order ) {

			if( isset($item['fpd_data']) ) {

				$url = add_query_arg( array('order' => $order->id, 'item_id' => $item_id), get_permalink( $item['product_id'] ) );
				echo sprintf( '<a href="%s">%s</a>', $url, fpd_get_option('fpd_label_wc_order_email_view') );

			}

		}

		public function output_meta_box()  {

			global $woocommerce;
			?>
			<div id="fpd-wc-order">
				<?php self::output(); ?>
			</div>
			<?php

		}


		//add fancy product panel to order post
		public static function output() {

			global $thepostid;

			$stage_width = fpd_get_option('fpd_stage_width');
			$stage_height = fpd_get_option('fpd_stage_height');

			include_once( FPD_PLUGIN_ADMIN_DIR.'/views/html-order-viewer.php' );

		}

		private function check_serialize_data_length($match) {
			return ($match[1] == strlen($match[2])) ? $match[0] : 's:' . strlen($match[2]) . ':"' . $match[2] . '";';
		}

	}

}

new FPD_Admin_Order();

?>