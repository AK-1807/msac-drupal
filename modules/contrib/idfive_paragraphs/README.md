# idfive Paragraphs

Paragraphs integration of the commonly used idfive "Kitchen Sink" components, and few other custom modules.

These components are designed as individual submodules that you may enable as needed. These are designed to work with the idfive Component Library frontend. This module also adds some common idfive config options, such as defined Entity Browsers.

This module, and submodules, contain markup only (no js or css, except some for admin views/etc), those should be provided in the client theme, loaded via the idfive Component Library:

- [idfive Component Library](https://bitbucket.org/idfivellc/idfive-component-library)
- [idfive Component Library D8 Theme](https://bitbucket.org/idfivellc/idfive-component-library-d8-theme)

## Installation

This module can be installed in several different ways, but for most deploy operations, the .git will need to be removed. To download this repo into a D8 build quickly:

### Installing via Composer

- `composer require idfive/idfive_paragraphs`

### Installing manually

- `cd modules`
- `git clone https://bitbucket.org/idfivellc/idfive-component-library-d8-paragraphs.git idfive_paragraphs`
- `rm -R idfive_paragraphs/.git`

This script will download this repo into the modules (or wherever wished) folder of your D8 install, into a folder named "idfive_paragraphs", then remove the .git from that folder so it is now essentially a part of that repo.

## Included Modules

- idfive Admin Toolbar: Creates an admin menu item for editing, eliminating the need for admin tabs on the page.
- idfive Sidebar Menu: Creates a block for a sidebar menu that is modified to meet ICL standards.
- idfive Lazyload: Lazy loads all images for better performance.
- idfive Paragraphs Accordion: Provides a paragraphs bundle for the idfive silc accordion as a Kitchen Sink Widget.
- idfive Paragraphs Blockquote: Provides a paragraphs bundle for embedding a blockquote as a Kitchen Sink Widget.
- idfive Paragraphs Button/Link: Provides a paragraphs bundle for embedding Buttons/Links as a Kitchen Sink Widget.
- idfive Paragraphs Callout: Provides a paragraphs bundle for embedding a callout as a Kitchen Sink Widget.
- idfive Paragraphs Card: Provides a paragraphs bundle for embedding cards as a Kitchen Sink Widget.
- idfive Paragraphs Carousel: Provides a paragraphs bundle for embedding a static content carousel as a Kitchen Sink Widget.
- idfive Paragraphs Text/HTML: Provides a paragraphs bundle for embedding HTML as a Kitchen Sink Widget.
- idfive Paragraphs Table: Provides a paragraphs bundle for embedding tables as a Kitchen Sink Widget.
- idfive Paragraphs Views Embed: Provides a paragraphs bundle for embedding views as a Kitchen Sink Widget.
- idfive Paragraphs Webform Embed: Provides a paragraphs bundle for embedding webforms as a Kitchen Sink Widget.
- idfive Paragraphs Video Embed: Provides a paragraphs bundle for embedding videos as a Kitchen Sink Widget.
- idfive Paragraphs Image: Provides a paragraphs bundle for embedding images as a Kitchen Sink Widget.

## General Setup

### ICL Widgets

These ICL widgets are set up to add configuration required for each upon installing. It will be upt you, however, to create the field in which these are added to entities/etc.

### Entity Browsers

These browsers should be set on image fields that come from the ICL widgets, but they can also now be used on any field. Simply choose the correct Entity Browser in the form display, for any media field you wish.

## idfive Sidebar Menu

This module proves a configurable block, that we commonly use to show a sidebar menu. This menu is set up to use the markup and UX that will eventually be difined in the ICL. To use, simply enable the module, and add the block to your sidebar as you normally would.

## Updating

### Updating Via Composer

- `composer update idfive/idfive_paragraphs`

### Updating manually

- `cd modules`
- `rm -R idfive_paragraphs`
- `git clone https://bitbucket.org/idfivellc/idfive-component-library-d8-paragraphs.git idfive_paragraphs`
- `rm -R idfive_paragraphs/.git`

## Markup Overrides

- You may override paragraphs templates by copying them into the client theme.
- You may override hooks by copying into client .theme, and modifying hook name/etc.
