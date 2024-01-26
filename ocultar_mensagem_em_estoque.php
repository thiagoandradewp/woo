/**
 * Esconda a mensagem 'Em estoque' na página do produto.
 *
 * @param string $html
 * @param string $text
 * @param WC_Product $product
 * @return string
 */
function thiagoandradewp_ocultar_mensagem_em_estoque( $html, $text, $product ) {
	$availability = $product->get_availability();

	if ( isset( $availability['class'] ) && 'in-stock' === $availability['class'] ) {
		return '';
	}

	return $html;
}

add_filter( 'woocommerce_stock_html', 'thiagoandradewp_ocultar_mensagem_em_estoque', 10, 3 );
