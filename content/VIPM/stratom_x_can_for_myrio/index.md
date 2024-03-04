---
title: "X-CAN for myRIO"
externalUrl: https://www.vipm.io/package/stratom_x_can_for_myrio
date: 2016-05-19
summary: "X-CAN for myRIO software library that provides CAN write and read functionality to the myRIO device."
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
 - "I/O"
 - "NI"
 - "NI LabVIEW Tools Network"
---

Redirecting to https://www.vipm.io/package/stratom_x_can_for_myrio

Vendor: Stratom, Inc

Author(s): Stratom, Inc.
 
Full Description:
**X-CAN** for myRIO project library. Use this project library to learn how to communicate with the X-CAN for myRIO hardware using straight forward examples. This project also includes the necessary software dependencies required to read and write CAN frames from the X-CAN device. *This package requires VIPM 2014 or later for installation.*

To run sample project ensure the following steps for hardware and software are performed.
Hardware:
1. Ensure X-CAN hardware is plugged into the MXP A connector on myRIO
2. A compatable RAW CAN device is plugged into the myRIO using the DB9 or 3-Pin screw terminal connector.

Software:
1. Open LabVIEW
2. Select 'Create Project' from the Getting Started Window splash screen
3. Select the myRIO category underneath Sample Projects
4. Choose the X-CAN for myRIO application and complete the wizard to launch the project
5. Open RT Main.vi
6. Select Read or Write mode and Loop Rate
7. Run RT Main.vi
8. Observe the X-CAN LEDs for read or write operations. The CAN Frame [Read] indicator will
show data recieved from the raw CAN device when a successfull connection is made.