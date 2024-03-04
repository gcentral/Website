---
title: "NI RFFE Host Example for the PXIe-5644/45R/46R"
externalUrl: https://www.vipm.io/package/national_instruments_lib_ni_rffe_host_example_for_the_pxie_5644_45r
date: 2016-05-19
summary: "**This example replaces LabVIEW 2012 support with LabVIEW 2013 support."
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
 - "FPGA"
 - "NI"
 - "NI LabVIEW Tools Network"
---

Redirecting to https://www.vipm.io/package/national_instruments_lib_ni_rffe_host_example_for_the_pxie_5644_45r

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
**This example replaces LabVIEW 2012 support with LabVIEW 2013 support.  In addition to the VIPM resolved dependencies, the following *must* be present on the system for correct operation:

Hardware:
NI PXIe-5644R/45R/46R

Software:
LabVIEW 2013 or LabVIEW 2013 SP1
RFSA 2.9 or 2.9.1
RFSG 1.9.7 or 1.9.8
NI PXIe-5644R/5645R/5646R Instrument Design Libraries 13.5**

This example demonstrates using DMA FIFOs to write and read data through the RFFE Master interface. The Slave Interface included in the example (inside the FPGA) can be programmed with any product ID and Manufacturer IDs desired using the 'RFFE Slave Settings' controls. The 'test.use memory' control will access a continuous memory inside the slave interface that maps to all possible RFFE transfer addresses (0 to 65535) when set to true. Otherwise, discrete registers inside the slave will be accessed - the memory option is available for demonstration purposes only. 

The 'transfer settings' control sets the timing parameters in the Master to use for the transfer (see included documentation for further details on each element of this control. 

This example performs a single write access followed by a single read access across the RFFE bus. The command frames for each are programmable above. Random data written to the device is shown in the 'Data Written' indicator and the data read back from the device is shown in the 'Data Read' indicator. To read from the slave interface in the FPGA, the 'Slave Address' element of the command frame must be set to match the slave's actual USID. Also note that the 'Byte Count' element of the command frame is the actual number of bytes to transfer minus one.