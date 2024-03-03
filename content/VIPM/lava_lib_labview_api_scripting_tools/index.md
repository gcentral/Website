---
title: "lava_lib_LabVIEW_API_scripting_tools"
externalUrl: https://www.vipm.io/package/lava_lib_labview_api_scripting_tools
date: 2020-06-24
summary: "This is a LabVIEW 8."
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

Redirecting to https://www.vipm.io/package/lava_lib_labview_api_scripting_tools

Vendor: University of Leeds

Author(s): Gavin Burnell
 
Full Description:
This is a LabVIEW 8.6.1 Library of VIs to help with scripting.

The public VIs include routines to get hold of the block diagram references, control terminal references, get the connector pane reference and select the connector pane pattern and wire controls up to it. There are a number of routines to help wire the block diagram up, including creating a selection of the primitives (I got bored of coding them all up !).

I've stuck in some routines that work with tags - hidden away is the capability to tag LabVIEW vi-server objects with arbitary data. One possibility is to use this to identify bits of the block diagram of a vi for moving and rewiring via scripting.

The scripting Tools includes a separate XNode support library that provides routines to help scripting and terminal adaptation in XNodes.

There are some routines to help with undo transactions new to this release.

NB If you are installing this with the Array XNodes (also from the Code repository) then I strongly recommend unzipping the two files into the same common directory and preserving the names. That should help linkage problems.