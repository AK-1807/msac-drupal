# idfive Paragraphs Button/Link

Paragraphs integration of buttons/Links for use in idfive client projects:

This module contains markup only (no js or css), those should be provided in the client theme, loaded via the idfive Component Library:

- [idfive Component Library](https://bitbucket.org/idfivellc/idfive-component-library)
- [idfive Component Library D8 Theme](https://bitbucket.org/idfivellc/idfive-component-library-d8-theme)

## Purpose

Buttons draw the user’s attention to trigger actions and links.

### Do

- Use 1-3 buttons at a time. This will avoid overwhelming a user with buttons, and will help to narrow down choices.
- Keep button label reasonable. Try to keep button labels to 1-3 words. Overly long buttons can look awkward. If a button has long text, try pairing the button with a heading to break it up.
- Use meaningful language that tells users what to expect. Make sure the user knows where they will go when they click a button. Avoid generic language such as “More,” “Click Here,” or “Submit.”

### Don’t

- Overuse buttons. Prioritize the actions you want your users to take. Avoid using a row of over 3 buttons, as well as “sprinkling” too many buttons throughout a page.

## Fields

- Link Type | Button or Fancy Link
- Link | Text, URL, and optional target

## Markup Overrides

- You may override paragraphs templates by copying them into the client theme.
- You may override hooks by copying into client .theme, and modifying hook name/etc.
