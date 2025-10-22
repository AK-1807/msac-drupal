# idfive Paragraphs Video

Paragraphs integration of videos for use in idfive client projects. Videos sourced from either vimeo or youtube.

This module contains markup only (no js or css), those should be provided in the client theme, loaded via the idfive Component Library:

- [idfive Component Library](https://bitbucket.org/idfivellc/idfive-component-library)
- [idfive Component Library D8 Theme](https://bitbucket.org/idfivellc/idfive-component-library-d8-theme)

## Purpose

This module exists to give developers an easy way to add videos to a Kitchen Sink page.

### Fields

Module utilizes core media module to embed remote video. Embed video is a field in a paragraph type. The paragraph type includes a title, description, and media field. The core media module allows sharing of pre uploaded media which it keeps in a library. Media is added through an entity browser installed with idfive_paragraphs module.

## Markup Overrides

- You may override paragraphs templates by copying them into the client theme.
- You may override hooks by copying into client .theme, and modifying hook name/etc.
