# MSAC Profiles

## About

This module contains functionality to customize the login process for artists, and to meld artist/organization nodes and a users profile in the "profile views".

### Key Concepts

#### Profiles

- a node of type Artist or Organization. There should be only one per user. Found by loading the first content of type artist or organization from a specific user.
- creator = user

#### Work

- creator = user
- field Owner = Related Profile node (artist or org). This is to make it easier to link to profiles from places like the work view.

## Installation

Install as you would normally install a contributed Drupal module. Visit [drupal.org](https://www.drupal.org/docs/8/extending-drupal-8/installing-drupal-8-modules) for further information.

## Major features/pages/functionality provided by this module

### /profile page

This page acts as a kind of catch all for a few operations. It has functionality for both logged in/not logged in users, and acts as the defacto login page for most users.

### If not logged in

- Displays intro text that is editable in this modules configuration.
- Displays tabs to either create an account, or log in. This is done by loading these forms in the controller, if not logged in.
- Login: Standard user/pass login form. Redirects back to /profile after login, via custom submit handler.
- Register: Loads account creation form, with a few fields added (TOS and account type), via a custom form, then via a custom submit handler:
  - Creates user with role "Artist".
  - Creates an (unpublished) node of type Artist, or Organization, depending on the radio chosen at account creation. We create with a title similar to "Temporary artist profile for {{userid}}", as we do not yet have any details for name/etc.
  - Assign node author of new node to just created user.
  - Redirect pack to /profile.

### If logged in

- Queries the DB for the artist/org associated with the logged in user.
- Checks to see if basic fields, like name/etc are filled out on the artist/org associated with the logged in user. If not filled out, load a truncated version of node edit form for a few basic details that we require the user to fill out. Upon save, via custom submit handler, reset title/etc to more accurately reflect artist/org name, redirect back to /profile.
- Displays message as to publishing status.
- If basic fields filled out, it means profile is "complete enough" and load dashboard items:
  - Funding opportunities: Show funding opportunities based on type (artist/org).
  - My arts agency: Load contact info of related county arts agency.
  - Grant proposal resources: Static list, same for all users. This added via a WYSIWG field in module settings.

### /profile/about page

- Displays message as to publishing status.
- Loads custom text from module config page.
- Loads a custom node edit form for the artist/org node associated with the logged in user.
- Submit redirects back to /profiles/about.

### /profile/work page

- Displays message as to publishing status.
- Loads views of work associated with user.
- Adds a work add button of each type
- button is hidden if more than 6 works already added (6 is configurable in module settings).

### /profile/work/add/{type}

- Sets the work type, based on route, then hides field.
- Sets the work owner, to related profile node, then hides field.
- Submit redirects back to /profiles/work.

### /profile/account page

- Displays message as to publishing status.
- Display text/directions on how to remove an account. This is editable in module settings.
- Loads a custom user edit form, in order to adjust passwords/etc.

## Development

- No special development considerations.
- See [developers.idfive.com](https://developers.idfive.com/), and [drupal documentation standards](https://www.drupal.org/docs/develop/documenting-your-project/module-documentation-guidelines).
