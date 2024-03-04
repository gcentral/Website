---
title: "IG AutoComplete"
externalUrl: https://www.vipm.io/package/illuminatedg_lib_ig_autocomplete
date: 2023-10-24
summary: "A tiny autocomplete search UI for string controls that can work as a popup or using an existing ListBox"
showSummary: true
showAuthor: false
showEdit: false
showData: false
showViews: false
showReadingTime: false
showWordCount: false
showBreadcrumbs: false
showHeadingAnchors: false
sharingLinks: false
showZenMode: false
showPagination: false
showRelatedContent: false
draft: false
tags:
 - "VIPM"
 - "GUI"
 - "VIPM Community"
---

Redirecting to https://www.vipm.io/package/illuminatedg_lib_ig_autocomplete

Vendor: IlluminatedG

Author(s): Derrick Bommarito
 
Full Description:
Provides a minimal API (1 VI!) to create an autocomplete style text search where filtered results based on entered text is displayed. This can leverage it's own popup UI or it can be linked to an existing ListBox. Utilizing an existing ListBox is a workaround needed when playing around with the TopMostness of a UI that the built-in popup might not be able to be displayed in front of. The text searching will split on spaces and look for each search 'word' in the options list.

The API at minimum accepts a reference to a string control used for the text input and a list of options as an array of strings. It provides a **Selection** user event that can be registered for to respond to user selections from the options.

Though it launches an async VI, it watches the calling VI's execution and closes down when the original calling hierarchy stops so that abort will work as expected and not leave an orphaned async VI running. To prevent a buildup of events and orphaned handlers in a VI that can be repeatedly run, the Stop event returned from the Launch AutoComplete Handler VI should be fired (the boolean value does not matter) to properly cleanup all resources.

See the examples for more specific usage info. A demo video can be watched at https://youtu.be/FoI_cr7KAGw