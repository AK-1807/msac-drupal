# INTRODUCTION

This module is designed to display a GDPR prompt, and create a Privacy Policy page. It is designed to work on JS/CSS provided by the theme. This module does the following:

- Create functionality to provide the GDPR prompt bar as a block (idfive GDPR Block).
- Create a Privacy Policy page. (/privacy-policy)

## REQUIREMENTS

- idfive component library, with GDPR components, in client theme.
- block.

## INSTALLATION

- Install as you would normally install a contributed Drupal module. See:
  [installing-modules](https://www.drupal.org/docs/8/extending-drupal-8/installing-modules)
  for further information.

## CONFIGURATION

- Place block in content or similar region (idfive GDPR Block) in Structure » Block Layout: (admin/structure/block/)
- [Configure settings](/admin/config/services/idfive_gdpr/settings) for both block and privacy policy page.

## TROUBLESHOOTING

- Check that theme has required JS/CSS is ICL.
- Ensure block is enabled.
