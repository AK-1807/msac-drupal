# idfive Paragraphs Callout

Paragraphs integration of a callout for use in idfive client projects:

This module contains markup only (no js or css), those should be provided in the client theme, loaded via the idfive Component Library:

- [idfive Component Library](https://bitbucket.org/idfivellc/idfive-component-library)
- [idfive Component Library D8 Theme](https://bitbucket.org/idfivellc/idfive-component-library-d8-theme)

## Purpose

Callouts are large—often full-width—components that focus attention and communicate a single idea. They can include a call-to-action.

### Do

- Limit the content to one idea/action. Callouts should be focused and not have more than one link/button.
- Be concise with the amount of copy included.

### Don’t

- Overuse callouts. These should be used sparingly—at most one per page and depending on the site, only a few within the site overall.

## Fields

- Headline
- Text (optional)
- Photo (if applicable)
- Link (if applicable)

## Markup Overrides

- You may override paragraphs templates by copying them into the client theme.
- You may override hooks by copying into client .theme, and modifying hook name/etc.
