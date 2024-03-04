---
title: "LabVIEW Bug Fix for Right-Click Menu Plug-Ins"
externalUrl: https://www.vipm.io/package/ni_patch_labview_right_click_plugin_bugfix
date: 2020-11-17
summary: "This package resolves an intermittent issue where right-click operations implemented in G sometimes do not work."
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
 - "NI"
 - "VIPM Community"
---

Redirecting to https://www.vipm.io/package/ni_patch_labview_right_click_plugin_bugfix

Vendor: NI

Author(s): NI
 
Full Description:
This package resolves an intermittent (race condition) issue where right-click operations implemented in G sometimes do not work (but when they try to reproduce the issue, everything works fine).

This package replaces the file located here (and backs up the original by adding a '.orig' suffix to the orginal filename):

<LabVIEW>\\resource\\plugins\\PopupMenus\\support\\Call Popup PlugIn Execution VI.vi

Uninstalling the package will restore the original file.

Note: This issue will be officially fixed in LabVIEW 2020 (which is why this package is only compatible with LabVIEW 2015-2019).   NI may officially patch older versions, making this package unnessesary. Until then, this package should be used to apply the fix.