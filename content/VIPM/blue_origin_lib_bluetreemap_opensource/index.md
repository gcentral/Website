---
title: "BlueTreeMap (Open Source)"
externalUrl: https://www.vipm.io/package/blue_origin_lib_bluetreemap_opensource
date: 2023-01-02
summary: "Build a recursive TreeMap data structure in memory, and export this to a LabVIEW tree control"
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
 - "VIPM Community"
 - "serial"
---

Redirecting to https://www.vipm.io/package/blue_origin_lib_bluetreemap_opensource

Vendor: Blue Origin

Author(s): Brent Justice
 
Full Description:
This toolkit allows for the user to build what I'm calling a 'TreeMap' data structure in memory.  This is a recursive tree with attributes.  Duplicate node paths are not allowed.  The user must declare a delimiter, which is not allowed to appear in node paths.

A TreeMap can be easily converted and dumped into a LabVIEW tree control.  This is the primary use-case for this library.

A TreeMap is an on-wire, by-value data structure.  As such, you can safely branch the wire to create a new, unlinked copy.  You can also safely flatten and unflatten the structure to a serial string.

A TreeMap is a recursive data structure.  Recursiveness is accomplished through use of LabVIEW variants.  This has performance implications, but is uniquely powerful in what it can accomplish.