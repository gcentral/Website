---
title: "Certification Authority"
externalUrl: https://www.vipm.io/package/labview_open_source_project_lib_certification_authority
date: 2020-10-23
summary: "Certification Authority for Self-Signed Certificates"
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
 - "VIPM Community"
 - "serial"
---

Redirecting to https://www.vipm.io/package/labview_open_source_project_lib_certification_authority

Vendor: LabVIEW Open Source Project

Author(s): Francois Normandin
 
Full Description:
This package provides a Utility to generate self-signed certificates (root CA and server Trusted Certificate + private key) to be deployed in a local network.

The Utility currently supports Cloudflare's SSL workflow for generating the certificates. 
https://github.com/cloudflare/cfssl/

Installation:

After installing the package, you can run the Utility from the Tools menu, under 'LabVIEW Open Source Project' submenu. 

From the UI, you can get a link to the Cloudflare SSL project page where you can download the CFSSL executable for your system. 

Download link: https://github.com/cloudflare/cfssl/releases

Download the version of CFSSL that corresponds to your system, and copy the cfssl.exe file under '<LabVIEW Data>/LabVIEW Open Source Project/cfssl' folder 

The file must be renamed to 'cfssl.exe' to be detected by the Utility.