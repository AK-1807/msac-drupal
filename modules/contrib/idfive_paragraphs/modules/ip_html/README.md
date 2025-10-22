# idfive Paragraphs HTML

Paragraphs integration of Basic HTML WYSIWYG for use in idfive client projects:

This module contains markup only (no js or css), those should be provided in the client theme, loaded via the idfive Component Library:

- [idfive Component Library](https://bitbucket.org/idfivellc/idfive-component-library)
- [idfive Component Library D8 Theme](https://bitbucket.org/idfivellc/idfive-component-library-d8-theme)

## Purpose

The WYSIWYG (What You See Is What You Get) editor allows content managers to organize content, particularly headlines and copy.

### Do

- Make use of headings to organize content. If a page has a clear hierarchy of content, use different heading styles to indicate importance. For example, a news story can be broken up by using an H2 for large sections, and then H3/H4 headings for details within each section.
- Copy and paste text without formatting. All copy on the site should use the website font styling, and should not be modified in any way besides using bold text, underlining or italics. Pasting in text with formatting from another website or a Word doc can carry over colors, type sizes and styles that you don’t want.
- Optimize images before embedding them. Large images slow down sites, which does not make your users happy. Save your image to the recommended pixel dimensions and file size before uploading.
- Include captions with images. Users read captions, sometimes before they even read the body copy. Captions are also great for accessibility because it can be read by screen readers and provides context.

### Don't

- Use headings just for styling purposes. Headings are meant to help organize content for readers, which is especially important for the visually impaired who may use screen readers. Don’t use a heading just because it has a size, color, or style that looks nice. This may confuse readers.
- Use headings that take up an entire paragraph of text. Headings are meant to be a summary of what you’re going to read. Using a heading for long chunks of text dilutes your message.
- Copy and paste directly from Word or another website. This can carry over colors, type sizes and styles that you don’t want.

## Fields

- Text

## Markup Overrides

- You may override paragraphs templates by copying them into the client theme.
- You may override hooks by copying into client .theme, and modifying hook name/etc.
