---
title: "PROVEtech:RBS"
externalUrl: https://www.vipm.io/package/akka_automotive_lib_provetech_rbs
summary: "**Start LabVIEW and VI Package Manager with administrator privileges."
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

Redirecting to https://www.vipm.io/package/akka_automotive_lib_provetech_rbs

Vendor: AKKA GmbH & Co. KGaA

Author(s): AKKA GmbH & Co. KGaA
 
Full Description:
**Start LabVIEW and VI Package Manager with administrator privileges.

Requires NI License Manager 4.5 or later (https://www.ni.com/en-us/support/downloads/software-products/download.ni-license-manager.html).
Requires Microsoft Visual C++ Redistributable für Visual Studio 2015, 2017 und 2019 (https://support.microsoft.com/de-de/help/2977003/the-latest-supported-visual-c-downloads)
**

- Provides a solution for automotive bus communication for LabVIEW
- Supports CAN, CAN-FD, Automotive Ethernet (SOME/IP, SOME/IP-SD), LIN, and FlexRay
- Supports event-based and time triggered communication
- Supports different bus description format files: .dbc, .ldf, and AUTOSAR XML
- Deployable on all NI targets (Windows, PharLap, NI Linux Real-Time) with NI-XNET bus interfaces
- Offers short integration and configuration times

**NOTE - Usage on Real-Time system:**
Installation
1. Start VIPM and LabVIEW both as Administrator
2. Install .vip
3. Copy 'C:\\Program Files\\National Instruments\\RT Feeds\\provetechrbs-api_x.x.x.x_x64.ipk' to '/home/admin' on RT system using SFTP tool
4. Make sure RT target is connected to internet
5. SSH into target, run: opkg install provetechrbs-api_x.x.x.x_x64.ipk
6. Reboot RT target
7. For NI real-time targets an additional license is used.
   a. Run  *Examples\\Signals Single Point CAN.vi* in a new real-time project. This will create ''/tmp/\\<target name>.seed'. 
   b. Obtain a valid license key file by emailing your RBS serial number, the desired modules (CAN, LIN, FlexRay, Ethernet) and the file '/tmp/\\<target name>.seed' to provetech-rbs@akka.eu.
   c. Copy a valid *.key file to '/home/admin'. 
   d. Run example again.