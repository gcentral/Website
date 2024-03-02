---
title: "lavag_lib_User_Interface_XControls_multi-segment-ramp_xcontrol"
externalUrl: https://www.vipm.io/package/lavag_lib_user_interface_xcontrole_multi_segment_ramp_xcontrol
date: 2022-11-06
summary: "A multi-segment ramp provides a waveform that the user defines in terms of a series of linear ramp segments with a target and either a step size or ramp rate."
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

Redirecting to https://www.vipm.io/package/lavag_lib_user_interface_xcontrole_multi_segment_ramp_xcontrol

Vendor: University of Leeds

Author(s): Gavin Burnell
 
Full Description:
A multi-segment ramp provides a waveform that the user defines in terms of a series of linear ramp segments with a target and either a step size or ramp rate. The start of each segment is the endpoint of the preceeding segment except for the first segment which has a defined start value.

The XControl supports the concept of each segment being 'active' for a measurement.

The programmed waveform is shown on a preview tab as a plot showing the individual steps and colour coding the segments depending on whether they are active or not.

The XControl can keep track of a 'current position' marker that can be drawn and updated on the preview pane.

The format and units used to program the wavefore can be set by properties and methods, the control and be programmed with a wavefore via a method. Import and export of waveform definitions can be carried out by the user with the import/exprt being to a JSON file.