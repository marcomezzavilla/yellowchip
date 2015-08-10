<?php if(!defined('KIRBY')) exit ?>

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Main text
    type:  textarea
  mobiletext:
    label: Mobile text
    type:  textarea
    help: Questo testo è visualizzato nei dispositivi mobile. Se il campo è lasciato vuoto, viene utilizzato quello principale