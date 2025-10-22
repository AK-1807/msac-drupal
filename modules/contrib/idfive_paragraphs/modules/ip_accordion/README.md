# idfive Paragraphs Accordion

Paragraphs integration of the silc accordion library for use in idfive client projects:

- [silc accordions](https://github.com/nickrigby/silc-accordion)

This module contains markup only (no js or css), those should be provided in the client theme, loaded via the idfive Component Library:

- [idfive Component Library](https://bitbucket.org/idfivellc/idfive-component-library)
- [idfive Component Library D8 Theme](https://bitbucket.org/idfivellc/idfive-component-library-d8-theme)

## Purpose

Tabs and accordions organize and simplify a large amount of related content. When selected, the content is viewed without having to navigate away from the page.

### Do

- Use at least 2 accordions/tabs. Content in 1 accordion/tab can be organized using basic paragraph styles and widgets. Two is good, but at least 3 is better.
- Keep content length reasonable. Since accordions and tabs hide information, users may skip over info if it is buried in one that is overly long. Breaking out information into separate tabs/accordions can help. Also make sure the content isn’t too short; several each containing only a few words to a sentence doesn’t justify its use.
- Choose headings that are all related to a similar topic.

### Don’t

- Use very long headings. Instead, try to move text down into the body.
- Embed too many elements. For example, using multiple images or tables. If content is becoming crowded or too busy, it may need to be separated out as its own section.

## Fields

### Accordion Group

- Accordion Group Title | Optional
- Type | Sets it to be accordion, Tab, or Tab but accordion on mobile
- Animate the opening/closing
- Open first accordion
- Allow multiple accordions open at once

### Accordion Item

- Title
- Body

## Markup Overrides

- You may override paragraphs templates by copying them into the client theme.
- You may override hooks by copying into client .theme, and modifying hook name/etc.
