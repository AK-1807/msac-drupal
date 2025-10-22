# idfive Paragraphs Views Embed

Paragraphs integration of cards for use in idfive client projects:

This module contains markup only (no js or css), those should be provided in the client theme, loaded via the idfive Component Library:

- [idfive Component Library](https://bitbucket.org/idfivellc/idfive-component-library)
- [idfive Component Library D8 Theme](https://bitbucket.org/idfivellc/idfive-component-library-d8-theme)

## Purpose

Cards briefly describe and link to a piece of content.

### Do

- Use 3-6 cards at a time.
- Use images with a horizontal aspect ratio.
- Keep to the character limit specified for headings and text.

### Don’t

- Use fewer than 2 or more than 6 cards at a time.

## Fields

### Card Group

- Type | Card, Card(Horizontal)
- Columns | 2 Column, 3 Column, 4 Column

### Card Item

- Card Title
- Card Text
- Card Image
- Card Link

## Markup Overrides

- You may override paragraphs templates by copying them into the client theme.
- You may override hooks by copying into client .theme, and modifying hook name/etc.
