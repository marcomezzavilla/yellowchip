<?php if(!defined('KIRBY')) exit ?>

title: News item
pages: false
files: true
fields:
  title:
    label: Title
    type:  text
  date:
    label: Date
    type: date
    format: DD/MM/YYYY
    width: 1/2
    help: La data che apparirà sul post.
  text:
    label: Main text
    type:  textarea
  mobiletext:
    label: Mobile text
    type:  textarea
    help: Questo testo è visualizzato nei dispositivi mobile. Se il campo è lasciato vuoto, viene utilizzato quello principale.