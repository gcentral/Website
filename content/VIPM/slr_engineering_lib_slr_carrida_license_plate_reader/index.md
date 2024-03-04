---
title: "SLR CARRIDA License plate reader"
externalUrl: https://www.vipm.io/package/slr_engineering_lib_slr_carrida_license_plate_reader
date: 2016-05-19
summary: "LabView interface for the high performance license plate reader 'CARRIDA'"
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
 - "NI"
 - "NI LabVIEW Tools Network"
 - "camera"
---

Redirecting to https://www.vipm.io/package/slr_engineering_lib_slr_carrida_license_plate_reader

Vendor: SLR Engineering

Author(s): Martin Wollendorfer
 
Full Description:
The SLR Engineering license plate module detects and reads number plates for monitoring, access control and statistics. It is immune to lighting changes, extremely fast, and well suited for embedded as well as mobile systems. The module is practically configuration free and it can be trained to read codes on boxes, containers with special fonts or even pure symbolic codes.

The software for detection and reading of license plates developed by SLR Engineering can be used for applications in traffic monitoring, and traffic planning.

**Typical Performance of CARRIDA core:**

    processes 120 frames @ CIF resolution on standard PC
    processes 50 frames/sec @ 4CIF resolution on standard PC
    typical accuracy per character 99.7%
    typical accuracy per license plate 95%

**Product advantages**

    excellent license plate detection capability
    very low processing and memory footprint
    practically configuration free
    trainable to symbols
    now, usably also as module in LabView

**DEPENDENCIES:**
=> Visual C++ Redistributable for Visual Studio 2012 Update 4  
      (https://www.microsoft.com/en-US/download/details.aspx?id=30679)
=> NI Vision Toolkit

Package includes:
- VI functions to initialize, process, visualize and deinit
- 2 examples demonstrating how to use CARRIDA
- 1 demo image (due to privacy restrictions we are not able to provide real images of license plates)
- classifier for europe (AT, CH, CZ, DE, ES, FR, HU, IT, PL, SE, SK, and UA)

**RESTRICTIONS:**
This is a DEMO version with reduced detection capability. The unrestricted versions detection rate is about 15% higher than the demo version. Detection in low-light and noisy images is improved.

If you are interested in our product, please contact us (info@slr-engineering.at) and get a full version.
We also provide integrated camera solution with processing directly inside the camera.