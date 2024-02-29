---
title: "I2C Implementation in LabVIEW FPGA"
externalUrl: https://www.vipm.io/package/national_instruments_lib_i2c_implementation_in_labview_fpga
summary: "I2C is a synchronous protocol based on a two wire bus."
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

Redirecting to https://www.vipm.io/package/national_instruments_lib_i2c_implementation_in_labview_fpga

Vendor: National Instruments

Author(s): IPNet
 
Full Description:
I2C is a synchronous protocol based on a two wire bus. The I2C bus is a multi-master bus with the ability to have multiple slave devices that can all be independently controlled. All communication between a master and slave device fit into three basic sequence formats: Master-to-Slave Write, Master-Slave Read, or a combined Master-to-Slave Write with Read sequence.This is an example of an FPGA implementation for the I2C protocol that can be utilized to communicate with any I2C Slave Device.
 
I2C Implementation Example for LabVIEW FPGA. The I2C Host VI, I2C_Host_Top-Level.vi, is written to be used in LabVIEW Windows applications. The VI can easily be called from within a state-machine design pattern for communication with I2C slave devices. In addition this format lends itself nicely for use in TestStand sequences when the DUT has I2C chips that require testing.The top-level VI that runs on the FPGA is named ‘I2C_Core_Top-Level.vi’ in the LabVIEW project file. The VI architecture is comprised of two parallel executing while loops, the first loop runs the I2C Protocol and the second loop is for Memory Block Access for HOST communication.See the pdf file in the documentation folder for more details.
 
 
Note: This code does not deal with slave clock stretching or arbitration between Masters.
 
Please review the PDFs included in the documentation folder.