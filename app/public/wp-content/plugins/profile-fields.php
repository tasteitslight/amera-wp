<?php
/*
Plugin Name: Custom Profile Fields
Plugin URI:
Description:
Version: 0.1
Author: CSSIgniter - https://www.cssigniter.com/how-to-add-a-custom-user-field-in-wordpress/
Author URI:
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// Capital Gains Boolean

add_action( 'show_user_profile', 'show_extra_profile_fields_cgr' );
add_action( 'edit_user_profile', 'show_extra_profile_fields_cgr' );

function show_extra_profile_fields_cgr( $user ) {
	$capitalGainsRadio = get_the_author_meta( 'capital_gains_radio', $user->ID, true );
	?>

  <h3><?php esc_html_e( 'Financial Information' ); ?></h3>

	<table class="form-table">
		<tr>
			<th><label for="capital_gains_radio"><?php esc_html_e( 'Do you have capital gains within the past 180 days?', 'crf' ); ?></label></th>
			<td>
        <input type="radio" name="capital_gains_radio" <?php  checked( $capitalGainsRadio, 'Yes' ); ?> value="Yes"/>Yes&nbsp;&nbsp;&nbsp;
        <input type="radio" name="capital_gains_radio" <?php  checked( $capitalGainsRadio, 'No' ); ?> value="No"/>No&nbsp;&nbsp;&nbsp;
        <input type="radio" name="capital_gains_radio" <?php  checked( $capitalGainsRadio, 'Unsure' ); ?> value="Unsure"/>I don't know&nbsp;&nbsp;&nbsp;
			</td>
		</tr>
	</table>
	<?php
}

add_action( 'personal_options_update', 'update_profile_fields_cgr' );
add_action( 'edit_user_profile_update', 'update_profile_fields_cgr' );

function update_profile_fields_cgr( $user_id ) {
	if ( ! current_user_can( 'edit_user', $user_id ) ) {
		return false;
	}

	else {
		update_user_meta( $user_id, 'capital_gains_radio', $_POST['capital_gains_radio'] );
	}
}

// Capital Gains Number

add_action( 'show_user_profile', 'show_extra_profile_fields_cgn' );
add_action( 'edit_user_profile', 'show_extra_profile_fields_cgn' );

function show_extra_profile_fields_cgn( $user ) {
	$capGain = get_the_author_meta( 'capital_gains', $user->ID );
	?>

	<table class="form-table">
		<tr>
			<th><label for="capital_gains"><?php esc_html_e( 'What is the approximate amount of capital gains that you have recognized or intend to recognize?' ); ?></label></th>
			<td>
        <input type="radio" name="capital_gains" <?php  checked( $capGain, 'Less than $100,000' ); ?> value="Less than $100,000"/>Less than $100,000&nbsp;&nbsp;&nbsp;
        <input type="radio" name="capital_gains" <?php  checked( $capGain, '$100,000-$250,000' ); ?> value="$100,000-$250,000"/>$100,000-$250,000&nbsp;&nbsp;&nbsp;
        <input type="radio" name="capital_gains" <?php  checked( $capGain, '$250,000-$500,000' ); ?> value="$250,000-$500,000"/>$250,000-$500,000&nbsp;&nbsp;&nbsp;<br/>
        <input type="radio" name="capital_gains" <?php  checked( $capGain, '$500,000-$1,000,000' ); ?> value="$500,000-$1,000,000"/>$500,000-$1,000,000&nbsp;&nbsp;&nbsp;
        <input type="radio" name="capital_gains" <?php  checked( $capGain, 'More than $1,000,000' ); ?> value="More than $1,000,000"/>More than $1,000,000&nbsp;&nbsp;&nbsp;
			</td>
		</tr>
	</table>
	<?php
}

add_action( 'personal_options_update', 'update_profile_fields_cgn' );
add_action( 'edit_user_profile_update', 'update_profile_fields_cgn' );

function update_profile_fields_cgn( $user_id ) {
	if ( ! current_user_can( 'edit_user', $user_id ) ) {
		return false;
	}

	else {
		update_user_meta( $user_id, 'capital_gains', $_POST['capital_gains'] );
	}
}

// Accredited Investor?

add_action( 'show_user_profile', 'crf_show_extra_profile_fields_2' );
add_action( 'edit_user_profile', 'crf_show_extra_profile_fields_2' );

function crf_show_extra_profile_fields_2( $user ) {
	$accreditedInvestor = get_the_author_meta( 'accredited_investor', $user->ID, true );
	?>

	<table class="form-table">
		<tr>
			<th><label for="accredited_investor"><?php esc_html_e( 'Are you an Accredited Investor?', 'crf' ); ?></label></th>
			<td>
        <input type="radio" name="accredited_investor" <?php  checked( $accreditedInvestor, 'Yes' ); ?> value="Yes"/>Yes&nbsp;&nbsp;&nbsp;
        <input type="radio" name="accredited_investor" <?php  checked( $accreditedInvestor, 'No' ); ?> value="No"/>No&nbsp;&nbsp;&nbsp;
        <input type="radio" name="accredited_investor" <?php  checked( $accreditedInvestor, 'Unsure' ); ?> value="Unsure"/>I don't know&nbsp;&nbsp;&nbsp;
			</td>
		</tr>
	</table>
	<?php
}

add_action( 'personal_options_update', 'crf_update_profile_fields_2' );
add_action( 'edit_user_profile_update', 'crf_update_profile_fields_2' );

function crf_update_profile_fields_2( $user_id ) {
	if ( ! current_user_can( 'edit_user', $user_id ) ) {
		return false;
	}

	else {
		update_user_meta( $user_id, 'accredited_investor', $_POST['accredited_investor'] );
	}
}

// Investing Party

add_action( 'show_user_profile', 'show_extra_profile_fields_investingparty' );
add_action( 'edit_user_profile', 'show_extra_profile_fields_investingparty' );

function show_extra_profile_fields_investingparty( $user ) {
	$investingParty = get_the_author_meta( 'investing_party', $user->ID );
	?>

	<table class="form-table">
		<tr>
			<th><label for="investing_party"><?php esc_html_e( 'Which party would be investing the capital gain?' ); ?></label></th>
			<td>
        <input type="radio" name="investing_party" <?php  checked( $investingParty, 'Individual' ); ?> value="Individual"/>Individual&nbsp;&nbsp;&nbsp;
        <input type="radio" name="investing_party" <?php  checked( $investingParty, 'Joint' ); ?> value="Joint"/>Joint&nbsp;&nbsp;&nbsp;
        <input type="radio" name="investing_party" <?php  checked( $investingParty, 'Entity' ); ?> value="Entity"/>Entity&nbsp;&nbsp;&nbsp;
        <input type="radio" name="investing_party" <?php  checked( $investingParty, 'Unsure' ); ?> value="Unsure"/>Unsure&nbsp;&nbsp;&nbsp;
			</td>
		</tr>
	</table>
	<?php
}

add_action( 'personal_options_update', 'update_profile_fields_investingparty' );
add_action( 'edit_user_profile_update', 'update_profile_fields_investingparty' );

function update_profile_fields_investingparty( $user_id ) {
	if ( ! current_user_can( 'edit_user', $user_id ) ) {
		return false;
	}

	else {
		update_user_meta( $user_id, 'investing_party', $_POST['investing_party'] );
	}
}