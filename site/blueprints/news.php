<?php if(!defined('KIRBY')) exit ?>

title: News
pages: true
  template:
    newsitem
files: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Note
    type:  textarea
    help:  Per uso interno.