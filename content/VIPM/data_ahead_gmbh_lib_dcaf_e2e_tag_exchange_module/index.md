---
title: "DCAF E2E Tag Exchange Module"
externalUrl: https://www.vipm.io/package/data_ahead_gmbh_lib_dcaf_e2e_tag_exchange_module
date: 2018-10-17
summary: "The Engine-to-Engine Tag Exchange (E2E) module is a plugin module developed for the Distributed Control and Automation (DCAF) framework by Data Ahead AG."
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
 - "Actor Framework"
 - "UI"
---

Redirecting to https://www.vipm.io/package/data_ahead_gmbh_lib_dcaf_e2e_tag_exchange_module

Vendor: Data Ahead AG

Author(s): Ian Knox
 
Full Description:
The Engine-to-Engine Tag Exchange (E2E) module is a plugin module developed for the Distributed Control and Automation (DCAF) framework by Data Ahead AG. The E2E module was created to simplify the exchange of tags between seperate DCAF engines. Rather than configuring output and input channels manually using a specific I/O Module to exchange tags, the E2E module handles channel configuration automatically when a tag is selected to be shared between engines. The editor node of the E2E module also allows the user to determine the transfer mechanism for tag exchange. The transfer mechanism determines the allowable data types, the pairing depth (inner-target, inter-target, both), and other specific configuration information. The module was designed to allow for users to create and add new transfer mechanisms.

**To Use:** 
This VIPM installer will attempt to add the E2E Module's destination directory to the DCAF Configuration Editor's plugin search paths. If successful, you will be able to add the E2E Module to your DCAF Engine's configuration by right clicking the engine configuration and selecting *Add>>Other>>E2E Tag Exchange*. If not, you will need to add the E2E Module's destination directory manually. The default installation directory for the E2E module is <color=blue>\\<LabVIEW>\\vi.lib\\Data Ahead AG\\DCAF\\E2E Tag Exchange Module</color>. Add the directory to the plugin search paths by selection *Tools>>Edit Plugin Search Paths...* from the toolbar of the DCAF Standard Configuration editor.

A fully functioning example for two current runtime implementations (UDP and RT FIFO) is included in this package. Run the example by opening the E2E Multi-Type Tag Exchange project file located at <color=blue>\\<LabVIEW>\\Data Ahead AG\\E2E Tag Exchange Module\\E2E Multi-Type Tag Exchange.lvproj</color>, opening Host Main.vi, and selecting a runtime implemenation. View the configuration for each runtime implemenation by opening the respective DCAF configuration file included in the examples directory with the DCAF Standard Configuration editor.

A help document has been included in this package and added to <color=blue>\\<LabVIEW>\\help\\Data Ahead AG\\E2E Help.pdf</color>. The help file can be accessed through the 'Detailed Help' link in the context menu of all toolkit VIs and through a hyperlink in the included example project.

This module is open source and is hosted on GitHub: https://github.com/LabVIEW-DCAF/E2E

Required Software
LabVIEW 2015 or Later
DCAF Tag Editor 2.1.3.172 or Later
DCAF Standard Engine 2.4.0.8 or Later
DCAF UI Reference Module 2.3.0.12 or Later (For Example)