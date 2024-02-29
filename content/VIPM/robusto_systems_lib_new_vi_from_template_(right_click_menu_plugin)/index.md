---
title: "New VI From Template (Right-Click Menu Plugin)"
externalUrl: https://www.vipm.io/package/robusto_systems_lib_new_vi_from_template_(right_click_menu_plugin)
summary: "This package installs a right-click menu plugin to help create new VI's and CTL's from templates, and add them into a LabVIEW project, LabVIEW library (lvlib) or class (lvclass) more quickly and with fewer clicks."
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
 - "UI"
---

Redirecting to https://www.vipm.io/package/robusto_systems_lib_new_vi_from_template_(right_click_menu_plugin)

Vendor: Robusto Systems

Author(s): Petru Tarabuta
 
Full Description:
This package installs a right-click menu plugin to help create new VI's and CTL's from templates, and add them into a LabVIEW project, LabVIEW library (lvlib) or class (lvclass) more quickly and with fewer clicks.

To launch the tool right-click on a free label (a comment) on the block diagram of a VI and select 'New VI From Template...'. A GUI will pop-up. The GUI enables the user to select a template VI or CTL and insert a copy of the template file into the project (lvproj), library (lvlib), or class (lvclass) that owns the VI from which the user right-clicked. The GUI displays a preview of the front panel and block diagram of the selected template VI or CTL, to assist in selecting the right template.

This package installs:
1. A LLB file named 'New VI From Template.llb' to location: <LabVIEW installation directory>\\resource\\plugins\\PopupMenus\\edit time panel and diagram ; For example, to 'C:\\Program Files (x86)\\National Instruments\\LabVIEW 2022\\resource\\plugins\\PopupMenus\\edit time panel and diagram' ; This LLB contains the source code of the plugin.
2. Several template VI, VIT, CTL, and CTT files. These are some of the template files we use at Robusto Systems. Feel free to use these templates, or to replace them with your own. The template files are installed in a folder named 'Template VIs and CTLs' inside the User Documents folder. For example: 'C:\\Users\\Petru\\Documents\\Template VIs and CTLs\\LabVIEW 2022'. Feel free to add your own template files into that folder. You can move the templates folder to a location of your choice. In the tool, click on the 'Settings' menu option. Use the Settings Editor to point the 'Templates Folder' to the new location of your template files.

The source code is available inside the LLB file, or at the following GitHub repository: https://github.com/RobustoSystems/NewViFromTemplate

Good or bad, we love to hear from our users. Please email us at engineering@robustosystems.com with your thoughts, including bug reports or suggestions.