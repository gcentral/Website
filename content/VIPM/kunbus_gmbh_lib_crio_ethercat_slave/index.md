---
title: "cRIO EtherCAT Slave"
externalUrl: https://www.vipm.io/package/kunbus_gmbh_lib_crio_ethercat_slave
date: 2018-12-20
summary: "EtherCAT Slave Interface for CompactRIO"
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
 - "I/O"
 - "NI"
 - "NI LabVIEW Tools Network"
 - "ethercat"
---

Redirecting to https://www.vipm.io/package/kunbus_gmbh_lib_crio_ethercat_slave

Vendor: KUNBUS GmbH

Author(s): Vogt
 
Full Description:
**EtherCAT Slave Interface for CompactRIO**
for LabVIEW 2018 or later

**Requirements**
*Software*
- LabVIEW 2018 or later
- LabVIEW 2018 Real-time Module AND FPGA module 
- NI-RIO 2018 or later 
- NI-Industrial Communications for EtherCAT 2018 or later (EtherCAT Master)
- KUNBUS *cRIO EtherCAT Slave* driver package (this package)
- KUNBUS *PDO Configurator* package 

*Hardware*
- KUNBUS cRIO ECAT module 
- NI cRIO chassis 
- 24 V DC power supply for the module 
- NI EtherCAT Master system or 3rd party EtherCAT master system 

**EtherCAT Slave Configuration**
You need to configure the cRIO ECAT S module with the *PDO-Configurator*. 
The PDO-Configurator can be started using
*Windows Start Menu -> Kunbus GmbH -> cRIO ECAT Slave -> Tools -> PDO-Configurator* 
or
*Tools* drop-down menu within LabVIEW clicking  *KUNBUS GmbH -> PDO-Configurator*
It's a separate VIPM package named *PDO Configurator* which can also be downloaded via Toolsnetwork.

Use the LabVIEW project *PDO Configuration Download* to download the configuration file.
The download tool can also be found in *LabVIEW -> Tools -> KUNBUS GmbH*

**Help**
The Installation Instructions manual and the Getting Started manual can be found in *LabVIEW -> Help -> KUNBUS GmbH -> cRIO ECAT Slave*.

**EtherCAT Slave Example**
The sample project can be found in the NI Example Finder: *LabVIEW -> Help -> Find Examples*.
Choose the directory *Toolkits and Modules -> Third-Party Add-Ons -> KUNBUS GmbH -> EtherCAT*
Open the LabVIEW project *cRIO ECAT S Getting Started.lvproj*