---
title: "NC-10 (System)"
externalUrl: https://www.vipm.io/package/novator_solutions_lib_nc_10_system
date: 2020-01-10
summary: "Novator Solutions NC-10 is an NI LabVIEW™ Toolkit that lets LabVIEW users leverage powerful industry-leading channelization techniques."
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

Redirecting to https://www.vipm.io/package/novator_solutions_lib_nc_10_system

Vendor: Novator Solutions

Author(s): Novator Solutions
 
Full Description:
Novator Solutions NC-10 is an NI LabVIEW™ Toolkit that lets LabVIEW users leverage powerful industry-leading channelization techniques. It comprises two parts, a host API and an FPGA bitfile that is configured by the API. No LabVIEW FPGA programming is required to use NC-10.

Up to 1024 channels* can be extracted simultaneously from the input data stream, and each of the 1024 channels can be tuned individually and reconfigured during program execution.

The NC-10 Core is based on NI FPGA technology found in e.g. FlexRIO. NC-10 Core can be integrated into other systems, where it uses Peer-to-Peer streaming to receive data from signal sources (VSAs, digitizers etc.). The channelized data is sent to a host computer or other Peer-to-Peer capable plugin modules for display or further analysis. The USRP-2955 and USRP-2945 target does not use Peer-to-Peer but instead the onboard radio inputs, and outputs the data on SFP+ 10GbE ports.

**How to get started:**
Please read sections Introduction and Gettings Started in the NC-10 help file ( located at Help>>Novator Solutions>>NC-10 after install) for information about evaluation of this software and appropriate examples to run.

**Driver requirements:**
NI-RIO
NI-RFSA (for certain examples)
NI-FlexRIO
NI-USRP

Make sure that the target specific driver that will be used is installed prior to installing this toolkit.

**Supported hardware and requirement**
Channelizing hardware:
NI USRP-2955
NI USRP-2945
PXIe-7975**
PXIe-7976**
PXIe-7915**

**FlexRIO targets needs a peer to peer enabled RFSA device to retrieve data from.
*some targets have less than 1024 channels due to FPGA size and Channelization configuration such as input rates