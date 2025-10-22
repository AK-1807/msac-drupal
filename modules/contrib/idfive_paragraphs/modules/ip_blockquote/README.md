# idfive Paragraphs Blockquote

Paragraphs integration of a blockquote for use in idfive client projects:

This module contains markup only (no js or css), those should be provided in the client theme, loaded via the idfive Component Library:

- [idfive Component Library](https://bitbucket.org/idfivellc/idfive-component-library)
- [idfive Component Library D8 Theme](https://bitbucket.org/idfivellc/idfive-component-library-d8-theme)

## Purpose

A block quote is a specially styled section of text, offset or called out on its own, to support the other content on the page.

### Do

- Include block quotes midway through a long article. This adds visual interest and helps to break long copy into smaller sections.

### Don’t

- Use an overly long quote. Often block quotes use font sizes/weights that can be overwhelming if used for copy that is very long.
- Place a blockquote as the last element on page.

## Fields

- Quote
- Cite/Attribution (if applicable)
- Photo (if applicable)

## Markup Overrides

- You may override paragraphs templates by copying them into the client theme.
- You may override hooks by copying into client .theme, and modifying hook name/etc.
