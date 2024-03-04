---
title: "Reference Example for Encrypting IP for LabVIEW FPGA"
externalUrl: https://www.vipm.io/package/ni_lib_reference_example_for_encrypting_ip_for_labview_fpga
date: 2016-05-19
summary: "This code shows an example of how to create and use an encryption scheme for protecting FPGA IP from being distributed to any other hardware except what was intended by the original distributor."
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
 - "serial"
---

Redirecting to https://www.vipm.io/package/ni_lib_reference_example_for_encrypting_ip_for_labview_fpga

Vendor: National Instruments

Author(s): IPNet
 
Full Description:
This code is intended to be an example of how to encrypt your FPGA bitfile so that it only runs with your original software and only with your original hardware.

This example includes three VIs.  The first VI is Create Encryption INI File.  The VI needs to be ran first and with the original hardware.  It generates a encrypted .ini file to be distributed with your system.  The encryption used is the Tiny Encryption Algorithm (TEA).  This method requires a Key(Hex) to be set by the user.  We use the original serial number in our Key to make the encrypted result hardware specific.  This Key is then used through out all the remaining VIs.  The second VI is the Decrypt File which shows how to decrypt the .ini file previously created and checks the validity of the result.  If the .ini file, Key(Hex) or hardware serial number isn't correct, it will stop the VI.  If everything is correct, it will pass a newly generated pair of encrypted random numbers to the FPGA along with the expected results and the original serial number for the Key.  The third VI is the FPGA VI called Main.  It decrypts the data sent down to it using the Key and compares it to the expected result.  Based on the result, you can either run your code or stop the FPGA VI.  For more information, please review the block diagrams of the code.

This example requires the CompactRIO Information (CRI) Component (http://zone.ni.com/devzone/cda/epd/p/id/1717) and is based off of A Design Pattern for Adding Licensing to a LabVIEW Real-Time Application (http://zone.ni.com/devzone/cda/epd/p/id/5912) and the Tiny Encryption Algorithm (TEA) for LabVIEW FPGA (http://zone.ni.com/devzone/cda/tut/p/id/7519).