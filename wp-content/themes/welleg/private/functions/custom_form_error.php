<?php

function contact_form_error_message( $error, $key, $rule ) {
  switch ( $key ) {

    case 'request':
      $error = 'ご用件を入力してください。';
      break;

    case 'name':
      $error = 'お名前を入力してください。';
      break;

    case 'email':
      $error = 'メールアドレスを入力してください。';
      break;

    case 'inquiry':
      $error = 'お問い合わせ内容を入力してください。';
      break;

    default:
      $error = '入力してください';
      break;
  }

  return $error;
}

add_filter( 'mwform_error_message_mw-wp-form-57', 'contact_form_error_message', 10, 3 );