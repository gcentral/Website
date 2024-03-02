---
title: "OpenG LabVIEW ZIP Library"
externalUrl: https://www.vipm.io/package/oglib_lvzip-4.0.0
date: 2018-03-02
summary: "The lvzip package contains several routines for operating on zip files."
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
draft: true
tags:
 - "VIPM"
 - "VIPM Community"
---

Redirecting to https://www.vipm.io/package/oglib_lvzip-4.0.0

Vendor: OpenG.org

Author(s): OpenG.org
 
Full Description:
The lvzip package contains several routines for operating on zip files.

Version 4.0.0: Palette compatiable with OpenG 4.0 release. 
Version 2.5.1: Fixes issue with broken VIs in LabVIEW 2009 due to calling (now) private config utilities.
Version 2.5: Changes license of LabVIEW sources from LGPL to BSD, Adds Memory Stream VIs to the palettes, Optimizes ZLIB Extract All Files to Dir, Fixes potential problem where error such as out of disk on finishing to add a file into an archive might get lost meaning that a corrupted archive could result without the user being informed about it, Fixes issue preventing adding files specified by UNC network path to zip archive.
Version 2.4 adds support for direct memory stream handling.
Version 2.3 adds support for transparent Mac Resource file handling through MacBinary encoding.
Version 2.2 adds support for appending files to an existing archive, deleting files from an archive and password support for adding and extracting files.