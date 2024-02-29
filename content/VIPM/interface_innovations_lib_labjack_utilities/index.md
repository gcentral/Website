---
title: "LabJack Utilities"
externalUrl: https://www.vipm.io/package/interface_innovations_lib_labjack_utilities
summary: "This package is a set of utilities for configuration and measurement using LabJack's UD series of devices, the U3, U6, and UE9, on USB and Ethernet interfaces."
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
---

Redirecting to https://www.vipm.io/package/interface_innovations_lib_labjack_utilities

Vendor: Interface Innovations

Author(s): Colin Reese
 
Full Description:
This package is a set of utilities for configuration and measurement using LabJack's UD series of devices, the U3, U6, and UE9, on USB and Ethernet interfaces. Use of the package requires installation of the LabJack UD driver, free and available at http://labjack.com/support/windows-ud and the Interface Innovations Shared Library available at http://interfaceinnovations.org/downloads.html. This package is not currently endorsed by LabJack.

The package contains a set of general utility functions for use with all LabJack UD Devices: U3, U6 and U9, along with three applications employing the toolkit:

UD Logger : A full-featured data logger built on an optimized and multithreaded Queued State Machine architecture.

UD ID Utility : Device utility to change local IDs and IPs of UD devices, facilitating use of many devices on the same interface

UD Test Data Rate : Application to help the user explore the characteristics of their hardware setup and determine best and worst-case timing statistics.

The main building block for users wishing to develop their own LabVIEW applications is the UD IO VI. This VI offers simple, flexible input and output from all LabJack UD devices (U3, U6 and U9) on USB and Ethernet interfaces, with built-in error correction/handling. The VI also provides specification and pictorial reference information on the devices. The VI can be operated in a Standard mode, which queries the specified interface on each execution, or Express Mode, where a device information cluster is passed. Bypassing the Find All function in Express Mode greatly increases the speed of execution.