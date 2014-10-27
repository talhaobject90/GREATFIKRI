<?php 

/*
 * Implementation of hook_theme().
 */
function mymodule_theme() {
  return array(
    'page' =>  array(
      'template' => 'page-node-edit',
      'arguments' => array(
        'content' => NULL,
        'show_blocks' => TRUE,
        'show_messages' => TRUE,
      ),
   ),
  );
}