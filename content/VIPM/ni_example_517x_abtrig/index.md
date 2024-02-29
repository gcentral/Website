---
title: "NI AB Trigger for PXIe-517xR Host"
externalUrl: https://www.vipm.io/package/ni_example_517x_abtrig
summary: "**Required Hardware**
PXIe-5170R (4Ch) or
PXIe-5170R (8Ch) or
PXIe-5171R (8Ch)

**Required Software**
LabVIEW 2014 or later
NI-SCOPE 15.1 or later
Instrument Design Libraries for Reconfigurable Oscilloscopes 14.0

This example is based off the NI-SCOPE Configured Acquisition Example, and adds AB custom trigger functionality through the FPGA extension, in addition to the normal NI-SCOPE edge, window, immediate, etc."
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

Redirecting to https://www.vipm.io/package/ni_example_517x_abtrig

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
**Required Hardware**
PXIe-5170R (4Ch) or
PXIe-5170R (8Ch) or
PXIe-5171R (8Ch)

**Required Software**
LabVIEW 2014 or later
NI-SCOPE 15.1 or later
Instrument Design Libraries for Reconfigurable Oscilloscopes 14.0

This example is based off the NI-SCOPE Configured Acquisition Example, and adds AB custom trigger functionality through the FPGA extension, in addition to the normal NI-SCOPE edge, window, immediate, etc. triggers.

The AB Trigger is capable of the following operations, where **A** and **B** are edge or level triggers.

**A OR B:**
Acquisition is triggered on source A or B when the criteria for selected trigger type for instance A or B are met.
**A AND B**
Acquisition is triggered on source A or B when the criteria for selected trigger type for instance A as well as B are met.
**A THEN B**
Acquisition is triggered on source B when the criteria for selected trigger type for instance A followed by instance B are met.
**B THEN A**
Acquisition is triggered on source A when the criteria for selected trigger type for instance B followed by instance A are met.

While the AB Trigger is enabled, the following NI-SCOPE features will not work: High Resolution Timesamps (Interpolation).