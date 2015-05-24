<?php 
/* The mzz-cruft-remover script just needs to be a custom, maybe even tunable, version of the WordPress native xml export tool. 

Envisioned to work like this:
- the mzz-cruft-remover performs an xml export of the entire wordpress site in the exact format that is 100% readable by the native WordPress importer.
- the mzz-cruft-remover has the default settings exactly of the native WordPress export tool, but then has as man more flexible options as a user needs.
- its a WordPress plugin (to build my rep as a WordPress plugin developer and thus I "get paid")




------
The mzz-cruft-remover script is a custom, even tunable, version of the WordPress native xml export tool. 

Envisioned to work like this:
- the mzz-cruft-remover performs an xml export of the entire wordpress site.
- the format the mzz-cruft-remover produces can be imported by the native WordPress importer
- the mzz-cruft-remover has the default settings exactly of the native WordPress export tool
- beyond the defaults, the mzz-cruft-remover then has as man more flexible options via checkboxes etc. 
- its a WordPress plugin
TO-DO:
- add language support for example one clicks the "analyze" (or "analyse") button
- add multisite support
- add authorisation check - only network admins or site admins should be able to use as appropriately.


For example one installs and activates the plugin.
* one browses to the plugin's admin section. a list of information about the current state of the database/site comes up.
* one chooses from an array of checkboxes - most representing what to keep in the export and/or what to leave out of the export
* one clicks the "Export" button. */
?>
