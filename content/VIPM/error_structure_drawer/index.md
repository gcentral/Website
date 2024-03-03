---
title: "Error Structure Drawer"
externalUrl: https://www.vipm.io/package/error_structure_drawer
date: 2023-12-07
summary: "A LabVIEW Quick-Drop plug-in for implementing the common LabVIEW error handling functionality: it creates an error control and terminal if needed, wires them into the connector pane, aligns block diagram terminals, and optionally creates an error structure around existing elements on the block diagram."
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

Redirecting to https://www.vipm.io/package/error_structure_drawer

Vendor: Stuart J. Box

Author(s): Stuart J. Box
 
Full Description:
A LabVIEW Quick-Drop plug-in for implementing the common LabVIEW error handling functionality: it creates an error control and terminal if needed, wires them into the connector pane, aligns block diagram terminals, and optionally creates an error structure around existing elements on the block diagram.

The default shortcut from Quick-Drop that includes an error structure is
Ctrl + e

or terminal-only mode is
Ctrl + shift + e

-----------------------------------------------------------------------------------

Many of the plugin's config settings can be easily modified from within 'ErrorDrawerConfig.vi'. These settings include the style used for creating error controls, alignment type used for controls and indicators, and the spacings used between various elements. The behaviour of the shift key can also be changed.

-----------------------------------------------------------------------------------

The plugin has slightly different functionality depending on what items (if any) are already on the block diagram, but the general behaviour includes:

- Creates a new case structure around existing block diagram elements (depending on whether shift key pressed)
- Creates a new error control and error terminal if not already present on the top-level diagram.
- Moves all control and indicator terminals present on the top-level diagram to position them on the left and right of the new case structure respectively. Also aligns each group.
- Wires the error control to the new case structure's selector terminal, and wires from the inside of the selector terminal through the error case to the error indicator.
- Connects the error control and error indicator to the connector pane - to the bottom-left and bottom-right nodes respectively.