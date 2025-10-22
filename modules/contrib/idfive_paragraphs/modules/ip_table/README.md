# idfive Paragraphs Table

Paragraphs integration of tablefield module for use in idfive client projects, and set up to use tablesaw js:

- [tablefield module](https://www.drupal.org/project/tablefield)
- [tablesaw](https://github.com/filamentgroup/tablesaw)

This module contains markup only (no js or css), those should be provided in the client theme, loaded via the idfive Component Library:

- [idfive Component Library](https://bitbucket.org/idfivellc/idfive-component-library)
- [idfive Component Library D8 Theme](https://bitbucket.org/idfivellc/idfive-component-library-d8-theme)

## Purpose

Tables group content together in a visual format for users to see relationships and for easier understanding.

### Do

- Keep table headers short as possible. If you have 4 or more columns, long table headers will get harder to read at smaller screen sizes.
- Only use for data that must be compared/grouped by multiple things. Avoid using tables when headings/body copy would suffice.

### Don’t

- Use Tables for non tabular data. Other widgets will display these items much better.
- Avoid using a table with too many rows/columns. This could potentially be broken into multiple tables/pages.
- Use fewer than 3 rows.

## Fields

- Title | Optional
- Table

## Markup Overrides

- You may override paragraphs templates by copying them into the client theme.
- You may override hooks by copying into client .theme, and modifying hook name/etc.
