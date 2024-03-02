---
title: "I2C&SPI API"
externalUrl: https://www.vipm.io/package/national_instruments_lib_i2c&spi_api
date: 2016-05-19
summary: "This driver includes NI LabVIEW host code and LabVIEW FPGA code for the Serial Peripheral Interface (SPI) and Inter-Integrated Circuit (I2C) protocol communication engine."
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

Redirecting to https://www.vipm.io/package/national_instruments_lib_i2c&spi_api

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
This driver includes NI LabVIEW host code and LabVIEW FPGA code for the Serial Peripheral Interface (SPI) and Inter-Integrated Circuit (I2C) protocol communication engine. This driver acts as an SPI master, an I2C master, or an SPI slave. This driver uses field-programmable gate array (FPGA) digital I/O lines to communicate with the SPI masters, the SPI slaves, and the I2C slaves. NI Single-Board RIO hardware works with both the SPI and I2C masters, whereas NI 9401 works with the SPI masters and NI 9402 works with the I2C masters. NI Single-Board RIO hardware, NI 9401, NI 9402, and PXI modules work with the SPI slaves. 

When the slave FPGA clock is 40 MHz, the maximum master clock is 1 MHz. When the slave FPGA clock is 80 MHz, the maximum master clock is 2 MHz. 

Install this driver by using VI Package Manager. Disable Mass Compile when you install this driver to LabVIEW 2010 or later, because a broken VI appears when you enable Mass Compile. Complete the following steps to disable Mass Compile:
1. Open VI Package Manager.
2. Select Tools'Options. In the VIPM - Options dialog box that appears, remove the checkmark from the Mass Compile VIs After Package Installation checkbox.