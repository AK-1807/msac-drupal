# idfive Paragraphs Carousel

Paragraphs integration of the ICL Carousel for use in idfive client projects:

This module contains markup only (no js or css), those should be provided in the client theme, loaded via the idfive Component Library:

- [idfive Component Library](https://bitbucket.org/idfivellc/idfive-component-library)
- [idfive Component Library D8 Theme](https://bitbucket.org/idfivellc/idfive-component-library-d8-theme)

## Purpose

Carousels show multiple pieces of content within one area of the page. Content rotates using left/right buttons.

### Do

- Use to showcase photos. Using a carousel as an image gallery is the best use of carousels.
- Use at least 3 slides. If there is only 1 or 2 slides-worth of content, using a full-width image module may be a better solution.
- Use images with a horizontal aspect ratio. Images in carousels will all be cropped to have the same aspect ratio so they have a consistent display as a user navigates through the carousel. Portrait or square images may be cropped in an unexpected way.
- Use high quality images at the specified minimum size. It can look strange when a slide in a carousel is noticeably lower quality than the others. Smaller images that are unable to go in a carousel can alternatively be used as inline images with captions.
- Be consistent when using image descriptions. If one image has a description, try to make sure all other images also have descriptions. Make sure the description lengths don’t vary too widely.

### Don’t

- Use carousels to include important calls to action. User engagement on slides 2+ is very low. Any important information will likely be missed.
- Use an image that has text embedded in the image itself. Any text in an image may be cut off in a way you don’t expect. Use the description field to add extra information about an image.
- Use an image that has important features toward the edges or covered by the image description. For example, if you are featuring a person, make the face is towards the top third and easily visible.

## Fields

### Carousel Item

- Image
- Caption

## Markup Overrides

- You may override paragraphs templates by copying them into the client theme.
- You may override hooks by copying into client .theme, and modifying hook name/etc.
