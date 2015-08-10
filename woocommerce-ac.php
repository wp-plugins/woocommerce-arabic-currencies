<?php
/**
 * Plugin Name: WooCommerce Arabic Currencies
 * Plugin URI: 
 * Description: This plugin for add custom currencies to woocommerce but for arabic currencies.
 * Version: 1.1.1
 * Author: Said El Bakkali
 * Author URI: http://saidelbakkali.com/
 * Text Domain: wc_ac
 * Domain Path: /lang/
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

  /**
  * Check if WooCommerce is active
  **/

if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

    /**
   * Remove not arabic currencies
   */

add_filter( 'woocommerce_currencies', 'wc_ac_remove_currencies' );

  function wc_ac_remove_currencies( $currencies ) {
    $currencies = '';
    return $currencies;
  }
  
    /**
     * Remove all not arabic currency symbols
     */

  add_filter('woocommerce_currency_symbol', 'wc_ac_remove_currencies_symbol', 10, 2);

  function wc_ac_remove_currencies_symbol( $currency_symbol, $currency ) {
     $currency_symbol = '';
     return $currency_symbol;

  }

  /**
   * Add arabic currencies
   */

  add_filter( 'woocommerce_currencies', 'wc_ac_currencies' );

  function wc_ac_currencies( $currencies ) {
    $currencies['MAD'] = __( 'Moroccan Dirham', 'wc_ac' );
    $currencies['EGP'] = __( 'Egyptian Pound', 'wc_ac' );
    $currencies['IQD'] = __( 'Iraqi Dinars', 'wc_ac' );
    $currencies['SYP'] = __( 'Syrian Pound', 'wc_ac' );
    $currencies['LBP'] = __( 'Lebanese Pound', 'wc_ac' );
    $currencies['JOD'] = __( 'Jordanian Dinar', 'wc_ac' );
    $currencies['YER'] = __( 'Yemen Riyal', 'wc_ac' );
    $currencies['LYD'] = __( 'Libyan Dinar', 'wc_ac' );
    $currencies['SDG'] = __( 'Sudanese Pound', 'wc_ac' );
    $currencies['TND'] = __( 'Tunisian Dinar', 'wc_ac' );
    $currencies['DZD'] = __( 'Algerian Dinar', 'wc_ac' );
    $currencies['MRO'] = __( 'Mauritania Ouguiya', 'wc_ac' );
    $currencies['AED'] = __( 'Emirati Dirham', 'wc_ac' );
    $currencies['SOS'] = __( 'Somali shilling ', 'wc_ac' );
    $currencies['FDJ'] = __( 'Djibouti Franc', 'wc_ac' );
    $currencies['KMF'] = __( 'Comorian Franc', 'wc_ac' );  
    $currencies['BHD'] = __( 'Bahraini Dinar', 'wc_ac' );
    $currencies['KWD'] = __( 'Kuwaiti Dinar', 'wc_ac' );
    $currencies['OMR'] = __( 'Omani Rial', 'wc_ac' );
    $currencies['QAR'] = __( 'Qatari Riyal', 'wc_ac' );
    $currencies['SAR'] = __( 'Saudi Riyal', 'wc_ac' );
          return $currencies;
  }

    /**
     *  Add arabic currencies symbols
     */

  add_filter('woocommerce_currency_symbol', 'wc_ac_currencies_symbol', 10, 2);

  function wc_ac_currencies_symbol( $currency_symbol, $currency ) {
    switch( $currency ) {
      case 'MAD': $currency_symbol = __( 'MAD', 'wc_ac' ); break;
      case 'EGP': $currency_symbol = __( 'EGP', 'wc_ac' ); break;
      case 'IQD': $currency_symbol = __( 'IQD', 'wc_ac' ); break;
      case 'SYP': $currency_symbol = __( 'SYP', 'wc_ac' ); break;
      case 'LBP': $currency_symbol = __( 'LBP', 'wc_ac' ); break;
      case 'JOD': $currency_symbol = __( 'JOD', 'wc_ac' ); break;
      case 'YER': $currency_symbol = __( 'YER', 'wc_ac' ); break;
      case 'LYD': $currency_symbol = __( 'LYD', 'wc_ac' ); break;
      case 'SDG': $currency_symbol = __( 'SDG', 'wc_ac' ); break;
      case 'TND': $currency_symbol = __( 'TND', 'wc_ac' ); break;
      case 'DZD': $currency_symbol = __( 'DZD', 'wc_ac' ); break;
      case 'MRO': $currency_symbol = __( 'MRO', 'wc_ac' ); break;
      case 'AED': $currency_symbol = __( 'AED', 'wc_ac' ); break;
      case 'SOS': $currency_symbol = __( 'SOS', 'wc_ac' ); break;
      case 'FDJ': $currency_symbol = __( 'FDJ', 'wc_ac' ); break;
      case 'KMF': $currency_symbol = __( 'KMF', 'wc_ac' ); break;
      case 'BHD': $currency_symbol = __( 'BHD', 'wc_ac' ); break;
      case 'KWD': $currency_symbol = __( 'KWD', 'wc_ac' ); break;
      case 'OMR': $currency_symbol = __( 'OMR', 'wc_ac' ); break;
      case 'QAR': $currency_symbol = __( 'QAR', 'wc_ac' ); break;
      case 'SAR': $currency_symbol = __( 'SAR', 'wc_ac' ); break;
    }
    return $currency_symbol;
  }

   /**
     * Load Arabic Currencies plugin translation
     */

  add_action( 'plugins_loaded', 'wc_ac_translation' );

	/**
 	* Load plugin textdomain.
 	*/

  function wc_ac_translation() {

    load_plugin_textdomain( 'wc_ac', false, dirname( plugin_basename( __FILE__ ) ) . '/lang' );

  }

} // End of WooCommerce check