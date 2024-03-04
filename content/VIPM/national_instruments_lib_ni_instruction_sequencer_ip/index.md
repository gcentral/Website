---
title: "NI Instruction Sequencer IP"
externalUrl: https://www.vipm.io/package/national_instruments_lib_ni_instruction_sequencer_ip
date: 2016-05-19
summary: "This IP contains a memory to hold sets of instructions, called sequences, which can be issued from the IP on the FPGA to another component on the FPGA, such as a digital protocol generator. This facilitates FPGA-based reconfiguration."
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
 - "protocol"
---

Redirecting to https://www.vipm.io/package/national_instruments_lib_ni_instruction_sequencer_ip

Vendor: National Instruments

Author(s): National Instruments
 
Full Description:
This IP contains a memory to hold sets of U32 data values, or instructions. Instructions are grouped into sequences, and there may be one or more sequences in the memory. Events on the FPGA cause an entire sequence of instructions to be sent to the downstream IP, accommodating back-pressure or flow control. After a sequence is generated, the IP advances to the next sequence in the memory. Once all sequences have been generated, the IP returns to the first sequence, enabling looping.