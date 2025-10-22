# About

This Drupal 8 theme contains many hooks/functions that idfive uses for themes.

It is designed to be used as a master theme, and to generate a subtheme to be modified for any idfive clients.

This master theme should **never ever be modified directly**, rather, generate a subtheme for your clienty as outlined below.

Again: **THIS THEME SHOULD NEVER BE MODIFIED DIRECTLY FOR ANY CLIENT**

This theme holds general functions/hooks that idfive developers use across ALL
clients, and is designed to be able to be updated.

Instead, you should create a subtheme from one of the provided
starterkits (this is considered a best practice). Once you've done that, you
can override CSS, templates, and theme processing from within that subtheme.

## Installation

This theme can be installed in several different ways, but for most deploy operations, the .git will need to be removed. To download this repo into a D8 build quickly:

### Via Composer

- `composer require idfive/idfive`

### Non Composer

- `cd themes/custom`
- `git clone http://bitbucket.org/idfivellc/idfive-component-library-d8-theme.git idfive`
- `rm -R idfive/.git`

This script will download this repo into the themes/custom (or wherever wished) folder of your D8 install, into a folder named "idfive", then remove the .git from that folder so it is now essentially a part of that repo.

**THIS THEME IS DESIGNED TO LIVE IN A FOLDER NAMED "idfive". IT IS NECESSARY THAT IT DOES SO.**

### Important Notice

**THIS THEME SHOULD NEVER BE MODIFIED DIRECTLY FOR ANY CLIENT**

Instead, you should create a **subtheme**
from one of the provided starterkits (this is considered a best practice)
by the method described in **Sub-Theming** section.

Once you've done that, you can override CSS, templates, and theme processing from within that subtheme.

## Sub-Theming

### Choose a Starterkit & Create Sub Theme

- idfive Component Library (icl)

  - Main idfive front end scaffolding, and currently only option for starterkit, though more may be added in the future.

  - It relies on the idfive icl framework, and other well tested, idfive approved, libraries/etc.

- Once you've selected one of the above starterkits, here's how to install it:

1. From within the "starterkits" folder, run `$sudo bash generate_kit.sh` to generate a subtheme folder on your D8 instal.

  > for windows users, please refer notes in following section - **Notes for Windows Users**

2. Use this generated subtheme for all custom code.
3. If you used composer to install the idfive theme, you may need to manually move your new theme from the "contrib" folder, to the main, or "custom" folder, to meet standards.

#### Notes for Windows Users

Because `bash` is not a valid command in Windows OS, you need to do some more works:

1. Down load git from [Git for Windows](https://markdownlivepreview.com/) and install it.
2. Put git's "bin" folder's full path (normally `C:\Program Files\Git\bin`) in `PATH` variable.
3. Now you can run `sh  generate_kit.sh` instead of `sudo bash generate_kit.sh` in "starterkits" folder

### Enable Your New Sub-theme

- In your Drupal site, navigate to `admin/appearance`.
- Click the `Enable and set default` link next to your newly created sub-theme.
- Now that you've enabled your starterkit, please refer to the starterkit's documentation page
to customize.

## Updating

### Updating Via Composer

- `composer update idfive/idfive`

### Updating Non Composer

Unless something like composer is used, any updating of this master theme will need to be done manually:

- `cd themes/custom`
- `rm idfive`
- `git clone http://bitbucket.org/idfivellc/idfive-component-library-d8-theme.git idfive`
- `rm -R idfive/.git`

## Other helpful modules

- [idfive Paragraphs](https://bitbucket.org/idfivellc/idfive-component-library-d8-paragraphs): This repo adds a common way to add idfive ICL type markup to idfive D8/on sites.
- [idfive Move Description Text](https://bitbucket.org/idfivellc/idfive_move_description): Moves "help text" on node/entity forms above the field, and under the label. A popular request from our clients.
