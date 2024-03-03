---
title: "Rename LVOOP Labels"
externalUrl: https://www.vipm.io/package/lava_rsc_rename_lvoop_labels
date: 2016-05-19
summary: "This package is Open Source"
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
 - "NI LabVIEW Tools Network"
 - "OOP"
---

Redirecting to https://www.vipm.io/package/lava_rsc_rename_lvoop_labels

Vendor: LAVA

Author(s): Jonathon Green <jg@jgcode.net>
 
Full Description:
This package is Open Source
This package is a LAVA distribution - visit 'http://bit.ly/team_lava' to learn more about Team LAVA
Visit 'http://bit.ly/rename_lvoop_labels' for this package's support forum

This package contains a Plugin which renames a Class Member VI's Top Left and Top Right Connector Pane inputs to 'Class Name In' for control and 'Class Name Out' for indicator. Qualified Namespacing is ignored (i.e. parent Libraries). All VI control terminal labels are aligned left and indicator terminal labels right. Addtionally the Class icon will be refreshed. Use this Plugin e.g. after you have renamed a Class and you want to update it's labels or when you have cloned (Save As) a Class

This plugin was designed to be use with 'LVOOP templates' therefore, the following Connector Panes are supported:
4815 - 4x2x2x4
4833 - 5x3x3x5
4834 - 6x4x4x6
4835 - 8x6x6x8

Restart LabVIEW to refresh Menus after installation
Use the Tool Menu or NI Example Finder to view examples of how this tool works.

Tools Menu:
Plugins can be found under Tools>>LAVA>>Rename LVOOP Labels
'Rename Selected VI Only' - operates only on the selected VI
'Rename All VIs In Class' - operates on all VIs in the selected VI's Class
'Open Example' - demonstrates features of this tool

Quick Drop (QD):
Press Ctrl + Space to launch QD
The default hotkey for this plugin is 'Z'
'Ctrl + Z' - operates only on the selected VI
'Ctrl + Shift + Z' - operates on all VIs in the selected VI's Class

Help Menu:
Help can be found under Help>>LAVA>>Rename LVOOP Labels

Installation Locations (relative to LabVIEW directory):
'\\vi.lib\\addons\\_LAVA\\rename_lvoop_labels' - main code
'\\project\\LAVA\\rename_lvoop_labels' - tools menu plugin code
'\\resource\\dialog\\QuickDrop\\plugins' - quick drop plugin code (z.vi)
'\\help\\LAVA\\rename_lvoop_labels' - help menu plugin code
'\\examples\\LAVA\\rename_lvoop_labels' - example code
'\\examples\\exbins' - .bin3 file