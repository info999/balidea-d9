/**
 * @file
 * test2 behaviors.
 */
(function (Drupal) {

  'use strict';

  Drupal.behaviors.test2 = {
    attach: function (context, settings) {

      console.log('It works!');

    }
  };

} (Drupal));
