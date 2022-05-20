<?php
/**
 * Customer completed order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-completed-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<?php /* translators: %s: Customer first name */ ?>
<p><?php printf( esc_html__( 'Hi %s,', 'woocommerce' ), esc_html( $order->get_billing_first_name() ) ); ?></p>
<p><?php esc_html_e( 'We have finished processing your order.', 'woocommerce' ); ?></p>
<?php
echo "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//EN'>
<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet'>
    <meta name='' content=''>
  </head>
  <body style='margin: 0px;font-family:Arial;'>
    <table width='800' align='center' border='0' cellpadding='2' cellspacing='2' style='font-size:14px; color:#333333; background: #f2f2f2;padding: 20px;'>
      <tbody>
        <td colspan=2>
          <div align='left' style='text-align: center;'><a href='#' target='_blank'><img src='" . site_url() . "/wp-content/webservices/logo.png' width='20%' /></a></div></td>
        </tr>
        
        <tr>
          <td colspan='2' style='color: #666666; font-size:16px;  padding-top: 40px;'>Wir begrüßen Sie bei unserer MEDHOTLINE, und bedanken uns für das entgegengebrachte Vertrauen. Wir möchten Ihnen jetzt noch ein paar Infos zu unserem Service näherbringen.</td>
        </tr>
        <tr>
          <td colspan='2' style='color: #666666; font-size:16px;  padding-top: 40px;'>Bitte laden Sie sich mit dem unten angeführten Link aus Ihrem Store unsere App auf Ihr Handy und registrieren Sie sich wie in der Anleitung beschrieben.</td>
        </tr>
        <tr>
          <td colspan='2' style='color: #666666; font-size:16px;  padding-top: 40px;'>Ab jetzt steht Ihnen das Service unserer Medhotline für den gewählten Zeitraum zur Verfügung.</td>
        </tr>
        <tr>
          <td colspan='2' style='color: #666666; font-size:16px;  padding-top: 40px;'>Wenn Sie den Notfallbutton auf Ihrer APP nach rechts ziehen wird für Sie ein Ticket eröffnet und Sie werden innerhalb weniger Minuten zurückgerufen.  </td>
        </tr>
        <tr>
          <td colspan='2' style='color: #ef4545; font-size:16px;  padding-top: 40px;'>Bitte sorgen Sie dafür, dass Ihr Handy auch Anrufe unbekannter Teilnehmer annimmt!!! Unsere Zentrale sendet keine Rufnummer mit! </td>
        </tr>
        <tr>
          <td colspan='2' style='color: #666666; font-size:16px;  padding-top: 40px;'>Unsere Mitarbeiter sind allesamt Notfallsanitäter/Diplomierte PP und können Sie bei allen medizinischen Fragen kompetent beraten, und in Erster Hilfe anleiten. Sollte es sich dann herausstellen, dass nach der Erstanamnese ein Arzt erforderlich ist, wird er von uns verständigt und meldet sich kurzzeitig später bei Ihnen.  Die Informationen zu Ihrem Notfall werden gleichzeitig mit der Verständigung an unsere Dienstärzte weitergeleitet.Wird ein Rezept benötigt bekommen Sie dieses auf ihr App. Bei Beratung, Fragen zu  Impfungen oder Reisemedizinthemen ersuchen wir Sie unter <a href='mailto:beratung@medhotline.at'>beratung@medhotline.at</a> einen Termin anzufragen. Hier sollte sichergestellt sein, dass der Arzt über das nötige Zeitbudget verfügt.</td>
        </tr>
        <tr>
          <td colspan='2' style='color: #666666; font-size:16px;  padding-top: 40px;'>Bitte zögern Sie nicht den Notfallbutton zu betätigen, ist es für Sie ein Notfall oder dringend ist es für uns auch ein Notfall!</td>
        </tr>
        <tr>
          <td colspan='2' style='color: #666666; font-size:16px;  padding-top: 40px;'>Danach laden Sie bitte unsere Android oder IOS App herunter, somit können Sie unseren Service nutzen.</td>
        </tr>
        <tr>
          <td colspan='2' style='color: #666666; font-size:16px;  padding-top: 40px;'>Sie können sich in der App anmelden und Anrufe tätigen. Wenn Sie noch kein Konto haben: Wir erstellen ein Konto und senden Ihnen einen Link zum Ändern Ihres Passworts, mit dem Sie sich dann anmelden können.</td>
        </tr>
        
        <tr>
          <td colspan='1' style='color: #666666; font-size:16px;  padding-top: 40px;'><b>Android APP herunterladen</b></td>
          <td colspan='1' style='color: #666666; font-size:16px;  padding-top: 40px;'><b>IOS APP herunterladen</b></td>
        </tr>
        <tr>
          <td colspan='1'>
            <div style='margin-left:15%;'>
              <a target='_blank' href='https://play.google.com/store/apps/details?id=com.kirtapp&hl=en'>
                <img src='" . site_url() . "/wp-content/webservices/images/android_app_logo.png' width='15%'>
              </a>
            </div>
          </td>
          <td colspan='1'>
            <div style='margin-left:15%;'>
              <a target='_blank' href='https://apps.apple.com/us/app/medhotline/id1495988974'>
                <img src='" . site_url() . "/wp-content/webservices/images/android_app_logo.png' width='15%'>
              </a>
            </div>
          </td>
        </tr>
        <tr>
          <td colspan='1' style='color: #666666; font-size:16px;'>Downloadlink : <a target='_blank' href='https://play.google.com/store/apps/details?id=com.kirtapp&hl=en'>Hier</a></td>
          <td colspan='1' style='color: #666666; font-size:16px;'>Downloadlink : <a target='_blank' href='https://apps.apple.com/us/app/medhotline/id1495988974'>Hier</a></td>
        </tr>
        <tr>
          <td colspan='2' style='color: #666666; font-size:16px;  padding-top: 40px;'>Die maskuline Form in diesem Schreiben gilt für alle Anderen Geschlechter (f/d) ebenso, und wurde nur der leichteren Lesbarkeit halber gewählt.</td>
        </tr>
        <tr>
          <td colspan='2' style='color: #666666; font-size:16px;  padding-top: 40px;'><b>Vielen dank für die Anmeldung!</b></td>
        </tr>
        
        
      </tbody>
    </table>
  </body>
</html>";
// /*
//  * @hooked WC_Emails::order_details() Shows the order details table.
//  * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
//  * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
//  * @since 2.5.0
//  */
// do_action( 'woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email );

// /*
//  * @hooked WC_Emails::order_meta() Shows order meta data.
//  */
// do_action( 'woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email );

// /*
//  * @hooked WC_Emails::customer_details() Shows customer details
//  * @hooked WC_Emails::email_address() Shows email address
//  */
// do_action( 'woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email );

// /**
//  * Show user-defined additional content - this is set in each email's settings.
//  */
// if ( $additional_content ) {
// 	echo wp_kses_post( wpautop( wptexturize( $additional_content ) ) );
// }

// /*
//  * @hooked WC_Emails::email_footer() Output the email footer
//  */
// do_action( 'woocommerce_email_footer', $email );
