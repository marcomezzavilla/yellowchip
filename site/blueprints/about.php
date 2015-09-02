<?php if(!defined('KIRBY')) exit ?>

title: About
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  first_block:
    label: Testo desktop
    type:  textarea
    help:  Tre colonne, per schermi grandi (desktop)
  first_block_mobile:
    label: Testo mobile
    type:  textarea
    help:  Due colonne, per schermi più piccoli (tablet e smartphone)