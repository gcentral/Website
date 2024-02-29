---
title: "Free Label To VI Description (Right-Click Menu Plugin)"
externalUrl: https://www.vipm.io/package/robusto_systems_lib_free_label_to_vi_description
summary: "This is a right-click menu (a.k.a."
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

Redirecting to https://www.vipm.io/package/robusto_systems_lib_free_label_to_vi_description

Vendor: Robusto Systems

Author(s): Petru Tarabuta
 
Full Description:
This is a right-click menu (a.k.a. shortcut menu) LabVIEW IDE extension. When right-clicking a free label (a comment) on the block diagram or front panel this tool adds a menu item named 'Set as VI Description'. When clicking this menu item, the tool copies the text from the free label and applies it to the VI Description.

This tool helps keep in sync the contents of a main comment on the block diagram or front panel and the VI Description. Such that the same comprehensive description of the VI is available both 'inside' the VI (on the BD or FP) and 'outside' the VI (in the VI Description/Context Help window).

If the VI Description already contains text, a prompt asks the user for confirmation before overwriting the VI Description. Optionally, bold characters in the free label are replicated in the VI description using B and /B tags. This is controlled by a Boolean setting named ProcessBoldCharacters located in the tool's ini file.

This package installs the following two files to the following location: <LabVIEW installation directory>\\resource\\plugins\\PopupMenus\\edit time panel and diagram
    - Free Label To VI Description.llb
    - Free Label To VI Description.ini

For example, to 'C:\\Program Files (x86)\\National Instruments\\LabVIEW 2022\\resource\\plugins\\PopupMenus\\edit time panel and diagram'

The source code is available inside the LLB file, or at the following Github repository: https://github.com/RobustoSystems/FreeLabelToViDescription

Good or bad, we love to hear from our users. Please email us at engineering@robustosystems.com with your thoughts, including bug reports and suggestions.